module.exports = (req, res) => {
    res.jsonp({
        code: 400,
        message: 'Error! Please call the correct API.',
        advice: 'Refer to docs.peckot.com for more.'
    });
}