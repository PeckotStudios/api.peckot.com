module.exports = (req, res) => {
    // Dependencies
    const api = require('../.lib/API')(res);
    const mslp = require("minecraft-status").MinecraftServerListPing;
    const async = require('async');
    const axios = require('axios');
    const cookie = require('cookie');
    const fs = require('fs');;

    // Data
    const cookies = cookie.parse(req.headers.cookie || '');
    const time = new Date(new Date().getTime() + 28800000);
    const
        host = 't9a.52mc.pro',
        port = 3040,
        interval = 20000; //ms
    let data = {}, source = new String();

    // Preprocess
    try {
        source += fs.readFileSync(`${__dirname}/../public/PCL2HomePage/source.xaml`, 'utf-8');
    } catch (error) {
        api.error(400, `File request failed! ${error}`, 'Confirm whether the source file is available.');
        return;
    }

    // Functions
    function hitokoto(callback) {
        axios.get('https://v1.hitokoto.cn')
            .then(({ data }) => callback(null, data.hitokoto))
            .catch(ignore => callback(null, 'Error: 一言语录获取失败'));
    }

    // Placeholders replacement
    source = source.replace(/\$\(broadcast\)/, '当前没有公告');

    // Request limit
    if (cookies.data != undefined) data = JSON.parse(cookies.data);
    // if (time.getTime() - data.ti <= parseInt(interval)) {
    //     let ti = new Date(data.ti);
    //     if (data.st == '在线') {
    //         let online = parseInt(data.ol.split('/')[0]);
    //         if (online <= 0) {
    //             source = source.replace(/\$\(textlist\)/, '无玩家');
    //         } else if (online >= 2) {
    //             source = source
    //                 .replace(/\$\(textlist\)/, '')
    //                 .replace(/\<\!\-\-\$\(showlist\)|\$\(showlist\)\-\-\>/g, '')
    //                 .replace(/\$\(playerlist\)/, data.pl);
    //         } else {
    //             source = source.replace(/\$\(textlist\)/, data.pl);
    //         }
    //     } else {
    //         source = source.replace(/\$\(textlist\)/, '无数据');
    //     }
    //     source = source
    //         .replace(/\$\(status\)/, data.st)
    //     	.replace(/\$\(online\)/, data.ol)
    //     	.replace(/\$\(hitokoto1\)/, data.h1)
    //     	.replace(/\$\(hitokoto2\)/, data.h2)
    //     	.replace(/\$\(hitokoto3\)/, data.h3)
    //     	.replace(/\$\(time\)/,`${ti.getMonth()+1}/${ti.getDate()} ${ti.getHours()}:${ti.getMinutes()}:${ti.getSeconds()}`);
    //     res.status(200).setHeader('Content-Type', 'application/json').send(source);
    // } else {
        async.series([
            function(callback) {
                mslp.ping(4, host, port, 10000)
                    .then(response => {
                        result = {
                            status: '在线',
                            online: `${response.players.online}/${response.players.max}`,
                            playerlist: (() => {
                                let playerlist = [];
                                response.players.sample.forEach(player => {
                                    playerlist.push(`${player.name}`);
                                });
                                return playerlist.join(', ');
                            })()
                        };
                        callback(null, result);
                    })
                    .catch(ignore => {
                        callback(null, {
                            status: '离线',
                            online: '无数据'
                        });
                    });
            }, hitokoto, hitokoto, hitokoto
        ],
            function(ignore, result) {
                if (result[0].status == '在线') {
                    let online = parseInt(result[0].online.split('/')[0]);
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
                source = source
                    .replace(/\$\(status\)/, result[0].status)
                	.replace(/\$\(online\)/, result[0].online)
                	.replace(/\$\(hitokoto1\)/, result[1])
                	.replace(/\$\(hitokoto2\)/, result[2])
                	.replace(/\$\(hitokoto3\)/, result[3])
                	.replace(/\$\(time\)/,`${time.toLocaleDateString()} ${time.toLocaleTimeString()}`);
                // res.setHeader('Set-Cookie', cookie.serialize('data', JSON.stringify({
                //     ti: time.getTime(),
                //     st: result[0].status,
                //     ol: result[0].online,
                //     pl: result[0].playerlist,
                //     h1: result[1],
                //     h2: result[2],
                //     h3: result[3]
                // }), {httpOnly: true}));
                res.status(200).setHeader('Content-Type', 'application/json').send(source);
            }
        );
    // }
    

}