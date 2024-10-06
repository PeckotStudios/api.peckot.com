import $ from "../../.lib/$";

export default (req, res) => {
    $.init(req, res);

    const {
        url = encodeURIComponent("https://api.peckot.com/"),
    } = req.query;

	return $.redirect(decodeURIComponent(url));
}