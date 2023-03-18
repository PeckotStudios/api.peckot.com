/**
 * Minecraft Server Status Checker
 * Description: This API provides functionality for checking the status of a Minecraft server, allowing for various query protocols and response formats.
 * Dependencies: This module relies on external dependencies MinecraftServerListPing and MinecraftQuery; make sure to install them via package.json.
 * Request: <Type> (Required) [Optional = {DefaultValue}]
 *   <string>  [host = null]        - the host name or IP address of the Minecraft server
 *   <integer> [port = 25565]       - the port number of the Minecraft server
 *   <string>  [method = "ping"]    - the method to use for querying the server; available options are "ping16", "ping15", "ping13", "query" (requires MinecraftQuery), or "ping"
 *   <integer> [protocol = 4]       - the Minecraft protocol version number to use for connecting to the server
 * Response: <Type> [Key] {Condition}
 *   <integer> [code]    {None}     - HTTP status code
 *   <string>  [message] {None}     - message regarding response status
 *   <string>  [advice]  {Fail}     - debug advice in case of error
 *   <object>  [data]    {Success}  - response data, containing information about the specified Minecraft server
 * @author Pectics
 * @param {*} req - Express request object
 * @param {*} res - Express response object
 */

// Dependencies
import { info as $info, error as $error } from "../.lib/API";
import { MinecraftServerListPing, MinecraftQuery } from "minecraft-status";

export default (req, res) => {
    // Input arguments
    const {
        host = null,
        port = 25565,
        method = "ping",
        protocol = 4,
    } = req.query;

    // Arguments process
    if (null == host) {
        res.send($error({ message: "ArgumentError: Empty host support!" }, "Confirm whether your parameters are incorrect"));
        return;
    }
    var _host = host.toLowerCase();
    var _port = port >= 1 && port <= 65535 ? port : 25565;
    var _method = method.toLowerCase() == "query" ? "query" : "ping";
    var _protocol = protocol >= 0 && protocol <= 114514 ? protocol : 4;

    // Main process
    res.setHeader("Content-Type", "application/json");
    switch (_method) {
        case "ping16":
            MinecraftServerListPing.ping16(_protocol, _host, _port, 3000)
                .then(response => res.send($info(response)))
                .catch(error => res.send($error(error, "Confirm whether your parameters are incorrect or your server is offline.")));
            break;
        case "ping15":
            MinecraftServerListPing.ping15(_host, _port, 3000)
                .then(response => res.send($info(response)))
                .catch(error => res.send($error(error, "Confirm whether your parameters are incorrect or your server is offline.")));
            break;
        case "ping13":
            MinecraftServerListPing.ping13(_host, _port, 3000)
                .then(response => res.send($info(response)))
                .catch(error => res.send($error(error, "Confirm whether your parameters are incorrect or your server is offline.")));
            break;
        case "query":
            MinecraftQuery.fullQuery(host, port, 3000)
                .then(response => res.send($info(response)))
                .catch(error => res.send($error(error, "Confirm whether your parameters are incorrect or your server is offline.")));
        default:
            MinecraftServerListPing.ping(_protocol, _host, _port, 3000)
                .then(response => res.send($info(response)))
                .catch(error => res.send($error(error, "Confirm whether your parameters are incorrect or your server is offline.")));
            break;
    }

}