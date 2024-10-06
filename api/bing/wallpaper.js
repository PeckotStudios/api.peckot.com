import { request as Hrequest } from "https";
import { stringify as Qstringify } from "querystring";

import $ from '../../.lib/$'

const iso2 = ['ad', 'ae', 'af', 'ag', 'ai', 'al', 'am', 'an', 'ao', 'aq', 'ar', 'as', 'at', 'au', 'aw', 'ax', 'az', 'ba', 'bb', 'bd', 'be', 'bf', 'bg', 'bh', 'bi', 'bj', 'bl', 'bm', 'bn', 'bo', 'bq', 'br', 'bs', 'bt', 'bv', 'bw', 'by', 'bz', 'ca', 'cc', 'cd', 'cf', 'cg', 'ch', 'ci', 'ck', 'cl', 'cm', 'co', 'cr', 'cs', 'cu', 'cv', 'cw', 'cx', 'cy', 'cz', 'de', 'dj', 'dk', 'dm', 'do', 'dz', 'ec', 'ee', 'eg', 'eh', 'er', 'es', 'et', 'fi', 'fj', 'fk', 'fm', 'fo', 'fr', 'ga', 'gb', 'gd', 'ge', 'gf', 'gg', 'gh', 'gi', 'gl', 'gm', 'gn', 'gp', 'gq', 'gr', 'gs', 'gt', 'gu', 'gw', 'gy', 'hk', 'hm', 'hn', 'hr', 'ht', 'hu', 'id', 'ie', 'il', 'im', 'in', 'io', 'iq', 'ir', 'is', 'it', 'je', 'jm', 'jo', 'jp', 'ke', 'kg', 'kh', 'ki', 'km', 'kn', 'kp', 'kr', 'kw', 'ky', 'kz', 'la', 'lb', 'lc', 'li', 'lk', 'lr', 'ls', 'lt', 'lu', 'lv', 'ly', 'ma', 'mc', 'md', 'me', 'mf', 'mg', 'mh', 'mk', 'ml', 'mm', 'mn', 'mo', 'mp', 'mq', 'mr', 'ms', 'mt', 'mu', 'mv', 'mw', 'mx', 'my', 'mz', 'na', 'nc', 'ne', 'nf', 'ng', 'ni', 'nl', 'no', 'np', 'nr', 'nu', 'nz', 'om', 'pa', 'pe', 'pf', 'pg', 'ph', 'pk', 'pl', 'pm', 'pn', 'pr', 'ps', 'pt', 'pw', 'py', 'qa', 're', 'ro', 'rs', 'ru', 'rw', 'sa', 'sb', 'sc', 'sd', 'se', 'sg', 'sh', 'si', 'sj', 'sk', 'sl', 'sm', 'sn', 'so', 'sr', 'ss', 'st', 'sv', 'sx', 'sy', 'sz', 'tc', 'td', 'tf', 'tg', 'th', 'tj', 'tk', 'tl', 'tm', 'tn', 'to', 'tr', 'tt', 'tv', 'tw', 'tz', 'ua', 'ug', 'um', 'us', 'uy', 'uz', 'va', 'vc', 've', 'vg', 'vi', 'vn', 'vu', 'wf', 'ws', 'xk', 'ye', 'yt', 'za', 'zm', 'zw'];
const sizes = ['1920x1200', '1366x768', '1280x768', '1024x768', '800x600', '800x480', '768x1280', '720x1280'];

const args = {
    cc: 'cn',
    format: 'js',
    idx: 0,
    n: 1,
}

const options = {
    hostname: null,
    path: '/HPImageArchive.aspx',
    method: 'GET',
    headers: {
        'Accept': 'text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.7',
        'Accept-Language': 'zh-CN,zh;q=0.9,en-US;q=0.8,en;q=0.7,en-GB;q=0.6',
        'User-Agent': 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36 Edg/129.0.0.0'
    }
}

export default async (req, res) => {
    $.init(req, res, 'GET', 'POST');

    // 输入参数
    const { area = 'cn', type = 'json', node = 'cn', size = '1920x1080', dateback = 0, number = 1 } = req.query;

    // 处理参数
    args.cc = iso2.includes(area.toLowerCase()) ? area.toLowerCase() : 'cn';
    args.idx = Math.max(0, dateback);
    args.n = Math.min(8, Math.max(1, number));
    options.hostname = node.toLowerCase() == 'www' ? 'www.bing.com' : 'cn.bing.com';
    options.path += '?' + Qstringify(args);

    console.log(options);
    

    // 获取壁纸
    const result = await new Promise((resolve) => {
        // 发送请求
        const request = Hrequest(options, r => {
            // 设置返回值字符集
            r.setEncoding('utf-8');
            // 请求到数据并保存
            let response = '';
            r.on('data', d => response += d);
            // 请求结束，设置返回值
            r.on('end', () => {
                resolve([true, JSON.parse(response)]);
            });
        });
        // 登录出错
        request.on('error', e => resolve([false, e]));
        request.end();
    });

    // 检查获取状态
    if (!result[0]) return $.error(e, 500); // 网络通信错误

    // 设置尺寸
    let _size = sizes.includes(size.toLowerCase()) ? size.toLowerCase() : '1920x1080';

    // 返回图片
    if (type.toLowerCase() == 'image') {
        res.setHeader('Content-Type', 'image/png');
        return $.redirect(`https://${options.hostname}${result[1].images[0].url.replace(/1920x1080/, _size)}`);
    }

    // 处理源数据
    let images = result[1].images.map(image => {
        return {
            date: image.enddate,
            url: `https://${options.hostname}${image.url.replace(/1920x1080/, _size)}`,
            copyright: image.copyright,
            copyright_link: image.copyrightlink,
            hashcode: image.hsh,
        }
    });

    // 返回JSON
    return $.emit({ images });
}