module.exports = (req, res) => {
    res.json({
        code: 400,
        message: 'Error! Please call the correct API.',
        advice: 'Refer to docs.peckot.com for more.'
    });
}