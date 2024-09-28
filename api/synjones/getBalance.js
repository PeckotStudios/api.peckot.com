// 引入依赖
import { $json_error, $json_info } from '../../.lib/API'
import { request } from 'http';
import { MongoClient } from 'mongodb'
import { stringify as Qstringify } from 'querystring';

const data = {
    username: null,
    password: null,
    grant_type: 'password',
    scope: 'all',
    loginFrom: 'h5',
    logintype: 'sno',
    device_token: 'h5',
    synAccessSource: 'h5'
};

const loginOptions = {
    hostname: '121.251.19.62',
    path: '/berserker-auth/oauth/token',
    method: 'POST',
    headers: {
        'Accept': '*/*',
        'Accept-Encoding': 'gzip, deflate',
        'Accept-Language': 'zh-CN,zh;q=0.9,en-US;q=0.8,en;q=0.7,en-GB;q=0.6',
        'Authorization': `Basic ${Buffer.from('mobile_service_platform:mobile_service_platform_secret').toString('base64')}`,
        'Connection': 'keep-alive',
        'Content-Type': 'application/x-www-form-urlencoded',
        'Cookie': 'TGC=; error_times=0',
        'Host': '121.251.19.62',
        'Origin': 'http://121.251.19.62',
        'Referer': 'http://121.251.19.62/plat/login?synAccessSource=h5&loginFrom=h5&type=logout',
        'User-Agent': 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36 Edg/129.0.0.0'
    }
};

const cardOptions = {
    hostname: '121.251.19.62',
    path: '/berserker-app/ykt/tsm/queryCard?synAccessSource=h5',
    method: 'GET',
    headers: {
        'Accept': '*/*',
        'Accept-Language': 'zh-CN,zh;q=0.9,en-US;q=0.8,en;q=0.7,en-GB;q=0.6',
        'Cookie': '',
        'Host': '121.251.19.62',
        'Proxy-Connection': 'keep-alive',
        'Referer': 'http://121.251.19.62/plat/wode',
        'User-Agent': 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36 Edg/129.0.0.0',
        'synjones-auth': 'bearer '
    }
};

export default async (req, res) => {

    // 输入参数
    const { username, password } = req.query

    // 参数处理
    if (undefined === username || undefined === password) return $json_error(res, 403, '用户名或密码错误');

    // 主进程
    const cache = await getUserCache(username, password);
    const card = await _getCard(cache.cookie, cache.access_token);

    return $json_info(res, 200, card);
}

function _getCard(cookie, token) {
    return new Promise((resolve, reject) => {
        cardOptions.headers.Cookie += cookie;
        cardOptions.headers['synjones-auth'] += token;
        const req = request(cardOptions, res => {
            res.setEncoding('utf-8');
            let response = '';
            res.on('data', r => response += r);
            res.on('end', () => resolve(JSON.parse(response).data.card[0]));
        });
        req.on('error', e => reject(e));
        req.end();
    })
}

async function getUserCache(username, password = null) {
    const mongoClient = new MongoClient(process.env.MONGODB_URI);
    const authCacheCollection = mongoClient.db('synjones').collection('authCache');
    const userDocument = await authCacheCollection.findOne({ username });
    const result = {
        username,
        cookie: null,
        access_token: null,
        refresh_token: null,
    }
    // 查询到缓存，尝试读取
    if (null !== userDocument) {
        result.cookie = userDocument.cookie;
        result.access_token = userDocument.access_token;
        result.refresh_token = userDocument.refresh_token;
    }
    // 未查询到缓存，尝试登录
    else {
        if (null === password) return null;
        data.username = username;
        data.password = password;
        loginOptions.headers['Content-Length'] = Buffer.byteLength(Qstringify(data));
        // 登录请求
        await new Promise((resolve, reject) => {
            const req = request(loginOptions, res => {
                // 请求失败
                switch (res.statusCode) {
                    case 400:
                    case 401:
                    case 500:
                    case 501:
                    case 502:
                        reject('登录失败');
                        break;
                }
                res.setEncoding('utf-8');
                // 获取Set-Cookie
                let cookie = '';
                res.headers['set-cookie']?.forEach(c => cookie += c.substring(0, c.indexOf(';')));
                // 请求数据
                let response = '';
                res.on('data', r => response += r);
                // 请求结束，保存到缓存
                res.on('end', async () => {
                    let o = JSON.parse(response);
                    result.username = o.sno;
                    result.cookie = cookie;
                    result.access_token = o.access_token;
                    result.refresh_token = o.refresh_token;
                    await authCacheCollection.insertOne(result);
                    resolve();
                });
            });
            req.on('error', e => $json_error(res, 500, e));
            // 传入参数
            req.write(Qstringify(data));
            req.end();
        });
    }
    mongoClient.close();
    return result;
}