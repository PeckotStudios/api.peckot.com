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
    const existingBottles = configDocument.bottles;
    const historyAmount = configDocument.amount;

    switch (operation) {
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
            bottlesCollection.insertOne(throwing)
                .then(result => {
                    configCollection.replaceOne({}, { bottles: existingBottles.push(throwing.i) })
                        .then(ignored =>
                            $json_info(res, 201, { bottles: db2re(throwing) },
                                `Successfully throw the bottle: ${result.insertedId}`))
                        .catch(error => $json_error(res, 500, error));
                })
                .catch(error => $json_error(res, 500, error));
            break;
        case "pick":
        default:
            const picking = db2re(await bottlesCollection.findOne({ id: existingBottles[randomInt(existingBottles.length)] }));
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

