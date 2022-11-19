module.exports = (req, res) => {
    // Dependencies
    const api = require('../.lib/API')(res);
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

    async function get(a, b, c) {
        await axios.get(a).then(b).catch(c);
    }

    // Placeholders replacement
    for (let i = 1; i < 4; i++) {
        get('https://v1.hitokoto.cn', 
        response => {
            source = source.replace('(hitokoto' + i + ')', response.hitokoto);
        },
        error => {
            api.error(400, `Data request failed! ${error}`, 'Confirm whether your parameters are correct.');
            return;
        });
        // axios.get('https://v1.hitokoto.cn').then(response => {
        //     source = source.replace('(hitokoto' + i + ')', response.hitokoto);
        // }).catch(error => {
        //     api.error(400, `Data request failed! ${error}`, 'Confirm whether your parameters are correct.');
        //     return;
        // });    
    }
    axios.get(`https://api.peckot.com/api/MinecraftServerStatus/?host=${config.server.host}&port=${config.server.port}`).then(response => {
        source = source.replace('(status)', response.code == 200 ? '在线' : '离线' );
        source = source.replace('(online)', response.data.players.online);
        source = source.replace('(max)', response.data.players.max);
        source = source.replace('(playerlist)', (() => {
            var playerlist = '';
            response.data.players.sample.forEach(player => {
                playerlist += `${player.name}，`;
            });
            return playerlist;
        }));
    }).catch(error => {
        api.error(400, `Data request failed! ${error}`, 'Confirm whether your parameters are correct.');
        return;
    });
    source = source.replace('(broadcast)', '当前没有公告');

    res.status(200).send(source);

}