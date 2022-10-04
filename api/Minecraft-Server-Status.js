module.exports = (req, res) => {
    // Dependencies
    const api = require('../.lib/API')(res);
    const { MinecraftServerListPing, MinecraftQuery } = require("minecraft-status");

    // Input arguments
    const {
        host = null,
        port = 25565,
        method = 'ping',
        protocol = 4,
    } = req.query;

    // Arguments process
    if (null == host) {
        api.error(400, 'Data request failed! ArgumentError: Empty host support!', 'Please complete the host argument.');
        return;
    }
    var _host = host.toLowerCase();
    var _port = port >= 1 && port <= 65535 ? port : 25565;
    var _method = method.toLowerCase() == 'query' ? 'query' : 'ping';
    var _protocol = protocol >= 0 && protocol <= 114514 ? protocol : 4;

    // Main process
    switch (_method) {
        case 'ping16':
            MinecraftServerListPing.ping16(_protocol, _host, _port, 3000)
                .then(response => {
                    api.info(200, 'Data request succeeded!', response);
                })
                .catch(error => {
                    api.error(400, `Data request failed! ${error}`, 'Confirm whether your parameters are correct or your server is online.');
                });
            break;
        case 'ping15':
            MinecraftServerListPing.ping15(_host, _port, 3000)
                .then(response => {
                    api.info(200, 'Data request succeeded!', response);
                })
                .catch(error => {
                    api.error(400, `Data request failed! ${error}`, 'Confirm whether your parameters are correct or your server is online.');
                });
            break;
        case 'ping13':
            MinecraftServerListPing.ping13(_host, _port, 3000)
                .then(response => {
                    api.info(200, 'Data request succeeded!', response);
                })
                .catch(error => {
                    api.error(400, `Data request failed! ${error}`, 'Confirm whether your parameters are correct or your server is online.');
                });
            break;
        case 'query':
            MinecraftQuery.fullQuery(host, port, timeout)
                .then(response => {
                    api.info(200, 'Data request succeeded!', response);
                })
                .catch(error => {
                    api.error(400, `Data request failed! ${error}`, 'Confirm whether your parameters are correct or your server is online.');
                });
        default:
            MinecraftServerListPing.ping(_protocol, _host, _port, 3000)
                .then(response => {
                    api.info(200, 'Data request succeeded!', response);
                })
                .catch(error => {
                    api.error(400, `Data request failed! ${error}`, 'Confirm whether your parameters are correct or your server is online.');
                });
            break;
    }



}