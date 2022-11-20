module.exports = (req, res) => {
    // Dependencies
    const api = require('../.lib/API')(res);
    const { MinecraftServerListPing } = require("minecraft-status");
    const async = require('async');
    const axios = require('axios');
    const fs = require('fs');

    // Preprocess
    var updatetime, config;
    try {
        updatetime = JSON.parse(fs.readFileSync(`${__dirname}/updatetime.json`, 'utf-8'));
        config = JSON.parse(fs.readFileSync(`${__dirname}/../public/PCL2HomePage/config.json`, 'utf-8'));
    } catch (error) {
        api.error(400, `File request failed! ${error}`, 'Confirm whether the preprocess file is available.');
        return;
    }

    // Request limit
    var time = new Date().getTime();
    if (time - updatetime.PCL2HomePage <= config.interval ) {
        res.status(200).setHeader('Content-Type', 'application/json')
                .redirect('/PCL2HomePage/peckot.xaml');
        return;
    }

    // Get source file
    var source = new String();
    try {
        source += fs.readFileSync(`${__dirname}/../public/PCL2HomePage/source.xaml`, 'utf-8');
    } catch (error) {
        api.error(400, `Source file request failed! ${error}`, 'Confirm whether the source file is available.');
        return;
    }

    // Placeholders replacement
    source = source.replace(/\$\(broadcast\)/, '当前没有公告');
    async.series([
        function(callback) {
            MinecraftServerListPing.ping(4, config.server.host, config.server.port, 10000)
                .then(response => {
                    callback(null, {
                        status:     '在线',
                        online:     response.players.online,
                        max:        response.players.max,
                        playerlist: (() => {
                            var playerlist = [];
                            response.players.sample.forEach(player => {
                                playerlist.push(`${player.name}`);
                            });
                            return playerlist.join('，');
                        })
                    });
                })
                .catch(ignore => {
                    callback(null, {
                        status:     '离线',
                        online:     'Null',
                        max:        'Null',
                        playerlist: '无数据'
                    });
                });
        },
        function(callback) {
            axios.get('https://v1.hitokoto.cn')
                .then(({ data }) => callback(null, data.hitokoto))
                .catch(ignore => callback(null, 'Error: 一言语录获取失败'));
        },
        function(callback) {
            axios.get('https://v1.hitokoto.cn')
                .then(({ data }) => callback(null, data.hitokoto))
                .catch(ignore => callback(null, 'Error: 一言语录获取失败'));
        },
        function(callback) {
            axios.get('https://v1.hitokoto.cn')
                .then(({ data }) => callback(null, data.hitokoto))
                .catch(ignore => callback(null, 'Error: 一言语录获取失败'));
        }
    ],
        function(ignore, result) {
            source = source.replace(/\$\(status\)/, result[0].status);
            source = source.replace(/\$\(online\)/, result[0].online);
            source = source.replace(/\$\(max\)/, result[0].max);
            source = source.replace(/\$\(playerlist\)/, result[0].playerlist);
            source = source.replace(/\$\(hitokoto1\)/, result[1]);
            source = source.replace(/\$\(hitokoto2\)/, result[2]);
            source = source.replace(/\$\(hitokoto3\)/, result[3]);
            res.status(200).setHeader('Content-Type', 'application/json').send(source);
        }
    );

}