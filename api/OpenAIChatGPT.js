// Dependencies
import { info as $info, error as $error } from "../.lib/API";
import { MongoClient as mongo, ServerApiVersion as mongov } from "mongodb";
import { Configuration as openconfig, OpenAIApi as openapi } from "openai";

// Data
// required envs: OPENAI_ORGANIZATION, OPENAI_API_KEY, MONGODB_URI
const conf = new openconfig({
    apiKey: process.env.OPENAI_API_KEY,
    organization: process.env.OPENAI_ORGANIZATION,
});
const openai = new openapi(conf);
const mongouri = process.env.MONGODB_URI;
const symbols = ["。", "。", "。", "？", "？", "！", "，", "……"];
const head = "你是谁？我是 Aurora，一个由 OpenAI 训练的大型语言模型。";
const reset = "哎呀！Aurora摔了一跤，失忆了...";

export default async (req, res) => {
    // Input arguments
    const {
        user = "__user__",
        ask = head,
        type = "json",
    } = req.query;
    const prompt = decodeURIComponent(ask);

    // Main process
    res.setHeader("Content-Type", "application/json");
    // if reset operation
    if (
        prompt.trim().startsWith("清空语料") ||
        prompt.trim().startsWith("清除语料") ||
        prompt.trim().startsWith("重置语料") ||
        prompt.trim().startsWith("清空会话") ||
        prompt.trim().startsWith("清除会话") ||
        prompt.trim().startsWith("重置会话") ||
        prompt.trim().startsWith("呜啦啦~欧若拉失忆")
    ) {
        deleteDialogue(user);
        if (type == "text") return res.send(reset);
        else return res.send($info(reset));
    }
    // normal request
    mongo.connect(mongouri, {
        useNewUrlParser: true,
        useUnifiedTopology: true,
        serverApi: mongov.v1,
    }, async (err, client) => {
        if (err) {
            res.send($error(err, "Please check the database uri!"));
        } else {
            const collection = client.db("peckotapi").collection("openaichatgpt");
            const docs = await collection.findOne({ id: user });
            const dialogue = (null != docs ? docs.dia.concat(prompt) : prompt)
                .concat(symbols[Math.floor(Math.random() * symbols.length)]);
            const response = await openai.createCompletion({
                model: "text-davinci-003",
                prompt: dialogue,
                max_tokens: 300,
                temperature: 0.9,
                frequency_penalty: 0,
                presence_penalty: 0.6,
            });
            // remove head enter
            let result = response.data.choices[0].text.startsWith("\n\n") ?
                response.data.choices[0].text.substring(2) :
                response.data.choices[0].text.startsWith("\n") ?
                    response.data.choices[0].text.substring(1) :
                    response.data.choices[0].text;
            saveDialogue(user, prompt.concat(result));
            if (type == "text") res.send(result == "" ? head : result);
            else res.send($info(result == "" ? head : result));
        }
        client.close();
    });
    return;
}

// Save dialogue
const saveDialogue = (userId, newDia) => {
    mongo.connect(mongouri, {
        useNewUrlParser: true,
        useUnifiedTopology: true,
        serverApi: mongov.v1,
    }, async (err, client) => {
        if (err) {
            res.send($error(err, "Please check the database uri!"));
            return;
        } else {
            const collection = client.db("peckotapi").collection("openaichatgpt");
            const docs = await collection.findOne({ id: userId });
            if (null != docs) {
                const dialogue = docs.dia.length >= 512 ? docs.dia.substring(docs.dia.length - 512) : docs.dia;
                await collection.updateOne({ id: userId }, { $set: { dia: dialogue.concat(newDia.replace(/\n/g, "")) } });
            } else {
                await collection.insertOne({ id: userId, dia: head.concat(newDia.replace(/\n/g, "")) });
            }
        }
        client.close();
    });
};

// Delete dialogue
const deleteDialogue = userId => {
    mongo.connect(mongouri, {
        useNewUrlParser: true,
        useUnifiedTopology: true,
        serverApi: mongov.v1,
    }, async (err, client) => {
        if (err) {
            res.send($error(err, "Please check the database uri!"));
            return;
        } else {
            const collection = client.db("peckotapi").collection("openaichatgpt");
            const docs = await collection.findOne({ id: userId });
            if (null != docs) await collection.deleteOne({ id: userId });
        }
        client.close();
    });
};