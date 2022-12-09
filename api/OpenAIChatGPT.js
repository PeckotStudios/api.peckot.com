// Dependencies
import { info as $info, error as $error } from "../.lib/API";
import { MongoClient } from "mongodb";
import { Configuration as openconfig, OpenAIApi as openapi } from "openai";

// Data
// required envs: OPENAI_ORGANIZATION, OPENAI_API_KEY, MONGODB_URI
const conf = new openconfig({
    apiKey: process.env.OPENAI_API_KEY,
    organization: process.env.OPENAI_ORGANIZATION,
});
const openai = new openapi(conf);
const mongocl = new MongoClient(process.env.MONGODB_URI).db("peckotapi").collection("openaichatgpt");
const symbols = ["。", "。", "。", "？", "？", "！", "，", "……"];
const head = "你是谁？我是 Aurora，一个由 OpenAI 训练的大型语言模型。";
const reset = "哎呀！Aurora摔了一跤，失忆了...";

export default async (req, res) => {
    // Input arguments
    res.setHeader("Content-Type", "application/json");
    const {
        user = "__user__",
        ask = head,
        type = "json",
    } = req.query;
    const prompt = decodeURIComponent(ask);

    // Main process
    try {
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
            await deleteDialogue(user);
            if (type == "text") return res.send(reset);
            else return res.send($info(reset));
        }
        // normal request
        const docs = await mongocl.findOne({ id: user });
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
        const result = response.data.choices[0].text.startsWith("\n\n") ?
            response.data.choices[0].text.substring(2) :
            response.data.choices[0].text.startsWith("\n") ?
                response.data.choices[0].text.substring(1) :
                response.data.choices[0].text;
        await saveDialogue(user, prompt.concat(result));
        if (type == "text") res.send(result);
        else res.send($info(result));
    } catch (error) {
        return res.send($error(error));
    }
}

// Save dialogue
const saveDialogue = async (userId, newDia) => {
    const docs = await mongocl.findOne({ id: userId });
    if (null != docs) {
        const dialogue = docs.dia.length >= 512 ? docs.dia.substring(docs.dia.length - 512) : docs.dia;
        await mongocl.updateOne(
            { id: userId },
            { $set: { dia: dialogue.concat(newDia.replace(/\\n/g, "")) } }
        );
    } else {
        await mongocl.insertOne({
            id: userId,
            dia: head.concat(newDia.replace(/\\n/g, ""))
        });
    }
};

// Delete dialogue
const deleteDialogue = async userId => {
    return await mongocl.findOneAndDelete({ id: userId });
};