/**
 * Includes some common functions used in APIs.
 * @author Pectics
 */
export function info(data, message = 'Data request succeeded!') {
    return JSON.stringify({
        code: 200,
        message: message,
        data: data,
    }, null, 4);
}
export function error(err, advice = 'Refer to docs.peckot.com for more.') {
    return JSON.stringify({
        code: 400,
        message: `Data request failed! Error: ${err.message}`,
        advice: advice,
    }, null, 4);
}