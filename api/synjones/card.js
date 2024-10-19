import { request as Hrequest } from "http";

import $ from "../../.lib/$";

// 请求选项
const options = {
    hostname: '121.251.19.62',
    path: '/berserker-app/ykt/tsm/queryCard?synAccessSource=API',
    method: 'GET',
    headers: {
        'Accept': '*/*',
        'Accept-Language': 'zh-CN,zh;q=0.9,en-US;q=0.8,en;q=0.7,en-GB;q=0.6',
        'Host': '121.251.19.62',
        'Proxy-Connection': 'keep-alive',
        'Referer': 'http://121.251.19.62/plat/wode',
        'User-Agent': 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36 Edg/129.0.0.0',
    }
};

export default async (req, res) => {
    $.init(req, res, 'POST', 'GET');

    // 输入并处理参数
    const { token } = req.query;
    if (!$.check(token)) return $.error('请输入正确的Token！');

    // 初始化请求选项
    options.headers['Synjones-Auth'] = `Bearer ${token}`;

    // 设置输出结构
    const output = {
        account: null,          // 卡号
        card_name: null,        // 卡名
        balance: null,          // 卡余额 单位为 分
        expire_date: null,      // 过期日期
        profile: {              // 个人信息
            name: null,         // 姓名
            major: null,        // 专业
            phone: null,        // 手机号
            id_card: null,      // 身份证号
            bank_account: null, // 银行卡号
        }
    };

    // 等待登录完成
    const result = await new Promise((resolve) => {
        // 登录请求
        const request = Hrequest(options, r => {
            // 设置返回值字符集
            r.setEncoding('utf-8');
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
        request.end();
    });

    // 检查登录情况
    if (!result[0]) return $.error(e, 500); // 网络通信错误
    if (result[1].code == 401) return $.error('Token无效或已过期！', 401); // Token无效或过期

    // 登录成功，设置输出内容
    output.account = result[1].data.card[0].account;
    output.card_name = result[1].data.card[0].cardname;
    output.balance = parseInt(result[1].data.card[0].db_balance) + parseInt(result[1].data.card[0].unsettle_amount);
    output.expire_date = result[1].data.card[0].expdate;
    output.profile = {
        name: result[1].data.card[0].name,
        major: result[1].data.card[0].department_name,
        phone: desensitize(result[1].data.card[0].phone, '__*******__'),
        id_card: desensitize(result[1].data.card[0].cert, '___*************__'),
        bank_account: desensitize(result[1].data.card[0].bankacc, '___**************__'),
    }

    // 最终输出
    return $.emit(output);
}

// 信息脱敏
function desensitize(str, format) {
    if (!/^[_*]+$/.test(format)) throw new Error('Invalid format: must only contain _ and *');

    const showStart = format.indexOf('*');
    const showEnd = format.lastIndexOf('*') + 1;

    const startPart = str.slice(0, showStart);
    const endPart = str.slice(-1 * (str.length - showEnd));
    const maskLength = str.length - startPart.length - endPart.length;
    const maskPart = '*'.repeat(maskLength);

    return startPart + maskPart + endPart;
}