import { info as $info, error as $error } from "../.lib/API";
import { JSDOM } from "jsdom";
import axios from "axios";

export default (req, res) => {
  // Input arguments
  const {
    keyword = encodeURIComponent('Peckot API'),
    amount = 5,
    time = null,
  } = req.query;

  const _keyword = encodeURIComponent(keyword);

  // Main process
  res.setHeader("Content-Type", "application/json")
  getBackupResults(_keyword, amount, time)
    .then(data => res.status(200).send($info(data)))
    .catch(error => {
      getResults(_keyword, amount, time)
        .then(data => res.status(200).send($info(data, '[BackupNode] WARNING: ' + error.message)))
        .catch(error => res.status(400).send($error(error)))
    });
}

// 获取HTML页面内容
async function getHtml(keyword, time) {
  switch (time) {
    case "year": time = "y"; break;
    case "month": time = "m"; break;
    case "week": time = "w"; break;
    case "day": time = "d"; break;
    default: time = ""; break;
  }
  const url = `https://html.duckduckgo.com/html/?q=${keyword}&df=${time}`;
  const { data } = await axios.get(url);
  return data;
}

// 解析HTML页面内容，返回搜索结果的数组
function parseHtml(html) {
  const finalResults = [];
  const dom = new JSDOM(html);
  const resultBodies = dom.window.document.querySelectorAll(".result__body");
  resultBodies.forEach(item => {
    const title = item.querySelector(".result__a").textContent;
    const link = decodeURIComponent(item.querySelector(".result__a").href.substring("//duckduckgo.com/l/?uddg=".length));
    const snippet = item.querySelector(".result__snippet").textContent;
    finalResults.push({
      title: title,
      link: link,
      snippet: snippet
    });
  });
  return Promise.resolve(finalResults);
}

// 获取搜索结果并解析
async function getResults(keyword, amount, time) {
  const html = await getHtml(keyword, time);
  const resultsArray = await parseHtml(html);
  const mergedArray = [].concat(...resultsArray.slice(0, amount));
  return Promise.resolve(mergedArray);
}

// 备用接口
async function getBackupResults(keyword, amount, time) {
  const { data } = await axios.get(`https://ddg-api.herokuapp.com/search?query=${keyword}&time_range=${time}`);
  console.info(new String(data).substring(0, 50));
  const resultsArray = JSON.parse(data);
  const mergedArray = [].concat(...resultsArray.slice(0, amount));
  return Promise.resolve(mergedArray);
}
