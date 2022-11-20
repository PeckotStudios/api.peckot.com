module.exports = (req, res) => {
    // Dependencies
    const api = require('../.lib/API')(res);
    const { MinecraftServerListPing } = require("minecraft-status");
    const async = require('async');
    const axios = require('axios');
    const fs = require('fs');

    // Data
    const time = new Date().getTime();
    let cookie = {};
    var config, source = new String();

    // Cookies
    (req.headers.cookie || '').split(';').forEach(item => {
        if (!item) {
            return;
        }
        const arr = item.split('=');
        const key = arr[0].trim();
        const val = arr[1].trim();
        cookie[key] = val;
    })

    // Preprocess
    try {
        config = JSON.parse(fs.readFileSync(`${__dirname}/../public/PCL2HomePage/config.json`, 'utf-8'));
    } catch (error) {
        api.error(400, `File request failed! ${error}`, 'Confirm whether the preprocess file is available.');
        return;
    }

    // Get source file
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
            // Request limit
            if (time - cookie.ti <= config.interval ) {
                callback(null, {
                    status: cookie.st,
                    online: cookie.ol,
                    playerlist: cookie.pl
                });
            } else {
                MinecraftServerListPing.ping(4, config.server.host, config.server.port, 10000)
                    .then(response => {
                        callback(null, {
                            status:     '在线',
                            online:     `${response.players.online}/${response.players.max}`,
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
                            online:     '无数据',
                        });
                    });
            }
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
        },
        function(){}
    ],
        function(ignore, result) {
            if (result[0].status == '在线') {
                var online = parseInt(result[0].online.split('/')[0]);
                if (online <= 0) {
                    source = source.replace(/\$\(textlist\)/, '无玩家');
                } else if (online >= 2) {
                    source = source.replace(/\$\(textlist\)/, '');
                    source = source.replace(/\<\!\-\-\$\(showlist\)|\$\(showlist\)\-\-\>/g, '');
                    source = source.replace(/\$\(playerlist\)/, result[0].playerlist);
                } else {
                    source = source.replace(/\$\(textlist\)/, result[0].playerlist);
                }
            } else {
                source = source.replace(/\$\(textlist\)/, '无数据');
            }
            source = source.replace(/\$\(status\)/, result[0].status);
            source = source.replace(/\$\(online\)/, result[0].online);
            source = source.replace(/\$\(hitokoto1\)/, result[1]);
            source = source.replace(/\$\(hitokoto2\)/, result[2]);
            source = source.replace(/\$\(hitokoto3\)/, result[3]);
            source = source.replace(/\$\(time\)/, time);
            res.setHeader('Set-Cookie', `ut=${time}; st=${result[0].status}; ol=${result[0].online}; pl=${result[0].playerlist}; httpOnly;`)
            res.status(200).setHeader('Content-Type', 'application/json;').send(source);
        }
    );

}