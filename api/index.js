import $ from "../.lib/$";

export default (req, res) => {
    $.init(req, res);
    $.info("Hi there, welcome to Peckot API.", "Refer to docs.peckot.com for more.");
}