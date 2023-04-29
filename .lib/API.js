/**
 * Includes some common functions used in APIs.
 * @author Pectics
 */
import { MongoClient } from "mongodb";

export function $json_info(response, code = 200, data, message = 'Data request succeeded!') {
    return response.setHeader("Content-Type", "application/json").status(code).send(
        JSON.stringify({
            code: code,
            message: message,
            data: data,
        }, null, 4)
    );
}

export function $json_error(response, code = 400, err, advice = 'Refer to docs.peckot.com for more.') {
    return response.setHeader("Content-Type", "application/json").status(code).send(
        JSON.stringify({
            code: code,
            message: err.message ?
                `Data request failed! Error: ${err.message}` :
                typeof err == "string" ? err :
                    "Data request failed!",
            advice: advice,
        }, null, 4)
    );
}

export async function $authorize(api, key) {
    if (!(api && key)) return false;
    key = new String(key).replace(/Bearer pkt-/, '').trim();
    const mongo = new MongoClient(process.env.MONGODB_URI);
    const user = await mongo.db("apikey").collection("users").findOne({ key: key });
    if (user && user.access && user.access.length > 0) {
        const id = (await mongo.db("apikey").collection("apis").findOne({ api: api })).id;
        if (id) return user.access.includes(-1) || user.access.includes(id);
    }
    return false;
}

export function $emoji(text) {
    const emojis = require("./emojis").default
    return text.replace(/:([a-z0-9_\-]+):/g, (match, name) => {
        return emojis[name] || match;
    });
}