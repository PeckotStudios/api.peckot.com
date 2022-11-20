module.exports = (req, res) => {
    // Dependencies
    const api = require('../.lib/API')(res);
    const { MinecraftServerListPing } = require("minecraft-status");
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
    // for (let i = 1; i < 4; i++) {
    //     axios.get('https://v1.hitokoto.cn').then(({ response }) => {
    //         source = source.replace(/\$\(hitokoto\)/, response.hitokoto);
    //     }).catch(error => {
    //         api.error(400, `Data request failed! ${error}`, 'Confirm whether your parameters are correct.');
    //         return;
    //     });    
    // }
    source = source.replace(/\$\(broadcast\)/, '当前没有公告');
    MinecraftServerListPing.ping(4, 't9a.52mc.pro', 3040, 3000)
        .then(response => {
            source = source.replace(/\$\(status\)/, '在线');
            source = source.replace(/\$\(online\)/, response.players.online);
            source = source.replace(/\$\(max\)/, response.players.max);
            source = source.replace(/\$\(playerlist\)/, (() => {
                var playerlist = '';
                response.players.sample.forEach(player => {
                    playerlist += `${player.name}，`;
                });
                return playerlist;
            }));
            res.status(200).setHeader('Content-Type', 'application/json').send(response);
        })
        .catch(error => {
            source = source.replace(/\$\(status\)/, '离线');
            source = source.replace(/\$\(online\)/, 'NaN');
            source = source.replace(/\$\(max\)/, 'NaN');
            source = source.replace(/\$\(playerlist\)/, '无数据');
            res.status(200).setHeader('Content-Type', 'application/json').send(source);
        });
    

}