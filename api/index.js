module.exports = (req, res) => {
    res.status(400).send(JSON.stringify({
        code: 400,
        message: 'Error! Please call the correct API.',
        advice: 'Refer to docs.peckot.com for more.'
    }, null, 4));
}