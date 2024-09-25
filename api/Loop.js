import { request, get } from 'https';

export default async (req, res) => {
    
    const {
        auth = null,
    } = req.query

    const loopAuth = process.env.LOOP_AUTH;
    const targetTime = new Date('2024-09-25T17:50:00+08:00');

    // 检查auth参数
    if (auth !== loopAuth) {
        res.status(500).send('Unauthorized');
        return;
    }

    // 检查当前时间
    const currentTime = new Date();
    if (currentTime > targetTime) {
        res.status(500).send('Stopped');
        return;
    }

    // 等待1秒
    await new Promise((resolve) => setTimeout(resolve, 1000));

    // const postData = JSON.stringify({ message: 'Heartbeat' });

    // const options = {
    //     hostname: 'cn-jn-lt-plustmp1.natfrp.cloud',
    //     port: 55862,
    //     path: '/',
    //     method: 'POST',
    //     headers: {
    //         'Content-Type': 'application/json',
    //         'Content-Length': Buffer.byteLength(postData),
    //     },
    // };

    // const req2 = request(options, (res) => {
    //     res.on('data', (d) => {
    //         process.stdout.write(d);
    //     });
    // });

    // req2.on('error', (e) => {
    //     console.error(e);
    // });

    // // 写入数据
    // req2.write(postData);
    // req2.end();

    // 异步GET请求
    const url = `https://api.peckot.com/Loop?auth=${loopAuth}`;
    new Promise((resolve, reject) => {
        get(url, (res) => {
            res.on('data', () => { });
            res.on('end', resolve);
        }).on('error', reject);
    });

    res.status(200).send('Looping');
    return;
}
