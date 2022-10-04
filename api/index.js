module.exports = (req, res) => {
    res.status(400).jsonp({
        code: 400,
        message: 'Error! Please call the correct API.',
        advice: 'Refer to docs.peckot.com for more.'
    });
}