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
            MinecraftQuery.fullQuery(host, port, timeout)
                .then(response => res.send($info(response)))
                .catch(error => res.send($error(error, "Confirm whether your parameters are incorrect or your server is offline.")));
        default:
            MinecraftServerListPing.ping(_protocol, _host, _port, 3000)
                .then(response => res.send($info(response)))
                .catch(error => res.send($error(error, "Confirm whether your parameters are incorrect or your server is offline.")));
            break;
    }

}