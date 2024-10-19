const chrome = require("chrome-aws-lambda");
const puppeteer = require("puppeteer-core");

module.exports = async (req, res) => {

  const options = process.env.LOOP_AUTH
    ? {
      args: chrome.args,
      executablePath: await chrome.executablePath,
      headless: chrome.headless,
    }
    : {
      args: [],
      executablePath: "C:\\Users\\Pectics\\.cache\\puppeteer\\chrome\\win64-130.0.6723.58\\chrome-win64\\chrome.exe",
      headless: false,
    };


  const browser = await puppeteer.launch(options);
  const page = await browser.newPage();

  await page.setRequestInterception(true);
  page.on("request", (req) => {
    if (
      req.resourceType() == "stylesheet" ||
      req.resourceType() == "font" ||
      req.resourceType() == "image"
    ) {
      req.abort();
    } else {
      req.continue();
    }
  });

  const url = 'http://localhost:3000/mathdf/lim/render#[[-2,%22\\\\lim_{x\\\\to{\\\\infty}}{\\\\sqrt{36\\\\,x^{2}+7\\\\,x+49}-6\\\\,x}%22,%22\\\\dfrac{7}{12}%22,%227/12%22,%22%22],[-10],[-15,[]],[-16,%22x%22,%22\\\\infty%22,%22\\\\sqrt{36\\\\,x^{2}+7\\\\,x+49}-6\\\\,x=\\\\dfrac{7}{12}+\\\\dfrac{7007}{1728\\\\,x}-\\\\dfrac{49049}{124416\\\\,x^{2}}-\\\\dfrac{47724677}{35831808\\\\,x^{3}}+\\\\dfrac{1021445425}{2579890176\\\\,x^{4}}+\\\\dfrac{105098322329}{123834728448\\\\,x^{5}}-\\\\dfrac{3901726848019}{8916100448256\\\\,x^{6}}+O\\\\left(\\\\dfrac{1}{x^{7}}\\\\right)%22],[%22-1-%22,%22\\\\sqrt{36\\\\,x^{2}+7\\\\,x+49}-6\\\\,x%22,%22x%22,%22\\\\infty%22,0],[%2214-%22,[3,%22x%22,%22\\\\infty%22,%22\\\\sqrt{36\\\\cdot%20\\\\infty^{2}+7\\\\,\\\\infty+49}-6\\\\,\\\\infty%22],%22\\\\infty-\\\\infty%22,%22%22],[%228-%22,[0,%22x%22,%22\\\\infty%22,%22\\\\sqrt{36\\\\,x^{2}+7\\\\,x+49}-6\\\\,x%22,%22\\\\sqrt{36\\\\,x^{2}+7\\\\,x+49}+6\\\\,x%22,1,1,%22\\\\dfrac{7\\\\,x+49}{\\\\sqrt{36\\\\,x^{2}+7\\\\,x+49}+6\\\\,x}%22],%22\\\\dfrac{7\\\\,x+49}{\\\\sqrt{36\\\\,x^{2}+7\\\\,x+49}+6\\\\,x}%22,%22%22],[%226-%22,[2,%22x%22,%22\\\\infty%22,%22%22,%22x%22],%22\\\\dfrac{\\\\dfrac{49}{x}+7}{\\\\sqrt{\\\\dfrac{7}{x}+\\\\dfrac{49}{x^{2}}+36}+6}%22,%22%22],[%226-%22,[3,%22x%22,%22\\\\infty%22,%22\\\\dfrac{7}{12}%22],%22\\\\dfrac{49\\\\cdot%20{\\\\htmlClass{cancel-to}{\\\\cancel{\\\\dfrac{1}{x}}^{\\\\,\\\\Large{^{0}}}}}+7}{\\\\sqrt{7\\\\cdot%20{\\\\htmlClass{cancel-to}{\\\\cancel{\\\\dfrac{1}{x}}^{\\\\,\\\\Large{^{0}}}}}+49\\\\cdot%20{\\\\htmlClass{cancel-to}{\\\\cancel{\\\\dfrac{1}{x^{2}}}^{\\\\,\\\\Large{^{0}}}}}+36}+6}%22,%22%22],[%220-%22,[1,%22x%22,%22\\\\infty%22,%22\\\\dfrac{7}{12}%22],%22\\\\dfrac{7}{12}%22,%22%22]]'

  await page.setViewport({ width: 500, height: 1000 });
  await page.goto(url, { waitUntil: "domcontentloaded" });

  page.

  res.setHeader('Content-Type', 'image/png');
  res.send(buffer);
};
