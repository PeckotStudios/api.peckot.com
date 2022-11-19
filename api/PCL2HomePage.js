module.exports = (req, res) => {
    // Dependencies
    const api = require('../.lib/API')(res);
    const fs = require('fs');
    const { MinecraftServerListPing } = require("minecraft-status");

    // No inputs

    // Const arguments
    const {
        host = 'mc.hypixel.net',
        port = 25565,
        protocol = 4,
    } = req.query;

    // Main process
    var source;

    // Request limit
    let isLimited = (() => {
        var lastRequest = 0;
        var intervel = 60000;
        return function() {
            var now = new Date().getTime();
            if (now - lastRequest >= intervel) {
                lastRequest = now;
                return false;
            } else {
                return true;
            }
        };
    })();
    if (isLimited()) {
        res.status(200).setHeader('Content-Type', 'application/json')
                .redirect('/PCL2HomePage/Custom.xaml');
    } 

    // Read source file
    try {
        source = fs.readFileSync('../PCL2HomePage/source.xaml', 'utf8');
    } catch (error) {
        api.error(400, `Source file request failed! ${error}`, 'Confirm whether the source file is available.');
        return;
    }

    var players;

    MinecraftServerListPing.ping(protocol, host, port, 3000)
    .then(response => {
        players = response['players']['sample'];
        
    })
    .catch(error => {
        api.error(400, `Data request failed! ${error}`, 'Confirm whether the server is online.');
    });


}