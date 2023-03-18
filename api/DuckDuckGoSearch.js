import { info as $info, error as $error } from "../.lib/API";
import { URLSearchParams } from "url";
import { JSDOM } from "jsdom";
import axios from 'axios';

export default (req, res) => {
  // Input arguments
  const {
    key = 'Peckot API',
    num = 5,
  } = req.query;

  // Main process
  res.setHeader("Content-Type", "application/json")
  getResults(key)
    .then(data => res.status(200).send($info(data)))
    .catch(error => res.status(400).send($error(error)));

}

// 获取HTML页面内容
async function getHtml(keyword) {
  const url = 'http://html.duckduckgo.com/html/';
  const data = new URLSearchParams();
  data.append('q', keyword);
  const { data: html } = await axios({
    method: 'POST',
    url: url,
    data: data,
  });
  return html;
}

// 解析HTML页面内容，返回搜索结果的数组
function parseHtml(html) {
  const final_results = [];
  const dom = new JSDOM(html);
  const result_bodies = dom.window.document.querySelectorAll(".result__body");
  result_bodies.forEach(item => {
    const title = item.querySelector(".result__a").textContent;
    //const link = decodeURIComponent(item.querySelector(".result__a").href.substring("//duckduckgo.com/l/?uddg=".length));
    const link = item.querySelector(".result__a").href;
    const snippet = item.querySelector(".result__snippet").textContent;
    final_results.push({
      title: title,
      link: link,
      snippet: snippet
    });
  });
  return Promise.resolve(final_results);
}

// 获取搜索结果并解析
async function getResults(keyword) {
  const html = await getHtml(keyword);
  const resultsArray = await parseHtml(html);
  return resultsArray;
}
