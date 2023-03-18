/**
 * Redirect to provided URL
 * Description: This endpoint takes a URL as input and redirects the user to that URL.
 * Request: <Type> (Required) [Optional = {DefaultValue}]
 *   <string> [url = "https://api.peckot.com/"] - the URL to redirect to
 * Response: <Type> [Key] {Condition}
 *   N/A - the response is a redirect to the provided URL
 * @author Pectics
 * @param {*} req - Express request object
 * @param {*} res - Express response object
 */

export default (req, res) => {
    // Input arguments
    const {
        url = encodeURIComponent("https://api.peckot.com/"),
    } = req.query;
    const prompt = decodeURIComponent(url);

    // Main process
	res.redirect(prompt);
}