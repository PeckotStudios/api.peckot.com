export default (req, res) => {
    res.status(200).setHeader("Content-Type", "application/json").send(JSON.stringify({
            code: 200,
            message: "Hi there, welcome to Peckot API.",
            advice: "Refer to docs.peckot.com for more."
        }, null, 4));
}