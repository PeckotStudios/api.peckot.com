module.exports = (req, res) => {
    res.json({
        code: 400,
        message: 'Error! Please select the correct API.',
        advice: 'Refer to docs.peckot.com to learn more.'
    });
}