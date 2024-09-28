export default async (req, res) => {
    const {
        url = encodeURIComponent("https://api.peckot.com/"),
    } = req.query;
	res.redirect(decodeURIComponent(url));
}