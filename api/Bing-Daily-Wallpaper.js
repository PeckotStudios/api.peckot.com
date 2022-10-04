module.exports = (req, res) => {
    // Dependencies
    const axios = require('axios');

    // Input arguments
    const {
        area = 'cn',        // 壁纸地域 iso2
        type = 'json',      // 返回格式 json image
        node = 'default',   // 获取节点 default interl
        size = '1920x1080', // 图片大小 1920x1080,1920x1200,1366x768,1280x768,1024x768,800x600,800x480,768x1280,720x1280
        dateback = 0,       // 壁纸日期 0(今天), n(n天前)
        num = 1             // 获取数量 1-8
    } = req.query;

    // Arguments process
    const _url = node.toLowerCase() == 'interl' ? 'https://www.bing.com' : 'https://cn.bing.com';
    var _area = area.toLowerCase() == 'cn' ? 'cn' : Array.contains(new Array('ad', 'ae', 'af', 'ag', 'ai', 'al', 'am', 'an', 'ao', 'aq', 'ar', 'as', 'at', 'au', 'aw', 'ax', 'az', 'ba', 'bb', 'bd', 'be', 'bf', 'bg', 'bh', 'bi', 'bj', 'bl', 'bm', 'bn', 'bo', 'bq', 'br', 'bs', 'bt', 'bv', 'bw', 'by', 'bz', 'ca', 'cc', 'cd', 'cf', 'cg', 'ch', 'ci', 'ck', 'cl', 'cm', 'co', 'cr', 'cs', 'cu', 'cv', 'cw', 'cx', 'cy', 'cz', 'de', 'dj', 'dk', 'dm', 'do', 'dz', 'ec', 'ee', 'eg', 'eh', 'er', 'es', 'et', 'fi', 'fj', 'fk', 'fm', 'fo', 'fr', 'ga', 'gb', 'gd', 'ge', 'gf', 'gg', 'gh', 'gi', 'gl', 'gm', 'gn', 'gp', 'gq', 'gr', 'gs', 'gt', 'gu', 'gw', 'gy', 'hk', 'hm', 'hn', 'hr', 'ht', 'hu', 'id', 'ie', 'il', 'im', 'in', 'io', 'iq', 'ir', 'is', 'it', 'je', 'jm', 'jo', 'jp', 'ke', 'kg', 'kh', 'ki', 'km', 'kn', 'kp', 'kr', 'kw', 'ky', 'kz', 'la', 'lb', 'lc', 'li', 'lk', 'lr', 'ls', 'lt', 'lu', 'lv', 'ly', 'ma', 'mc', 'md', 'me', 'mf', 'mg', 'mh', 'mk', 'ml', 'mm', 'mn', 'mo', 'mp', 'mq', 'mr', 'ms', 'mt', 'mu', 'mv', 'mw', 'mx', 'my', 'mz', 'na', 'nc', 'ne', 'nf', 'ng', 'ni', 'nl', 'no', 'np', 'nr', 'nu', 'nz', 'om', 'pa', 'pe', 'pf', 'pg', 'ph', 'pk', 'pl', 'pm', 'pn', 'pr', 'ps', 'pt', 'pw', 'py', 'qa', 're', 'ro', 'rs', 'ru', 'rw', 'sa', 'sb', 'sc', 'sd', 'se', 'sg', 'sh', 'si', 'sj', 'sk', 'sl', 'sm', 'sn', 'so', 'sr', 'ss', 'st', 'sv', 'sx', 'sy', 'sz', 'tc', 'td', 'tf', 'tg', 'th', 'tj', 'tk', 'tl', 'tm', 'tn', 'to', 'tr', 'tt', 'tv', 'tw', 'tz', 'ua', 'ug', 'um', 'us', 'uy', 'uz', 'va', 'vc', 've', 'vg', 'vi', 'vn', 'vu', 'wf', 'ws', 'xk', 'ye', 'yt', 'za', 'zm', 'zw'), area.toLowerCase()) ? area.toLowerCase() : 'cn';
    var _type = type.toLowerCase() == 'image' ? 'image' : 'json';
    var _size = size.toLowerCase() == '1920x1080' ? '1920x1080' : Array.contains(new Array('1920x1200', '1366x768', '1280x768', '1024x768', '800x600', '800x480', '768x1280', '720x1280'), size.toLowerCase()) ? new String(size.toLowerCase()) : '1920x1080';
    var _dateback = dateback <= 0 ? 0 : dateback;
    var _num = num <= 1 ? 1 : num >= 8 ? 8 : num;

    // Main process
    axios.get(_url + '/HPImageArchive.aspx?cc=' + _area + '&format=js&idx=' + _dateback + '&n=' + _num).then(response => {
        res.send(response.data);
        return;
        const data = JSON.parse('' + response.data);
        if (_type == 'image') {
            res.setHeader('Content-Type', 'image/png')
                .redirect(200, _url + new String(data.images[0].url).replace('1920x1080', _size));
            return;
        } else {
            var _data = new Array();
            for (const image in data.images) {
                _data.push({
                    date: image.enddate,
                    url: _url + new String(image.url).replace('1920x1080', _size),
                    copyright: image.copyright,
                    copyrightlink: image.copyrightlink,
                    hashcode: image.hsh,
                });
            }
            res.status(200).setHeader('Content-Type', 'application/json')
                .send(JSON.stringify({
                    code: 200,
                    message: 'Data request succeeded!',
                    data: _data,
                }, null, 4));
            return;
        }
    }).catch(error => {
        res.status(400).setHeader('Content-Type', 'application/json')
            .send(JSON.stringify({
                code: 400,
                message: 'Data request failed! ' + error,
                advice: 'Confirm whether your parameters are correct.',
            }, null, 4));
    });
}