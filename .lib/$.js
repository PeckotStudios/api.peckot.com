class API {
    constructor() {
        this.req = null;
        this.res = null;
    }
    init(req, res, ...methods) {
        this.req = req;
        this.res = res;
        //if (!methods || methods.includes(req.method)) return this.error(`Method ${req.method} was not allowed`, 405);
    }
    check(...args) {
        for (let arg of args)
            if (
                undefined === arg ||
                null === arg ||
                '' == arg ||
                '' == arg.trim()
            ) return false;
        return true;
    }
    info(info, code = 200, status = 'Success') {
        let ret = {};
        switch (typeof info) {
            case 'undefined':
            case 'function':
            case 'object':
                throw new TypeError(`"info" could not be type ${typeof info}`);
            case 'string':
            case 'number':
            case 'bigint':
            case 'boolean':
            case 'symbol':
                ret.code = code;
                ret.status = status;
                ret.message = info;
                break;
        }
        this.res
            .setHeader('Content-Type', 'application/json')
            .status(code)
            .send(JSON.stringify(ret, null, 4));
    }
    error(error, code = 500, status = 'Failed') {
        let ret = {};
        switch (typeof error) {
            default:
            case 'undefined':
            case 'function':
                throw new TypeError(`"error" could not be type ${typeof info}`);
            case 'string':
            case 'number':
            case 'bigint':
            case 'boolean':
            case 'symbol':
                ret.code = code;
                ret.status = status;
                ret.message = `Error: ${error}`;
                break;
            case 'object':
                ret.code = code;
                ret.status = status;
                ret.message = `Error: ${error}`;
                ret.error = error;
                break;
        }
        this.res
            .setHeader('Content-Type', 'application/json')
            .status(code)
            .send(JSON.stringify(ret, null, 4));
    }
    emit(data, code = 200, status = 'Success') {
        let ret = {};
        ret.code = code;
        ret.status = status;
        ret.message = `Data request ${status.toLocaleLowerCase()}!`;
        ret.data = data;
        this.res
            .setHeader('Content-Type', 'application/json')
            .status(code)
            .send(JSON.stringify(ret, null, 4));
    }
    redirect(url, code = 302) {
        this.res
            .status(code)
            .redirect(url);
    }
}

const $ = new API();

export default $;