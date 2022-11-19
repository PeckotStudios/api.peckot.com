module.exports = (req, res) => {
    // Dependencies
    const api = require('../.lib/API')(res);
    const { MinecraftServerListPing } = require("minecraft-status");
    const axios = require('axios');
    const fs = require('fs');

    // Preprocess
    const updatetime = (() => {
        try {
            return JSON.parse(fs.readFileSync(__dirname + '/updatetime.json', 'utf-8'));
        } catch (error) {
            api.error(400, `File request failed! ${error}`, 'Confirm whether the updatetime file is available.');
            return null;
        }
    });
    const config = (() => {
        try {
            return JSON.parse(fs.readFileSync(`${__dirname}/../PCL2HomePage/config.json`, 'utf-8'));
        } catch (error) {
            api.error(400, `File request failed! ${error}`, 'Confirm whether the config file is available.');
            return null;
        }
    });

    // Request limit
    var time = new Date().getTime();
    if (time - updatetime['PCL2HomePage'] <= config['interval'] ) {
        res.status(200).setHeader('Content-Type', 'application/json')
                .redirect('/PCL2HomePage/peckot.xaml');
        return;
    }

    // Get source file
    var source = new String(() => {
        try {
            return fs.readFileSync(`${__dirname}/../PCL2HomePage/source.xaml`, 'utf-8');
        } catch (error) {
            api.error(400, `Source file request failed! ${error}`, 'Confirm whether the source file is available.');
            return '';
        }
    });

    // Placeholders replacement
    for (let i = 1; i < 4; i++) {
        axios.get('https://v1.hitokoto.cn/?encode=text').then(response => {
            source = source.replace(`(hitokoto${i})`, response);
        });    
    }
    axios.get(`https://api.peckot.com/api/MinecraftServerStatus/?host=${config.host}&port=${config.port}`).then(response => {
        source = source.replace('(status)', serverdata.code == 200 ? '在线' : '离线' );
        source = source.replace('(online)', serverdata.players.online);
        source = source.replace('(max)', serverdata.players.max);
        source = source.replace('(playerlist)', (() => {
            var playerlist = '';
            serverdata.players.sample.forEach(player => {
                playerlist += `${player.name}，`;
            });
            return playerlist;
        }));
    });
    source = source.replace('(broadcast)', '当前没有公告');

    try {
        const data = fs.writeFileSync(`${__dirname}/../PCL2HomePage/peckot.xaml`, source);
    } catch (error) {
        api.error(400, `File request failed! ${error}`, 'Confirm whether the destination file is available.');
        return;
    }

    res.status(200).setHeader('Content-Type', 'application/json')
        .redirect('/PCL2HomePage/peckot.xaml');

}