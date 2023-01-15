export default (req, res) => {
    // Input arguments
    const {
        url = encodeURIComponent("https://api.peckot.com/"),
    } = req.query;
    const prompt = decodeURIComponent(url);

    // Main process
	res.redirect(url);
}