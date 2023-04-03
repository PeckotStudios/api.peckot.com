/**
 * 漂流瓶 API
 *
 * 授权要求：需要验证授权。
 *
 * 路径参数：
 * operation - 操作类型，默认值为 "pick"。
 *
 * 查询参数：
 * remove：
 * filter - JSON 字符串，用于确定要删除的漂流瓶。仅管理员可用。
 *
 * throw：
 * from - JSON 字符串，漂流瓶信息参数。
 * content - 漂流瓶内容，字符串，有最大字符限制。
 * platform - 投放平台，字符串，有最大字符限制。
 * thrower - 投放者，字符串，有最大字符限制。
 *
 * pick：无需提供参数。
 *
 * 返回：
 * 操作成功：HTTP 状态码为 200，返回 JSON 对象。
 * 操作失败：HTTP 状态码为 4xx 或 5xx，返回 JSON 对象。
 */

import { $authorize, $json_error, $json_info } from "../.lib/API";
import { MongoClient } from "mongodb";
import { randomInt } from "crypto";

export default async (req, res) => {
    // 授权检查
    if (!(await $authorize("DriftingBottle", req.headers.authorization))) {
        $json_error(res, 401, "Access unauthorized!", "Please complete the authorization parameters.");
        return;
    }

    // 输入参数
    let query = req.query;
    if (req.method == "POST") query = req.body ? JSON.parse(req.body) : {};
    if (!query.operation) query.operation = "pick";

    // 主处理流程
    const mongoClient = new MongoClient(process.env.MONGODB_URI).db("drifting_bottle");
    const configCollection = mongoClient.collection("config"); // 获取配置文档的集合
    const bottlesCollection = mongoClient.collection("bottles"); // 获取漂流瓶文档的集合
    const configDocument = await configCollection.findOne(); // 获取配置文档对象
    const existingBottles = configDocument && configDocument.bottles ? configDocument.bottles.map(n => Number.parseInt(n, 10)) : []; // 获取所有已经存在的漂流瓶
    const historyAmount = configDocument && configDocument.amount ? configDocument.amount : 0; // 获取历史漂流瓶数量

    switch (operation) {
        case "remove": // 删除一批漂流瓶
            if (new String(req.headers.authorization).replace(/Bearer pkt-/, "").trim() != process.env.ADMIN_KEY) {
                $json_error(res, 403, "No permission!"); // 没有权限
                return;
            }
            var { filter } = query; // 获取过滤条件
            if (!filter) {
                $json_error(res, 400, "Invalid argument `filter` given!"); // 过滤条件无效
                return;
            }
            filter = JSON.parse(filter);
            const removing = (await bottlesCollection.find(filter, { _id: 0 }).toArray()); // 找到符合过滤条件的漂流瓶
            var removedBottles = existingBottles; // 存储已经删除的漂流瓶
            removing.forEach(b => {
                const i = removedBottles.indexOf(b.i);
                removedBottles = removedBottles.slice(0, i).concat(removedBottles.slice(i+1))
            });
            bottlesCollection.deleteMany(filter) // 从数据库中删除所有符合条件的漂流瓶
                .then(result => {
                    configCollection.findOneAndReplace({}, { amount: historyAmount, bottles: removedBottles })
                        .then(ignored => {
                            if (result.deletedCount == 0) $json_info(res, 200, undefined, "Did not match any bottles."); // 没有匹配到任何漂流瓶
                            else $json_info(res, 200, { bottles: removing.map(n => db2re(n)) },
                                `Successfully remove ${result.deletedCount} bottle${result.deletedCount == 1 ? "" : "s"}!`)
                        })
                        .catch(error => $json_error(res, 500, error)) // 服务器错误
                })
                .catch(error => $json_error(res, 500, error)); // 服务器错误
            break;
        case "throw": // 投掷漂流瓶
            const input = query.input;
            var _content, _platform, _nick, _uid;
            if (input && input.toLowerCase() == "flat") {
                const { content, platform, nick, uid } = query;
                if (!content) {
                    $json_error(res, 400, "Invalid argument `content` given!");
                    return;
                }
                if (!platform) {
                    $json_error(res, 400, "Invalid argument `platform` given!");
                    return;
                }
                if (!nick) {
                    $json_error(res, 400, "Invalid argument `nick` given!");
                    return;
                }
                if (!uid) {
                    $json_error(res, 400, "Invalid argument `uid` given!");
                    return;
                }
                _content = content, _platform = platform, _nick = nick, _uid = uid;
            } else {
                const { content, from } = query;
                var _from;
                if (!content) {
                    $json_error(res, 400, "Invalid argument `content` given!");
                    return;
                }
                if (!(from && (_from = JSON.parse(from)) &&_from.platform && _from.thrower && _from.thrower.nick && _from.thrower.uid)) {
                    $json_error(res, 400, "Invalid argument `from` given!");
                    return;
                }
                _content = content, _platform = _from.platform, _nick = _from.thrower.nick, _uid = _from.thrower.uid;
            }
            const throwing = {
                i: 100000 + historyAmount,
                t: new Date().getTime(),
                c: _content,
                f: {
                    p: _platform,
                    t: {
                        n: _nick,
                        u: _uid,
                    },
                },
            };
            existingBottles.push(throwing.i); // 在现有漂流瓶的列表中加入新投掷的漂流瓶
            bottlesCollection.insertOne(throwing) // 插入新的漂流瓶文档到数据库
                .then(result => {
                    configCollection.replaceOne({}, { amount: historyAmount + 1, bottles: existingBottles })
                        .then(ignored =>
                            $json_info(res, 201, { bottles: db2re(throwing) },
                                `Successfully throw the bottle: ${result.insertedId}`))
                        .catch(error => $json_error(res, 500, error)); // 服务器错误
                })
                .catch(error => $json_error(res, 500, error)); // 服务器错误
            break;
        case "pick":
        default:
            console.log(existingBottles[randomInt(existingBottles.length)])
            const picking = db2re(await bottlesCollection.findOne({
                i: existingBottles[randomInt(existingBottles.length)]
            }, { _id: 0 }));
            $json_info(res, 200, {
                bottles: [picking],
            });
            break;
    }
}

function db2re(obj) {
    return {
        id: obj.i, // 漂流瓶编号
        timestamp: obj.t, // 投掷时间
        content: obj.c, // 投掷内容
        from: {
            platform: obj.f.p, // 投掷平台
            thrower: {
                nick: obj.f.t.n,
                uid: obj.f.t.u,
            }, // 投掷者信息
        },
    };
}

