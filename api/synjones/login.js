import { request as Hrequest } from "http";
import $ from "../../.lib/$";

// 登录请求参数
const args = {
    username: null,
    password: null,
    grant_type: 'password',
    scope: 'all',
    loginFrom: 'h5',
    logintype: 'sno',
    device_token: 'h5',
    synAccessSource: 'h5'
};

// 登录请求选项
const options = {
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

export default async (req, res) => {
    $(req, res);

    // 输入参数
    const { sid, password } = req.query; 

    /**
     * 主进程
     */

    // 初始化登录参数
    args.username = sid;
    args.password = password;
    options.headers['Content-Length'] = Buffer.byteLength(Qstringify(args));

    // 等待登录完成
    const status = await new Promise((resolve) => {
        // 登录请求
        const request = Hrequest(options, r => {
            // 设置返回值字符集
            r.setEncoding('utf-8');
            // 获取Set-Cookie
            let cookie = r.headers['set-cookie']?.map(c => c.substring(0, c.indexOf(';'))).join('; ');
            // 请求到数据并保存
            let response = '';
            r.on('data', d => response += d);
            // 请求结束，设置返回值
            r.on('end', () => {
                let o = JSON.parse(response);
                let result = {};
                result.sid = o.sno;
                result.name = o.name;
                result.cookie = cookie;
                result.access_token = o.access_token;
                result.refresh_token = o.refresh_token;
                resolve([true, result]);
            });
        });
        // 登录出错
        request.on('error', e => resolve([false, e]));
        // 传入参数
        request.write(Qstringify(args));
        request.end();
    });

    // 检查登录情况并返回内容
    if (status[0]) return $.emit(status[1]);
    else return $.error(e, 500);
}