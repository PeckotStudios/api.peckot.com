// Dependencies
import { error as $error } from "../.lib/API";
import { get } from "axios";
import { readFileSync } from "fs";
import { MinecraftServerListPing as mslp } from "minecraft-status";
import { MongoClient as mongo, ServerApiVersion as mongov } from "mongodb";

// Data
const hitonode = process.env.PCL2_HITOKOTO_NODE;
const host = process.env.PECKOTMC_HOST;
const interval = process.env.PCL2_INTERVAL;
const mongouri = process.env.MONGODB_URI;
const port = process.env.PECKOTMC_PORT;
const time = new Date();

export default async (req, res) => {

    // Preprocess
    res.setHeader("Content-Type", "application/json");
    var source = new String();
    try {
        source += readFileSync(`${__dirname}/../public/PCL2HomePage/source.xaml`, "utf-8");
    } catch (error) {
        res.send($error(error, "Confirm whether the source file is available."));
        return;
    }

    // Main process
    mongo.connect(mongouri, {
        useNewUrlParser: true,
        useUnifiedTopology: true,
        serverApi: mongov.v1,
    }, async (err, client) => {
        if (err) {
            res.send($error(err, "Please check the database uri!"));
        } else {
            const collection = client.db("peckotapi").collection("apiconfig");
            const docs = await collection.findOne({ apiname: "PCL2HomePage" });
            // rate limit
            var limit = false;
            if (null == docs) {
                await collection.insertOne({ apiname: "PCL2HomePage" });
                limit = false;
            } else {
                const lastupdate = docs.lastupdate;
                if (lastupdate && docs.data) {
                    if (time.getTime() - lastupdate >= interval) limit = false;
                    else limit = true;
                } else {
                    limit = false;
                }
            }
            // result
            const info = limit ? docs.data : await serverinfo();
            const hitokotos = [
                await hitokoto(),
                await hitokoto(),
                await hitokoto(),
            ];
            await collection.updateOne({ apiname: "PCL2HomePage" }, {
                $set: {
                    apiname: "PCL2HomePage",
                    lastupdate: time.getTime(),
                    data: info,
                }
            });
            source = placeholders(source, info, hitokotos, limit ? new Date(docs.lastupdate) : time);
            res.status(200).setHeader("Content-Type", "application/json").send(source);
        }
        client.close();
    });
}

// Set placeholders
const placeholders = (source, info, hitokotos, time) => {
    if (info.status == "在线") {
        let online = parseInt(info.online.split("/")[0]);
        if (online <= 0) {
            source = source.replace(/\$\(textlist\)/, "无玩家");
        } else if (online >= 2) {
            source = source.replace(/\$\(textlist\)/, "");
            source = source.replace(/\<\!\-\-\$\(showlist\)|\$\(showlist\)\-\-\>/g, "");
            source = source.replace(/\$\(playerlist\)/, info.playerlist);
        } else {
            source = source.replace(/\$\(textlist\)/, info.playerlist);
        }
    } else {
        source = source.replace(/\$\(textlist\)/, "无数据");
    }
    return source
        .replace(/\$\(status\)/, info.status)
        .replace(/\$\(online\)/, info.online)
        .replace(/\$\(broadcast\)/, "暂时没有公告...")
        .replace(/\$\(hitokoto1\)/, hitokotos[0])
        .replace(/\$\(hitokoto2\)/, hitokotos[1])
        .replace(/\$\(hitokoto3\)/, hitokotos[2])
        .replace(/\$\(time\)/, time.toLocaleString("zh-CN", {
            timeZone: "Asia/Shanghai",
            hour12: false,
            month: "2-digit",
            day: "2-digit",
            hour: "2-digit",
            minute: "2-digit",
            second: "2-digit"
        }));
}

// Get Minecraft server info
const serverinfo = async () => {
    var result = null;
    await mslp.ping(4, host, port, 10000)
        .then(response => {
            result = {
                status: "在线",
                online: `${response.players.online}/${response.players.max}`,
                playerlist: (() => {
                    let playerlist = [];
                    if (response.players.sample == undefined) return "";
                    response.players.sample.forEach(player => {
                        playerlist.push(`${player.name}`);
                    });
                    return playerlist.join(", ");
                })()
            };
        })
        .catch(ignore => result = { status: "离线", online: "无数据" });
    return result;
}

// Get hitokoto
const hitokoto = async () => {
    var result = null;
    await get(hitonode == "INTERL" ? "https://international.v1.hitokoto.cn" : "https://v1.hitokoto.cn")
        .then(({ data }) => result = data.hitokoto)
        .catch(ignore => result = "Error: 一言语录获取失败");
    return result;
}