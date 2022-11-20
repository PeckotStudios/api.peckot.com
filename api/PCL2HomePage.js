module.exports = (req, res) => {
    // Dependencies
    const api = require('../.lib/API')(res);
    const { MinecraftServerListPing } = require("minecraft-status");
    const async = require('async');
    const axios = require('axios');
    const cookie = require('cookie');
    const fs = require('fs');

    // Inputs
    const {
        debug = false
    } = req.query;

    // Data
    if (debug) console.log('[Data]获取数据...');
    const cookies = cookie.parse(req.headers.cookie || '');
    var config, source = new String(), time = new Date();
    if (debug) console.log('[Data]成功获取数据!');

    // Preprocess
    if (debug) console.log('[Prepress]预处理文件中...');
    try {
        config = JSON.parse(fs.readFileSync(`${__dirname}/../public/PCL2HomePage/config.json`, 'utf-8'));
        source += fs.readFileSync(`${__dirname}/../public/PCL2HomePage/source.xaml`, 'utf-8');
    } catch (error) {
        api.error(400, `File request failed! ${error}`, 'Confirm whether the preprocess file is available.');
        return;
    }
    if (debug) console.log('[Prepress]预处理完毕!');

    // Placeholders replacement
    if (debug) console.log('[Replace]源文件替换中...');
    source = source.replace(/\$\(broadcast\)/, '当前没有公告');
    async.series([
        function(callback) {
            // Request limit
            if (debug) console.log('[Limit]查询是否受限...');
            if (cookies.data == undefined || time.getTime() - JSON.parse(cookies.data).ti >= parseInt(config.interval)) {
                if (debug) console.log('[Limit]未受限,开始查询服务器信息...');
                MinecraftServerListPing.ping(4, config.server.host, config.server.port, 10000)
                    .then(response => {
                        result = {
                            update: true,
                            time: time.getTime(),
                            status: '在线',
                            online: `${response.players.online}/${response.players.max}`,
                            playerlist: (() => {
                                let playerlist = [];
                                response.players.sample.forEach(player => {
                                    playerlist.push(`${player.name}`);
                                });
                                return playerlist.join('，');
                            })()
                        };
                        if (debug) console.log('[Ping]查询成功!获取到以下内容:');
                        if (debug) console.log(JSON.stringify(result));
                        if (debug) console.log('[Callback]正在进行第一次数据回调...');
                        callback(null, result);
                    })
                    .catch(ignore => {
                        if (debug) console.log('[Ping]查询失败!服务器可能离线!');
                        if (debug) console.log('[Callback]正在进行第一次数据回调...');
                        callback(null, {
                            update: true,
                            time: time.getTime(),
                            status: '离线',
                            online: '无数据'
                        });
                    });
            } else {
                let data = JSON.parse(cookies.data);
                if (debug) console.log('[Limit]已受限,进行Cookie读取...');
                if (debug) console.log('[Limit]读取到Cookie内容:');
                if (debug) console.log(data);
                if (debug) console.log('[Callback]正在进行第一次Cookie回调...');
                callback(null, {
                    update: false,
                    time: data.ti,
                    status: data.st,
                    online: data.ol,
                    playerlist: data.pl
                });
            }
            if (debug) console.log('[Callback]回调成功!');
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
            if (debug) console.log('[Process]成功获取回调数据,开始替换占位符...');
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
            time = new Date(result[0].time);
            source = source.replace(/\$\(status\)/, result[0].status);
            source = source.replace(/\$\(online\)/, result[0].online);
            source = source.replace(/\$\(hitokoto1\)/, result[1]);
            source = source.replace(/\$\(hitokoto2\)/, result[2]);
            source = source.replace(/\$\(hitokoto3\)/, result[3]);
            source = source.replace(/\$\(time\)/,
                `${time.getMonth()+1}/${time.getDate()} ${time.getHours()}:${time.getMinutes()}:${time.getSeconds()}`
            );
            if (debug) console.log('[Process]占位符替换完毕!');
            if (result[0].update == true) {
                if (debug) console.log('[Cookie]检测到Cookie更新,开始设定Cookie内容...');
                res.setHeader('Set-Cookie', cookie.serialize('data', JSON.stringify({
                    ti: result[0].time,
                    st: result[0].status,
                    ol: result[0].online,
                    pl: result[0].playerlist
                }), {httpOnly: false}));
                if (debug) console.log('[Cookie]更新Cookie设定完毕!');
            }
            if (debug) console.log('[Process]开始输出内容...');
            res.status(200).setHeader('Content-Type', 'application/json').send(source);
            if (debug) console.log('[Process]输出完毕,程序结束!\n');
        }
    );

}