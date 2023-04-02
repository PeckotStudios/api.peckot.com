/**
 * Drifting bottle API
 * RequireAuthorize: true
 * Description: This API allows authenticated users to throw or pick a drifting bottle.
 * Request: <Type> (Required) [Optional = {DefaultValue}]
 *   <string>  [operation = "pick"]   - operation to perform, "throw" or "pick"
 *   <object>  [from]                 - JSON stringified object that contains the content, platform, and thrower of the throwing bottle
 *   <string>  [content]              - content of the throwing bottle
 *   <string>  [platform]             - platform of the throwing bottle
 *   <string>  [thrower]              - thrower of the throwing bottle
 * Response: <Type> [Key] {Condition}
 *   <integer> [code]    {None}       - HTTP status code
 *   <string>  [message] {None}       - message regarding response status
 *   <string>  [advice]  {Fail}       - debug advice in case of error
 *   <object>  [data]    {Seccess}    - object that contains the bottle information, including its ID, timestamp, content, and source platform and thrower
 * @param {*} req - Express request object
 * @param {*} res - Express response object
 */

import { $authorize, $json_error, $json_info } from "../.lib/API";
import { MongoClient } from "mongodb";
import { randomInt } from "crypto";

export default async (req, res) => {
    // Authorization
    if (!(await $authorize("DriftingBottle", req.headers.authorization))) {
        $json_error(res, 401, "Access unauthorized!", "Please complete the authorization parameters.");
        return;
    }

    // Input arguments
    const {
        operation = "pick",
    } = req.query;

    // Main Process
    const mongoClient = new MongoClient(process.env.MONGODB_URI).db("drifting_bottle");
    const configCollection = mongoClient.collection("config");
    const bottlesCollection = mongoClient.collection("bottles");
    const configDocument = await configCollection.findOne();
    const existingBottles = configDocument && configDocument.bottles ? configDocument.bottles.map(n => Number.parseInt(n, 10)) : [];
    const historyAmount = configDocument && configDocument.amount ? configDocument.amount : 0;

    switch (operation) {
        case "remove":
            if (new String(req.headers.authorization).replace(/Bearer pkt-/, "").trim() != process.env.ADMIN_KEY) {
                $json_error(res, 403, "No permission!");
                return;
            }
            var { filter } = req.query;
            if (!filter) {
                $json_error(res, 400, "Invalid argument `filter` given!");
                return;
            }
            filter = JSON.parse(filter);
            const removing = (await bottlesCollection.find(filter, { _id: 0 }).toArray());
            var removedBottles = existingBottles;
            removing.forEach(b => {
                const i = removedBottles.indexOf(b.i);
                removedBottles = removedBottles.slice(0, i).concat(removedBottles.slice(i+1))
            });
            bottlesCollection.deleteMany(filter)
                .then(result => {
                    configCollection.findOneAndReplace({}, { amount: historyAmount, bottles: removedBottles })
                        .then(ignored => {
                            if (result.deletedCount == 0) $json_info(res, 200, undefined, "Did not match any bottles.");
                            else $json_info(res, 200, { bottles: removing.map(n => db2re(n)) },
                                `Successfully remove ${result.deletedCount} bottle${result.deletedCount == 1 ? "" : "s"}!`)
                        })
                        .catch(error => $json_error(res, 500, error))
                })
                .catch(error => $json_error(res, 500, error));
            break;
        case "throw":
            var { from, content, platform, thrower } = req.query;
            from = JSON.parse(from ? from : "{}")
            if (!(content || (content = from.content))) {
                $json_error(res, 400, "Invalid argument `content` given!");
                return;
            }
            if (!(platform || (platform = from.platform))) {
                $json_error(res, 400, "Invalid argument `platform` given!");
                return;
            }
            if (!(thrower || (thrower = from.thrower))) {
                $json_error(res, 400, "Invalid argument `thrower` given!");
                return;
            }
            const throwing = {
                i: 100000 + historyAmount,
                t: new Date().getTime(),
                c: content,
                f: {
                    p: platform,
                    t: thrower,
                },
            };
            existingBottles.push(throwing.i)
            bottlesCollection.insertOne(throwing)
                .then(result => {
                    configCollection.replaceOne({}, { amount: historyAmount + 1, bottles: existingBottles })
                        .then(ignored =>
                            $json_info(res, 201, { bottles: db2re(throwing) },
                                `Successfully throw the bottle: ${result.insertedId}`))
                        .catch(error => $json_error(res, 500, error));
                })
                .catch(error => $json_error(res, 500, error));
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
        id: obj.i,
        timestamp: obj.t,
        content: obj.c,
        from: {
            platform: obj.f.p,
            thrower: obj.f.t,
        },
    };
}

