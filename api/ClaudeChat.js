import { $authorize, $json_error, $json_info } from "../.lib/API"
import { WebClient } from "@slack/web-api"

export default async (req, res) => {
    // 授权检查
    console.debug("Checking authorization...")
    if (!(await $authorize("ClaudeChat", req.headers.authorization))) {
        $json_error(res, 401, "Access unauthorized!", "Please complete the authorization header.")
        return
    }
    console.log("Authorization succeeded!")

    // 输入参数
    let query = req.query
    if (req.method == "POST") query = req.body ? req.body : {}
    console.debug("Getting operation and parameters...")
    const operation = query.operation ? query.operation : "chat"
    const slackAuth = req.headers["slack-authorization"]
    const channelId = query.channel_id
    const botId = query.bot_id

    // 判断参数
    console.debug("Checking parameters...")
    if (!slackAuth) {
        $json_error(res, 401, "Proxy access unauthorized!", "Please complete the slack-authorization header.")
        return
    }
    if (!channelId) {
        $json_error(res, 400, "Invalid argument `channel_id` given!")
        return
    }
    if (!botId) {
        $json_error(res, 400, "Invalid argument `bot_id` given!")
        return
    }
    console.log("All parameters checked!")

    // 主处理流程
    console.debug("Initializing WebClient...")
    const client = new WebClient(slackAuth)
    console.log("WebClient initialized!")
    switch (operation) {
        case "send":
            console.debug("Handling send operation...")
            var prompt, sendRetry = 0
            if (!(prompt = query.prompt)) {
                $json_error(res, 400, "Invalid argument `prompt` given!")
                return
            }
            while (true) {
                try {
                    // 发送消息 
                    console.debug("Sending prompt message...")
                    const response = await client.chat.postMessage({
                        channel: channelId,
                        text: prompt
                    })
                    // 返回结果  
                    console.log("Prompt sent successfully!")
                    if (response.ok) {
                        $json_info(res, 200, {
                            messages: [
                                {
                                    timestamp: parseFloat(response.ts),
                                    channel_id: channelId,
                                    sender_id: response.message.user,
                                    content: prompt,
                                    length: prompt.length
                                }
                            ]
                        }, "Prompt sent successfully!")
                    } else throw "Invalid response!"
                } catch (error) {
                    console.error(error)
                    if (++sendRetry > 3) $json_error(res, 500, `Tried 3 times and failed to send message! ${error}`)
                }
            }
        case "receive":
            console.debug("Handling receive operation...")
            var timestamp, receiveRetry = 0
            if (!(timestamp = query.timestamp)) {
                $json_error(res, 400, "Invalid argument `timestamp` given!")
                return
            }
            while (true) {
                try {
                    // 接收消息  
                    console.debug("Receiving messages after timestamp...")
                    const messages = (await client.conversations.history({
                        channel: channelId,
                        oldest: timestamp
                    })).messages.filter((msg) => msg.user === botId)
                    // 无返回消息  
                    console.log("Messages received:", messages)
                    if (messages.length <= 0) {
                        $json_error(res, 504, "Claude is down without response.", "Please send your prompt again.")
                    }
                    // 返回输入中              
                    else if (messages[messages.length - 1].text.endsWith("Typing…_")) {
                        console.log("Claude is typing...")
                        $json_error(res, 504, "Claude is typing...", "Please wait for a while and try again later.")
                    }
                    // 返回结果                     
                    else {
                        $json_info(res, 200, {
                            messages: messages.map((msg) => {
                                return {
                                    timestamp: parseFloat(msg.ts),
                                    channel_id: channelId,
                                    sender_id: msg.user,
                                    content: msg.text,
                                    length: msg.text.length
                                }
                            })
                        })
                    }
                } catch (error) {
                    console.error(error)
                    if (++receiveRetry > 3) $json_error(res, 500, `Tried 3 times and failed to receive message! ${error}`)
                }
            }
        default:
            console.debug("Invalid operation given!")
            $json_error(res, 400, "Invalid argument `operation` given!")
            break
    }
}