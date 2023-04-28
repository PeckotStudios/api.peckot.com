/**
 * Redirect to provided URL
 * RequireAuthorize: true
 * Description: This endpoint takes a URL as input and redirects the user to that URL.
 * Request: <Type> (Required) [Optional = {DefaultValue}]
 *   <string> [url = "https://api.peckot.com/"] - the URL to redirect to
 * Response: <Type> [Key] {Condition}
 *   N/A - the response is a redirect to the provided URL
 * @author Pectics
 * @param {*} req - Express request object
 * @param {*} res - Express response object
 */

import { $authorize, $json_error } from "../.lib/API"

export default async (req, res) => {
    // Authorization
    if (!(await $authorize("LinkJump", req.headers.authorization))) {
        $json_error(res, 401, "Access unauthorized!", "Please complete the authorization header.")
        return
    }
    
    // Input arguments
    const {
        url = encodeURIComponent("https://api.peckot.com/"),
    } = req.query
    const prompt = decodeURIComponent(url)

    // Main process
	res.redirect(prompt)
}