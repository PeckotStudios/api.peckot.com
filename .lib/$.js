const template = {
    code: -1,
    status: 'Unknown',
    message: 'null',
}

class API {
    constructor() {
        this.req = null;
        this.res = null;
    }
    init(req, res) {
        this.req = req;
        this.res = res;
    }
    info(info, code = 200, status = 'Success') {
        let ret = template;
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
        let ret = template;
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
        let ret = template;
        ret.code = code;
        ret.status = status;
        ret.message = `Data request ${status.toLocaleLowerCase()}!`;
        ret.data = data;
        this.res
            .setHeader('Content-Type', 'application/json')
            .status(code)
            .send(JSON.stringify(ret, null, 4));
    }
}

const $ = new API();

export default $;