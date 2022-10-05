/**
 * Includes some common functions used in APIs.
 * @author Pectics
 * @param {Response} response Nodejs standard Response object
 * @returns {Array} Contains function info and error to feedback sth.
 */
module.exports = function (response) {
    return {
        info: function (
            code = 200,
            message = 'Data request succeeded!',
            data
        ) {
            response.status(code)
                .setHeader('Content-Type', 'application/json')
                .send(JSON.stringify({
                    code: code,
                    message: message,
                    data: data,
                }, null, 4));
        },
        error: function (
            code = 400,
            message = 'Data request failed!',
            advice = 'Refer to docs.peckot.com for more.'
        ) {
            response.status(code)
                .setHeader('Content-Type', 'application/json')
                .send(JSON.stringify({
                    code: code,
                    message: message,
                    advice: advice,
                }, null, 4));
        },
    };

};