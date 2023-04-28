import { $json_error } from "../.lib/API"

export default (req, res) => {
    $json_error(res, 200, "Hi there, welcome to Peckot API.", "Refer to docs.peckot.com for more.")
}