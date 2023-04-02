/**
 * Get search results from DuckDuckGo or backup API
 * RequireAuthorize: true
 * Description: This endpoint returns search results based on the provided keyword and time range.
 * Request: <Type> (Required) [Optional = {DefaultValue}]
 *   <string>  [keyword = "Peckot API"] - keyword to search for
 *   <integer> [amount = 5]             - number of search results to return
 *   <string>  [time = null]            - time range to search within ("year", "month", "week", or "day"), null for all time
 * Response: <Type> [Key] {Condition}
 *   <integer> [code]    {None}         - HTTP status code
 *   <string>  [message] {None}         - message regarding response status
 *   <string>  [advice]  {Fail}         - debug advice in case of error
 *   <array>   [data]    {Seccess}      - array of search result objects, each containing a title, link, and snippet of the search result
 * @author Pectics
 * @param {*} req - Express request object
 * @param {*} res - Express response object
 */

// Dependencies
import { $authorize, $json_error, $json_info } from "../.lib/API";
import { JSDOM } from "jsdom";
import axios from "axios";

export default async (req, res) => {
    // Authorization
    if (!(await $authorize("DuckDuckGoSearch", req.headers.authorization))) {
        $json_error(res, 401, "Access unauthorized!", "Please complete the authorization parameters.");
        return;
    }

    // Input arguments
    const {
        keyword = null,
        amount = 5,
        time = null,
    } = req.query;

    // Verification
    if (null == keyword) {
        $json_error(res, 400, "Please provide the keyword parameter!");
        return;
    }
    const _keyword = encodeURIComponent(keyword);

    // Main process
    getBackupResults(_keyword, amount, time)
        .then(data => $json_info(res, 200, { results: data }))
        .catch(error => {
            getResults(_keyword, amount, time)
                .then(data => $json_info(res, 200, { results: data }, '[BackupNode] WARNING: ' + error.message))
                .catch(error => $json_error(res, 500, error))
        });
}

// Get html content
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

// Parse html content to results content
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

// Local crawl
async function getResults(keyword, amount, time) {
    const html = await getHtml(keyword, time);
    const resultsArray = await parseHtml(html);
    const mergedArray = [].concat(...resultsArray.slice(0, amount));
    return Promise.resolve(mergedArray);
}

// Backup node crawl
async function getBackupResults(keyword, amount, time) {
    const { data } = await axios.get(`https://ddg-api.herokuapp.com/search?query=${keyword}&time_range=${time}`);
    const mergedArray = [].concat(...data.slice(0, amount));
    return Promise.resolve(mergedArray);
}
