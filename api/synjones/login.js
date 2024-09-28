import { request as Hrequest } from "http";
import { stringify as Qstringify } from "querystring";

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
    $.init(req, res);

    // 输入并处理参数
    const { sid, password } = req.query;
    if (undefined === sid || undefined === password) return $.error('请输入正确的学号和密码！');

    /**
     * 主进程
     */

    // 初始化登录参数
    args.username = sid;
    args.password = password;
    options.headers['Content-Length'] = Buffer.byteLength(Qstringify(args));

    // 设置输出结构
    const output = {
        sid: null,
        name: null,
        cookie: null,
        access_token: null,
        refresh_token: null,
    };

    // 等待登录完成
    const result = await new Promise((resolve) => {
        // 登录请求
        const request = Hrequest(options, r => {
            // 设置返回值字符集
            r.setEncoding('utf-8');
            // 获取Set-Cookie
            output.cookie = r.headers['set-cookie']?.map(c => c.substring(0, c.indexOf(';'))).join('; ');
            // 请求到数据并保存
            let response = '';
            r.on('data', d => response += d);
            // 请求结束，设置返回值
            r.on('end', () => {
                let o = JSON.parse(response);
                resolve([true, o]);
            });
        });
        // 登录出错
        request.on('error', e => resolve([false, e]));
        // 传入参数
        request.write(Qstringify(args));
        request.end();
    });

    // 检查登录情况
    if (!result[0]) return $.error(e, 500); // 网络通信错误
    if (result[1].code == 400) return $.error('请输入正确的学号！'); // 学号为空
    if (result[1].code == 8000) return $.error('学号或密码错误，请重试！'); // 密码错误

    // 登录成功，设置输出内容
    output.sid = result[1].sno;
    output.name = result[1].name;
    output.access_token = result[1].access_token;
    output.refresh_token = result[1].refresh_token;

    // 最终输出
    return $.emit(output);
}