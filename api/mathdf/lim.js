import Chromium from 'chrome-aws-lambda';
import puppeteer from 'puppeteer-core';

export default async function handler(req, res) {
  let browser;
  
  try {
    // 启动 Puppeteer 浏览器
    puppeteer.executablePath(Chromium.executablePath);
    browser = await puppeteer.launch({
      args: Chromium.args,
      defaultViewport: Chromium.defaultViewport,
      headless: Chromium.headless,
    });

    const page = await browser.newPage();

    // 访问目标页面
    const targetUrl = 'https://mathdf.com/lim/cn/#expr=sqrt(36*(x^2)+7*x+49)-(6*x)&arg=x&to=inf';
    await page.goto(targetUrl);

    // 点击提交按钮
    await page.evaluate(() => {
      document.getElementById('solve').click();
    });

    // 等待结果的 math-canvas 出现
    await page.waitForSelector('#math-canvas', { timeout: 10000 });

    // 提取所需内容并输出到控制台
    const result = await page.evaluate(() => {
      const canvas = document.getElementById('math-canvas');
      if (canvas && canvas.firstChild && canvas.firstChild.children) {
        return Array.from(canvas.firstChild.children).map(child => child.textContent);
      }
      return 'Math canvas not found or no children elements';
    });

    // 输出结果到控制台，并返回响应
    console.log(result);
    res.status(200).json({ result });

  } catch (error) {
    console.error('Error:', error);
    res.status(500).json({ error: 'Something went wrong' });
  } finally {
    if (browser) {
      await browser.close();
    }
  }
}
