const https = require('https');

exports.handler = async (event) => {
    const authParam = event.queryStringParameters.auth;
    const loopAuth = process.env.LOOP_AUTH;
    const targetTime = new Date('2024-09-25T17:50:00+08:00');

    // 检查auth参数
    if (authParam !== loopAuth) {
        return {
            statusCode: 500,
            body: 'Unauthorized',
        };
    }

    // 检查当前时间
    const currentTime = new Date();
    if (currentTime > targetTime) {
        return {
            statusCode: 500,
            body: 'Stopped',
        };
    }

    // 等待1秒后异步调用自身
    await new Promise((resolve) => setTimeout(resolve, 1000));

    const postData = JSON.stringify({ message: 'Heartbeat' });

    const options = {
        hostname: 'cn-jn-lt-plustmp1.natfrp.cloud',
        port: 55862,
        path: '/',
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            'Content-Length': Buffer.byteLength(postData),
        },
    };

    const req = https.request(options, (res) => {
        res.on('data', (d) => {
            process.stdout.write(d);
        });
    });

    req.on('error', (e) => {
        console.error(e);
    });

    // 写入数据
    req.write(postData);
    req.end();

    // 异步GET请求
    const url = `https://api.peckot.com/_Loop?auth=${loopAuth}`;
    new Promise((resolve, reject) => {
        https.get(url, (res) => {
            res.on('data', () => { });
            res.on('end', resolve);
        }).on('error', reject);
    });

    return {
        statusCode: 200,
        body: 'Looping',
    };
};
