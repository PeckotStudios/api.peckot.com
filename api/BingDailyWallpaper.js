/**
 * Get daily wallpapers from Bing API
 * Description: This API returns daily wallpapers from Bing, including a range of available resolutions.
 * Request: <Type> (Required) [Optional = {DefaultValue}]
 *   <string>  [area = "cn"]        - location to retrieve wallpapers from (e.g. "cn" for China, "us" for United States)
 *   <string>  [type = "json"]      - format of feedback, allowed values are "json" and "image"
 *   <string>  [node = "default"]   - which Bing subdomain to use for retrieval, allowed values are "default" and "interl"
 *   <string>  [size = "1920x1080"] - size of the wallpaper to retrieve, allowed values include "1920x1080", "1920x1200", "1366x768", etc.
 *   <integer> [dateback = 0]       - number of days to go back to retrieve previous daily wallpapers, 0 for current day only
 *   <integer> [num = 1]            - number of wallpapers to retrieve (up to 8 at a time)
 * Response: <Type> [Key] {Condition}
 *   <integer> [code]    {None}     - HTTP status code
 *   <string>  [message] {None}     - message regarding response status
 *   <string>  [advice]  {Fail}     - debug advice in case of error
 *   <object>  [data]    {Success}  - response data, containing an array of wallpaper objects, each containing a URL and associated metadata
 * @author Pectics
 * @param {*} req - Express request object
 * @param {*} res - Express response object
 */

// Dependencies
import { info as $info, error as $error } from "../.lib/API";
import { get } from "axios";

export default (req, res) => {
    // Input arguments
    const {
        area = "cn",        // 壁纸地域 iso2
        type = "json",      // 返回格式 json image
        node = "default",   // 获取节点 default interl
        size = "1920x1080", // 图片大小 1920x1080,1920x1200,1366x768,1280x768,1024x768,800x600,800x480,768x1280,720x1280
        date = 0,       // 壁纸日期 0(今天), n(n天前)
        num = 1             // 获取数量 1-8
    } = req.query;

    // Arguments process
    const _url = node.toLowerCase() == "interl" ? "https://www.bing.com" : "https://cn.bing.com";
    var _area = area.toLowerCase() == "cn" ? "cn" : ["ad", "ae", "af", "ag", "ai", "al", "am", "an", "ao", "aq", "ar", "as", "at", "au", "aw", "ax", "az", "ba", "bb", "bd", "be", "bf", "bg", "bh", "bi", "bj", "bl", "bm", "bn", "bo", "bq", "br", "bs", "bt", "bv", "bw", "by", "bz", "ca", "cc", "cd", "cf", "cg", "ch", "ci", "ck", "cl", "cm", "co", "cr", "cs", "cu", "cv", "cw", "cx", "cy", "cz", "de", "dj", "dk", "dm", "do", "dz", "ec", "ee", "eg", "eh", "er", "es", "et", "fi", "fj", "fk", "fm", "fo", "fr", "ga", "gb", "gd", "ge", "gf", "gg", "gh", "gi", "gl", "gm", "gn", "gp", "gq", "gr", "gs", "gt", "gu", "gw", "gy", "hk", "hm", "hn", "hr", "ht", "hu", "id", "ie", "il", "im", "in", "io", "iq", "ir", "is", "it", "je", "jm", "jo", "jp", "ke", "kg", "kh", "ki", "km", "kn", "kp", "kr", "kw", "ky", "kz", "la", "lb", "lc", "li", "lk", "lr", "ls", "lt", "lu", "lv", "ly", "ma", "mc", "md", "me", "mf", "mg", "mh", "mk", "ml", "mm", "mn", "mo", "mp", "mq", "mr", "ms", "mt", "mu", "mv", "mw", "mx", "my", "mz", "na", "nc", "ne", "nf", "ng", "ni", "nl", "no", "np", "nr", "nu", "nz", "om", "pa", "pe", "pf", "pg", "ph", "pk", "pl", "pm", "pn", "pr", "ps", "pt", "pw", "py", "qa", "re", "ro", "rs", "ru", "rw", "sa", "sb", "sc", "sd", "se", "sg", "sh", "si", "sj", "sk", "sl", "sm", "sn", "so", "sr", "ss", "st", "sv", "sx", "sy", "sz", "tc", "td", "tf", "tg", "th", "tj", "tk", "tl", "tm", "tn", "to", "tr", "tt", "tv", "tw", "tz", "ua", "ug", "um", "us", "uy", "uz", "va", "vc", "ve", "vg", "vi", "vn", "vu", "wf", "ws", "xk", "ye", "yt", "za", "zm", "zw"].includes(area.toLowerCase()) ? area.toLowerCase() : "cn";
    var _type = type.toLowerCase() == "image" ? "image" : "json";
    var _size = size.toLowerCase() == "1920x1080" ? "1920x1080" : ["1920x1200", "1366x768", "1280x768", "1024x768", "800x600", "800x480", "768x1280", "720x1280"].includes(size.toLowerCase()) ? size.toLowerCase() : "1920x1080";
    var _date = date <= 0 ? 0 : date;
    var _num = num <= 1 ? 1 : num >= 8 ? 8 : num;

    // Main process
    get(`${_url}/HPImageArchive.aspx?cc=${_area}&format=js&idx=${_date}&n=${_num}`).then(response => {
        if (_type == "image") {
            res.status(200).setHeader("Content-Type", "image/png")
                .redirect(_url + new String(response.data.images[0].url).replace(/1920x1080/g, _size));
            return;
        } else {
            var _images = new Array();
            response.data.images.forEach(image => {
                _images.push({
                    date: image.enddate,
                    url: _url + new String(image.url).replace(/1920x1080/g, _size),
                    copyright: image.copyright,
                    copyrightlink: image.copyrightlink,
                    hashcode: image.hsh,
                });
            });
            return res.setHeader("Content-Type", "application/json").send($info({ images: _images }));
        }
    }).catch(error => {
        return res.setHeader("Content-Type", "application/json").send($error(error, "Confirm whether your parameters are correct."));
    });

}