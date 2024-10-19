function r(a, b = !1) {
    return b ? document.querySelectorAll(a) : document.querySelector(a)
}

function fc(a, b) {
    let f = "";
    for (let k = 0; k < a[mb]; k++)
        f += gc[hc](a[nb](k) ^ b[nb](k % b[mb]));
    return f
}

function ra(a, b = {}) {
    try {
        var f = {
            trust: !0,
            strict: !1,
            displayMode: !0,
            fleqn: !1,
            output: "html",
            maxExpand: 3E4,
            macros: {
                "\\phi": "\\varphi"
            }
        },
            k;
        for (k in b)
            f[k] = b[k];
        "string" === typeof a && (a = r("#" + a));
        renderMathInElement(a, f)
    } catch (p) {
        console.log(p)
    }
}

function Pa() {
    document.body.classList.toggle("tb");
    document.body.classList.toggle("tw");
    xa.toggleTheme();
    document.body.classList.contains("tb") ? (window.localStorage.setItem("illum", "night"),
        document.cookie = "theme=1; path=/;") : (window.localStorage.setItem("illum", "light"),
            document.cookie = "theme=0; path=/;")
}

function ob() {
    for (var a = function (k, p, h) {
        return function () {
            for (var x = p; x < p + 1; x++)
                clearTimeout(pb[x]);
            k.parentNode.classList.remove("point-to-left");
            k.classList.remove("pinger");
            k.focus();
            k.parentNode.classList.add("point-to-left");
            k.classList.add("pinger");
            pb[h] = setTimeout(function () {
                k.parentNode.classList.remove("point-to-left");
                k.classList.remove("pinger")
            }, 1180)
        }
    }, b = r(l("LmFyZy1pcw=="), !0), f = 0; f < b.length; f++)
        b[f].addEventListener("click", a(d.WCh6, 0, f));
    b = r(l("LnQtbGlt"), !0);
    for (f = 0; f < b.length; f++)
        b[f].addEventListener("click", a(d.RgF2, 4, 4 + f))
}

function jc(a) {
    null != Ra && Ra.classList.add("hidden");
    Ra = a;
    a.classList.remove("hidden");
    a.classList.add("closed");
    null != Sa && clearTimeout(Sa);
    Sa = setTimeout(function () {
        a.classList.add("hidden");
        a.classList.remove("closed")
    }, 1E4)
}
async function katex() {
    let a = f => new Promise(function (k, p) {
        let h = document.createElement("script");
        h.src = f;
        h.onload = () => k();
        h.onerror = () => p(Error("KaTeX failed"));
        document.head.append(h)
    }),
        b = f => new Promise(function (k, p) {
            let h = document.createElement("link");
            h.rel = "stylesheet";
            h.type = "text/css";
            h.href = f;
            h.onload = () => k();
            h.onerror = () => p(Error("KaTeX failed"));
            document.head.append(h)
        });
    return await a("/KaTeX/katex.min.js").then(f => a("/KaTeX/auto-render.min.js")).then(f => b("/KaTeX/katex.min.css?1")).then(f => console.log("KaTeX loaded")).catch(console.log)
}
async function qb() {
    "function" === typeof renderMathInElement && "undefined" !== typeof katex || await katex();
    null != window.localStorage.getItem("scale") && (ya = parseInt(window.localStorage.getItem("scale"), 10));
    "night" == window.localStorage.getItem("illum") && document.body.classList.contains("tw") ? Pa() : "white" == window.localStorage.getItem("illum") && document.body.classList.contains("theme-night") && Pa();
    expandtable || null == window.localStorage.getItem("expandtable") || ("true" == window.localStorage.getItem("expandtable") ? r(l("I2V4cGFuZC10YWJsZS1pbnQ=")).checked = !0 : r(l("I2V4cGFuZC10YWJsZS1pbnQ=")).checked = !1);
    expandtable && (r(l("I2V4cGFuZC10YWJsZS1pbnQ=")).checked = !0);
    null != window.localStorage.getItem("showlinear") && ("true" == window.localStorage.getItem("showlinear") ? r(l("I3Nob3ctbGluZWFyLWludA==")).checked = !0 : r(l("I3Nob3ctbGluZWFyLWludA==")).checked = !1);
    "night" == window.localStorage.getItem("illum") ? document.cookie = "theme=1; path=/;" : document.cookie = "theme=0; path=/;";
    window.localStorage.setItem("last-lang", htmllang);
    document.cookie = `last-lang=${htmllang}; path=/;`;
    var a = function (t) {
        if ("Enter" == t.key && 0 == d.YN2o.disabled)
            d.YN2o.onclick()
    };
    var b = t => new Promise((K, u) => {
        if ("" != t.innerHTML)
            return K();
        let G = 0,
            Z = setInterval(() => {
                G++;
                "" != t.innerHTML ? (clearInterval(Z),
                    K()) : 100 < G && (clearInterval(Z),
                        u())
            }, 300)
    }),
        f = async (t, K) => {
            await b(t).then(() => {
                [...t.options].some((u, G) => {
                    if (u.value == K)
                        return t.selectedIndex = G,
                            u = new CustomEvent("change"),
                            t.dispatchEvent(u),
                            t.dispatchEvent(u), !0
                })
            })
        };
    /\?expr=/.test(window.location) && (d.eCcW = !0,
        /%7B|%5Cleft/.test(window.location) && (d.v9U9 = !0));
    rb(lang);
}

function xb(a) {
    a = a.replace(/&amp;/g, "&");
    a = a.replace(/\s?&gt;\s?/g, ">");
    a = a.replace(/\s?&lt;\s?/g, "<");
    let b = /\\html(Class|Id)\{[a-zA-Z0-9\-]*\}\{(.*)$/g;
    for (; b.test(a);)
        a = a.replace(b, (f, k, p) => {
            f = -1;
            for (k = 0; k < p.length && ("}" == p[k] ? f++ : "{" == p[k] && f--,
                0 != f); k++)
                ;
            return p.slice(0, k) + p.slice(k + 1)
        });
    return a
}

function Cc() {
    var a = ja.replace(/\\(0[0-9]{2})/g, function (b, f) {
        return exprtexts[lang][parseInt(f, 10) - 1]
    });
    a = a.replace(/\\class/g, "\\htmlClass");
    a = a.replace(/\\cssId/g, "\\htmlId");
    return eval(a)
}
async function rb(a) {
    if (null == inttexts[a] || null == exprtexts[a]) {
        var b = l("L2xhbmdzL2dldF9sYW5nX3RpbWUucGhwP3R5cGU9bGltJmxhbmc9") + a,
            f = await fetch(b);
        if (f.ok)
            b = await f.text(),
                await Ab(b),
                document.cookie = `last-lang=${htmllang}; path=/;`,
                window.localStorage.setItem("last-lang", htmllang);
        else
            throw Error(`server response '${b}' failed`);
    }
    ab = {
        "+": ["::0+::1"],
        "-": ["::0-::1"],
        "*": ["::0\\,::1"],
        "@": ["::0\\cdot ::1"],
        "^": ["::0^{::1}"],
        "/": ["\\frac{::0}{::1}"],
        sin: [exprtexts[a][1], "\\left(::0\\right)"],
        cos: [exprtexts[a][2], "\\left(::0\\right)"],
        tan: [exprtexts[a][3], "\\left(::0\\right)"],
        cot: [exprtexts[a][4], "\\left(::0\\right)"],
        exp: ["e^{::0}"],
        sqrt: ["\\sqrt{::0}"],
        log: [exprtexts[a][0], "\\left(::0\\right)"],
        lg: ["\\lg", "\\left(::0\\right)"],
        abs: ["\\left| ::0\\right|"],
        asin: [exprtexts[a][6], "\\left(::0\\right)"],
        acos: [exprtexts[a][7], "\\left(::0\\right)"],
        atan: [exprtexts[a][5], "\\left(::0\\right)"],
        acot: [exprtexts[a][8], "\\left(::0\\right)"],
        sinh: [exprtexts[a][9], "\\left(::0\\right)"],
        cosh: [exprtexts[a][10], "\\left(::0\\right)"],
        tanh: [exprtexts[a][11], "\\left(::0\\right)"],
        coth: [exprtexts[a][12], "\\left(::0\\right)"],
        sech: [exprtexts[a][13], "\\left(::0\\right)"],
        csch: [exprtexts[a][14], "\\left(::0\\right)"],
        sec: [exprtexts[a][23], "\\left(::0\\right)"],
        csc: [exprtexts[a][24], "\\left(::0\\right)"],
        asinh: [exprtexts[a][15], "\\left(::0\\right)"],
        acosh: [exprtexts[a][16], "\\left(::0\\right)"],
        atanh: [exprtexts[a][17], "\\left(::0\\right)"],
        acoth: [exprtexts[a][18], "\\left(::0\\right)"],
        asech: [exprtexts[a][21], "\\left(::0\\right)"],
        acsch: [exprtexts[a][22], "\\left(::0\\right)"],
        asec: [exprtexts[a][19], "\\left(::0\\right)"],
        acsc: [exprtexts[a][20], "\\left(::0\\right)"],
        logn: ["\\log", "_{::0}", "\\left(::1\\right)"],
        sqrtn: ["\\sqrt[{::0}]{::1}"],
        cbrt: ["\\sqrt[3]{::0}"],
        pow: ["{::0}"],
        pown: ["{::0}^{::1}"]
    };
    b = {
        log: exprtexts[a][0],
        sin: exprtexts[a][1],
        cos: exprtexts[a][2],
        tan: exprtexts[a][3],
        cot: exprtexts[a][4],
        atan: exprtexts[a][5],
        asin: exprtexts[a][6],
        acos: exprtexts[a][7],
        acot: exprtexts[a][8],
        sinh: exprtexts[a][9],
        cosh: exprtexts[a][10],
        tanh: exprtexts[a][11],
        coth: exprtexts[a][12],
        sech: exprtexts[a][13],
        csch: exprtexts[a][14],
        asinh: exprtexts[a][15],
        acosh: exprtexts[a][16],
        atanh: exprtexts[a][17],
        acoth: exprtexts[a][18],
        asec: exprtexts[a][19],
        acsc: exprtexts[a][20],
        asech: exprtexts[a][21],
        acsch: exprtexts[a][22],
        sec: exprtexts[a][23],
        csc: exprtexts[a][24]
    };
    m = "undefined" === typeof newTranslation ? [] : newTranslation[a] || [];
    a = inttexts[a];
    f = {
        fl: "tl"
    };
    bb = {
        details: m[0] || "",
        foundlimit: "\\5c-col cr-g'>\\5kbx'>\\5c-row ltr'>\\7" + a[84] + "}{84}::w\\#\\#\\5ktx kee'>\\[::q\\]\\#\\#",
        initint: "\\5c-col cr-in'><div>\\#\\7" + a[40] + "}{40}\\5kbr'>\\#\\2::y\\]\\#\\5kbr'>\\#\\txt{gray}{" + (m[1] || a[180]) + "}{180}\\5kbr'>\\#\\2::x\\]\\#::p\\#",
        initintno: "\\5c-col cr-in'><div>\\#\\7" + a[40] + "}{40}\\5kbr'>\\#\\2::y\\]\\#\\5kbr'>\\#::p\\#",
        stepsolution: a[41],
        stepsolutioncalc: "\\5c-col cr-st'>\\txt{lightblue}{" + a[41] + "}{41}\\#",
        export: "\\5c-col kexport non-select'>\\txt{export-link}{" + a[92] + "}{92}\\#",
        constraint: "\\5kbr'>\\#\\txt{brown}{" + (m[24] || a[110]) + "}{110}\\2::p\\]\\#",
        intaylor: "\\txt{taylor}{" + (m[67] || a[0]) + "}",
        numconj: "\\7" + (m[6] || a[77]) + "}{77}",
        denomconj: "\\7" + (m[40] || a[80]) + "}{80}",
        by: "\\7" + a[20] + "}{20}",
        calculate4: "\\0" + a[105] + "}{105}\\1",
        calculate1: "\\5c-col cr-bn'>\\5kbx'>\\3" + a[105] + "}{105}\\#\\5c-row keq ltr'>\\5ktx kgth'>\\[::q\\]\\#\\2::p\\]\\#\\#\\#",
        insert: "\\0" + (m[74] || a[3]) + "}{3}\\#\\5ktx kee'>\\[::p\\]\\1",
        calculatelim: "\\5c-col cr-gg'>\\5kbx'>\\3" + a[4] + "}{4}\\2::p\\]\\#\\1",
        constmulti: "\\5c-col cr-gn'>\\5kbx'>\\7" + a[5] + "}{5}\\more{}$" + ((m[35] ? 35 : "") || "") + "$\\3" + (m[36] || a[6]) + "}{6}\\2\\lim{C\\,f\\9::y\\8}=C\\,\\lim{f\\9::y\\8}\\]\\#\\1",
        useformula: "\\0" + (m[53] || a[7]) + "}{7}::p\\1",
        useformulas: "\\0" + (m[54] || a[8]) + "}{8}::p\\1",
        error: ["\\5c-col cr-er'>\\2::q\\]\\#\\txt{red}{" + a[9] + "}{9}\\txt{blue}{" + a[10] + "}{10}\\#", "", "\\5c-col cr-er'>\\2::q\\]\\#\\txt{red}{" + a[59] + "}{59}\\txt{blue}{" + a[10] + "}{10}\\#", "\\5c-col cr-er'>\\2::q\\]\\#\\txt{red}{" + a[96] + "}{96}\\#"],
        table: ["\\0" + (m[21] || a[11]) + "}{11}\\2::y=::x\\]\\#\\7" + (m[22] || a[12]) + "}{12}\\2f\\9::y\\8=::b\\]\\#\\7" + a[13] + "}{13}\\1", "\\0" + (m[14] || a[14]) + "}{14}\\2\\lim{\\6C}}=\\6C}\\]\\#\\1", "\\0" + (m[14] || a[14]) + "}{14}\\2\\lim{\\6C}}=\\6C}\\]\\#\\1", "", "", "\\0" + (m[21] || a[11]) + "}{11}\\2::y=::x\\]\\#\\7" + (m[22] || a[12]) + "}{12}\\2f\\9::y\\8=::b\\]\\#\\7" + a[13] + "}{13}\\5c-row'>\\2\\dfrac{a^{::y}}{{::y}^n}\\to{\\infty}\\]\\#\\7" + (m[12] || a[1]) + "}{1}\\2::y\\to\\infty\\]\\#\\#\\2a>1,\\;n>0\\]\\#\\1", "\\0" + (m[21] || a[11]) + "}{11}\\2::y=::x\\]\\#\\7" + (m[22] || a[12]) + "}{12}\\2f\\9::y\\8=::b\\]\\#\\7" + a[13] + "}{13}\\5khline'>\\#\\5c-row'>\\2\\dfrac{{::y}^n}{a^{::y}}\\to{0}\\]\\#\\7" + (m[12] || a[1]) + "}{1}\\2::y\\to\\infty\\]\\#\\#\\2a>1,\\;n>0\\]\\#\\1", "", "", "\\0" + (m[56] || a[19]) + "}{19}\\2\\lim{0}=0\\]\\#\\1", "\\0" + (m[60] || a[24]) + "}{24}\\7" + (m[11] || a[26]) + "}{26}\\2\\lim_{::y\\to{a}}{f\\9::y\\8}=::b\\]\\#\\7" + (m[61] || a[27]) + "}{27}\\2{::a}^{\\displaystyle\\;\\lim_{::y\\to{a}}{f\\9::y\\8}}\\]\\#\\1", ["\\0" + (m[64] || a[28]) + "}{28}\\more{}$" + ((m[68] ? 68 : "") || "") + "$\\7" + (m[11] || a[29]) + "}{29}\\#\\5ktx kee'>\\[::p1\\]\\#\\5ktx kee'>\\[::p\\]\\#\\5ktx kee'>\\[::w1\\]\\#\\5ktx kee'>\\[::w\\]\\#\\#", "\\5c-col cr-gn'>\\5kbx'>" + (m[11] && "&" == m[10] ? "\\txt{}$" + m[65] + "$" : "\\txt{brown}{" + (m[65] || a[30]) + "}{30}\\2\\Downarrow\\]\\#" + (m[11] ? "\\txt{}$" + m[66] + "$" : "\\7" + a[31] + "}{31}\\2::y\\to{::x}\\]\\#\\7" + a[32] + "}{32}")) + "\\1"]],
        combo: ["\\0" + (m[17] || a[34]) + "}{34}\\2::a\\]\\#\\#\\5ktx kee'>\\[::p\\]\\1", "", ["\\0" + (m[9] || a[35]) + "}{35}\\5c-row'>\\7" + (m[11] || a[20]) + "}{20}\\2::b\\]\\#\\#\\1", "\\0" + (m[19] || a[35]) + "}{35}\\5c-row'>\\2::a\\]\\#\\7" + a[20] + "}{20}\\2::b\\]\\#\\#\\1"], "\\5c-col cr-gn'>\\5kbx'>" + (m[11] && "&" == m[10] ? "\\txt{}$" + m[13] + "$" : "\\txt{green}$" + (m[13] || a[36]) + "${36}\\2\\frac{1}{{::y}^{\\6n}}}\\to{0}\\]\\#\\5c-row'>\\7" + (m[12] || a[1]) + "}{1}\\2\\6n}>0,\\;\\;::y\\to{::x}\\]\\#\\#") + "\\1", "\\0" + (m[20] || a[21]) + "}{21}\\1", "\\0" + (m[30] || a[37]) + "}{37}" + (m[11] ? "" : "\\2::y\\]\\#") + "\\5c-row'>\\7" + (m[31] || a[38]) + "}{38}" + (m[11] ? "" : "\\7\u2014}\\2::a\\]\\#") + "\\#\\5c-row'>\\7" + (m[32] || a[39]) + "}{39}" + (m[11] ? "" : "\\7\u2014}\\2::b\\]\\#") + "\\#\\3" + (m[9] || a[35]) + "}{35}\\5c-row'>\\7" + (m[11] || a[20]) + "}{20}\\2::c\\]\\#\\#\\7" + (m[33] || a[36]) + "}{36}\\2\\frac{1}{{::y}^{\\6n}}}\\to{0}\\]\\#\\5c-row'>\\7" + (m[12] || a[1]) + "}{1}\\2::y\\to{::x}\\]\\#\\#\\1", "\\0" + a[42] + "}{42}\\7" + (m[11] || a[43]) + "}{43}\\1", ["\\0" + a[44] + "}{44}\\5c-row'>\\7" + a[20] + "}{20}\\2::b\\]\\#\\#\\1", "\\0" + a[44] + "}{44}\\2::a\\]\\#\\5c-row'>\\7" + a[20] + "}{20}\\2::b\\]\\#\\#\\1"], "\\0" + (m[23] || a[7]) + "}{7}::p\\1", "\\0" + (m[20] || a[23]) + "}{23}\\1", "\\0" + a[47] + "}{47}" + (m[11] && "&" == m[10] ? "\\more{}$" + (m[15] ? 15 : "") + "$" : "") + "::p\\1", "\\0" + (m[55] || a[16]) + "}{16}::p\\3" + (m[49] || a[73]) + "}{73}\\#\\5ktx kee'>\\[::w\\]\\1", "\\0" + (m[57] || a[48]) + "}{48}::p\\1", "", "\\0" + (m[18] || a[50]) + "}{50}\\2::a\\]\\#\\1", "\\0" + (m[16] || a[21]) + "}{21}\\2::a\\]\\#\\1", "\\0" + (m[63] || a[78]) + "}{78}\\2::a\\]\\#\\1", "\\0" + a[25] + "}{25}\\1", "\\0" + (m[63] || a[78]) + "}{78}\\2::a\\]\\#\\1", "\\0" + (m[23] || a[7]) + "}{7}\\5ktx no-ovrflw'>\\[\\4to-lim-formula-class}{\\lim_{::y\\to{0}}{\\dfrac{a^{::y}-1}{::y}}}=" + b.log + "\\9a\\8\\]\\#" + (m[11] ? "\\txt{}$" + m[41] + "$" : "\\5c-row'>\\7" + a[2] + "}{2}\\2a\\]\\#\\7\u2014}\\7" + a[51] + "}{51}\\#") + "\\1", "\\0" + (m[17] || a[34]) + "}{34}\\1", "\\0" + (m[62] || a[8]) + "}{8}::p\\1", "\\0" + (m[71] || a[79]) + "}{79}\\more{}$" + ((m[72] ? 72 : "") || "") + "$\\1", "\\0" + a[34] + "}{34}\\2::a\\]\\#\\1", "\\0" + (m[37] || a[52]) + "}{52}\\more{}$" + ((m[39] ? 39 : "") || "") + "$" + (m[11] ? "\\txt{}$" + (m[38] || "") + "$" : "\\5c-row'>\\7" + a[1] + "}{1}\\2::y=::x\\]\\#\\#") + "::p\\1"],
        formula: ["", "\\7" + (m[52] || a[53]) + "}{53}", "", "", "", "", "", "", "\\7" + (m[69] || a[55]) + "}{55}", "\\7" + (m[70] || a[46]) + "}{46}", "\\7" + a[45] + "}{45}", "\\7" + a[49] + "}{49}", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", ""],
        change: ["\\0" + a[33] + "}{33}::p\\2::y\\to{::x}\\]\\#\\2\\Downarrow\\]\\#\\2::n\\]\\#\\1", ""],
        fame: ["\\0" + a[47] + "}{47}" + (m[11] && "&" == m[10] ? "\\more{}$" + (m[15] ? 15 : "") + "$" : "") + "\\2\\lim_{::y\\to{::x}}{\\frac{" + b.sin + "\\9::y\\8}{::y}}=1\\]\\#\\#::p\\#", "\\0" + a[15] + "}{15}" + (m[11] && "&" == m[10] ? "\\more{}$" + (m[15] ? 15 : "") + "$" : "") + "\\2\\lim_{::y\\to{\\infty}}{\\91+\\frac{1}{::y}\\8^{::y}}=e\\]\\#\\5c-row'>\\7" + (m[12] || a[2]) + "}{2}\\2\\frac{1}{::y}\\to{0}\\]\\#\\#\\#::p\\#"],
        fame4: "\\0" + a[47] + "}{47}" + (m[11] && "&" == m[10] ? "\\more{}$" + (m[15] ? 15 : "") + "$" : "") + "::p\\3" + a[15] + "}{15}\\2\\lim_{::y\\to{\\infty}}{(1+\\frac{1}{::y})^{::y}}=e\\]\\#\\5c-row'>\\7" + (m[12] || a[2]) + "}{2}\\2\\frac{1}{::y}\\to{0}\\]\\#\\#\\1",
        fametype: ["", "\\2\\lim_{::y\\to{0}}{\\dfrac{" + b.sin + "\\9::y\\8}{::y}}=1\\]\\#", "\\2\\lim_{::y\\to{0}}{\\dfrac{" + b.tan + "\\9::y\\8}{::y}}=1\\]\\#", "\\2\\lim_{::y\\to{0}}{\\dfrac{" + b.asin + "\\9::y\\8}{::y}}=1\\]\\#", "\\2\\lim_{::y\\to{0}}{\\dfrac{" + b.atan + "\\9::y\\8}{::y}}=1\\]\\#", "\\2\\lim_{::y\\to{0}}{\\dfrac{" + b.sinh + "\\9::y\\8}{::y}}=1\\]\\#", "\\2\\lim_{::y\\to{0}}{\\dfrac{" + b.tanh + "\\9::y\\8}{::y}}=1\\]\\#", "\\2\\lim_{::y\\to{0}}{\\dfrac{" + b.asinh + "\\9::y\\8}{::y}}=1\\]\\#", "\\2\\lim_{::y\\to{0}}{\\dfrac{" + b.atanh + "\\9::y\\8}{::y}}=1\\]\\#"],
        conj: "\\5c-col cr-gn'>\\5kbx'>\\7" + a[54] + "}{54}\\more{}$" + ((m[8] ? 8 : "") || "") + "$::p\\1",
        undef: "\\5c-col cr-un'>\\5kbx'>\\7" + (m[2] || "") + "}\\txt{brown}{" + (m[11] || a[56]) + "}{56}\\more{}$" + ((m[4] ? 4 : "") || "") + "$::p\\5kbr'>\\#::w\\3" + (m[5] || "") + "}\\1",
        stepless: "\\5c-col cr-cn'>\\5kbx'>\\txt{brown}{" + a[57] + "}{57}\\7" + (m[67] || a[0]) + "}{0}\\2::y=::a\\]\\#\\1",
        undef_arr: ["\\2\\dfrac{0}{0}\\]\\#", "\\2\\dfrac{\\infty}{\\infty}\\]\\#", "\\20\\cdot\\infty\\]\\#", "\\2\\infty-\\infty\\]\\#", "\\21^{\\infty}\\]\\#", "\\20^0\\]\\#", "\\2{\\infty}^0\\]\\#", "\\2\\nexists\\]\\#", "\\7" + a[58] + "}{58}"],
        hopital: "\\0" + (m[25] || a[60]) + "}{60}\\more{}$" + ((m[26] ? 26 : "") || "") + "$\\2\\lim_{::y\\to{a}}{\\frac{f\\9::y\\8}{g\\9::y\\8}}=\\lim_{::y\\to{a}}{\\frac{f'\\9::y\\8}{g'\\9::y\\8}}\\]\\#\\7" + a[61] + "}{61}\\5c-row'>\\21.\\;\\lim_{::y\\to{a}}{f\\9::y\\8}=\\lim_{::y\\to{a}}{g\\9::y\\8}=0\\]\\#\\7" + a[62] + "}{62}\\2\\infty\\]\\#\\#\\5c-row'>\\22.\\;g'\\9::y\\8\\neq 0\\]\\#\\#\\23.\\;\\exists\\lim_{::y\\to{a}}{\\frac{f'\\9::y\\8}{g'\\9::y\\8}}\\]\\#\\7" + (m[27] || a[2]) + "}{2}\\2a\\in\\{\\R,\\,-\\infty,\\,+\\infty\\}\\]\\#\\5khline'>\\#\\3" + (m[28] || a[63]) + "}{63}\\5ktx no-ovrflw'>\\[f\\9::y\\8=::a\\underset{::y\\to{::x}}{=}::n\\]\\#\\5ktx no-ovrflw'>\\[g\\9::y\\8=::b\\underset{::y\\to{::x}}{=}::n\\]\\#\\3" + (m[29] || a[64]) + "}{64}\\5ktx no-ovrflw pad-ktx'>\\[\\htmlId{subder-::i1}{\\4der-link-right}{f'\\9::y\\8}}=::c\\]\\#\\5ktx no-ovrflw pad-ktx'>\\[\\htmlId{subder-::i2}{\\4der-link-right}{g'\\9::y\\8}}=::d\\]\\#\\5kbr'>\\#\\1",
        restrict: "\\0" + (m[43] || a[65]) + "}{65}\\more{}$" + ((m[42] ? 42 : "") || "") + "$\\7" + (m[46] || a[61]) + "}{61}\\2g\\9::y\\8\\,\\leq\\,f\\9::y\\8\\leq\\,h\\9::y\\8\\]\\#" + (m[11] ? "\\txt{}$" + m[44] + "$" : "\\5c-row'>\\7" + a[66] + "}{66}\\2::y\\in U\\9a,\\,\\varepsilon\\8\\]\\#\\#") + "\\7" + a[83] + "}{83}\\2\\lim_{::y\\to{a}}{g\\9::y\\8}=\\lim_{::y\\to{a}}{h\\9::y\\8}=A\\]\\#" + (m[11] ? "\\7" + m[45] + "}" : "\\2\\Downarrow\\]\\#") + "\\2\\lim_{::y\\to{a}}{f\\9::y\\8}=A\\]\\#\\5khline'>\\#\\3" + (m[47] || a[67]) + "}{67}\\7" + (m[48] || a[68]) + "}{68}\\2::a\\]\\#\\7" + (m[49] || a[73]) + "}{73}\\2::b\\]\\#\\7" + (m[50] || a[70]) + "}{70}\\5ktx no-ovrflw'>\\[\\lim_{::y\\to{::x}}{::n}=\\lim_{::y\\to{::x}}{::c}=::d\\]\\#\\5kbr'>\\#\\7" + (m[51] || "") + "}\\1",
        convert: ["", b.tan + "\\9\\alpha\\8=\\dfrac{" + b.sin + "\\9\\alpha\\8}{" + b.cos + "\\9\\alpha\\8}", b.cot + "\\9\\alpha\\8=\\dfrac{" + b.cos + "\\9\\alpha\\8}{" + b.sin + "\\9\\alpha\\8}", b.sec + "\\9\\alpha\\8=\\dfrac{1}{" + b.cos + "\\9\\alpha\\8}", b.csc + "\\9\\alpha\\8=\\dfrac{1}{" + b.sin + "\\9\\alpha\\8}", b.tanh + "\\9\\alpha\\8=\\dfrac{" + b.sinh + "\\9\\alpha\\8}{" + b.cosh + "\\9\\alpha\\8}", b.coth + "\\9\\alpha\\8=\\dfrac{" + b.cosh + "\\9\\alpha\\8}{" + b.sinh + "\\9\\alpha\\8}", b.sech + "\\9\\alpha\\8=\\dfrac{1}{" + b.cosh + "\\9\\alpha\\8}", b.csch + "\\9\\alpha\\8=\\dfrac{1}{" + b.sinh + "\\9\\alpha\\8}", b.sinh + "\\9\\alpha\\8=\\dfrac{1}{2}\\,\\9e^{\\alpha}-e^{-\\alpha}\\8", b.cosh + "\\9\\alpha\\8=\\dfrac{1}{2}\\,\\9e^{\\alpha}+e^{-\\alpha}\\8"],
        multilimit: "\\5c-col cr-gn'>\\5kbx'>\\7" + a[5] + "}{5}\\more{}$" + ((m[35] ? 35 : "") || "") + "$\\3" + (m[34] || a[71]) + "}{71}\\5ktx no-ovrflw'>\\[\\lim_{::y\\to{::x}}{::a}=\\]\\#\\5ktx no-ovrflw'>\\[=\\lim_{::y\\to{::x}}{::b}\\cdot\\lim_{::y\\to{::x}}{::n}\\]\\#\\1",
        addlimit: "\\5c-col cr-gn'>\\5kbx'>\\7" + a[5] + "}{5}\\more{}$" + ((m[35] ? 35 : "") || "") + "$\\3" + (m[73] || a[72]) + "}{72}\\2\\lim_{::y\\to{::x}}{f\\9::y\\8+g\\9::y\\8}=\\lim_{::y\\to{::x}}{f\\9::y\\8}+\\lim_{::y\\to{::x}}{g\\9::y\\8}\\]\\#\\1",
        powlim: "\\5c-col cr-gn'>\\5kbx'>\\7" + a[5] + "}{5}\\more{}$" + ((m[35] ? 35 : "") || "") + "$\\3" + (m[58] || a[74]) + "}{74}\\2\\lim_{::y\\to{a}}{b^{f\\9::y\\8}}=b^{\\displaystyle\\;\\lim_{::y\\to{a}}{f\\9::y\\8}}\\]\\#\\#\\#",
        links: ["https://" + (void 0 === f[htmllang] ? htmllang : f[htmllang]) + ".wikipedia.org/wiki/", [b.log + "\\9x\\8", a[137]],
        [b.sin + "\\9x\\8", a[138]],
        [b.cos + "\\9x\\8", a[139]],
        [b.tan + "\\9x\\8", a[140]],
        [b.cot + "\\9x\\8", a[141]],
        [b.atan + "\\9x\\8", a[142]],
        [b.asin + "\\9x\\8", a[143]],
        [b.acos + "\\9x\\8", a[144]],
        [b.acot + "\\9x\\8", a[145]],
        [b.sinh + "\\9x\\8", a[146]],
        [b.cosh + "\\9x\\8", a[147]],
        [b.tanh + "\\9x\\8", a[148]],
        [b.coth + "\\9x\\8", a[149]],
        [b.sech + "\\9x\\8", a[150]],
        [b.csch + "\\9x\\8", a[151]],
        [b.asinh + "\\9x\\8", a[152]],
        [b.acosh + "\\9x\\8", a[153]],
        [b.atanh + "\\9x\\8", a[154]],
        [b.acoth + "\\9x\\8", a[155]],
        [b.asec + "\\9x\\8", a[156]],
        [b.acsc + "\\9x\\8", a[157]],
        [b.asech + "\\9x\\8", a[158]],
        [b.acsch + "\\9x\\8", a[159]],
        [b.sec + "\\9x\\8", a[160]],
        [b.csc + "\\9x\\8", a[161]],
        ["\\operatorname{sgn}\\9x\\8", a[162]],
        ["\\6d}x", a[163]],
        ["\\Gamma\\9s,\\,x\\8", a[164]],
        ["\\operatorname{Ei}\\9x\\8", a[165]],
        ["\\operatorname{li}\\9x\\8", a[166]],
        ["\\operatorname{Si}\\9x\\8", a[167]],
        ["\\operatorname{Ci}\\9x\\8", a[168]],
        ["\\operatorname{Shi}\\9x\\8", a[169]],
        ["\\operatorname{Chi}\\9x\\8", a[170]],
        ["\\operatorname{Li_2}\\9x\\8", a[171]],
        ["\\operatorname{S}\\9x\\8", a[172]],
        ["\\operatorname{C}\\9x\\8", a[173]],
        ["\\operatorname{erf}\\9x\\8", a[174]],
        ["\\operatorname{erfi}\\9x\\8", a[175]],
        ["C", a[176]],
        ["\\pi", a[177]],
        ["i", a[178]],
        ["e", a[179]]
        ]
    }
}

function Bb(a, b, f) {
    var k = location.protocol + "//" + location.hostname + "/lim";
    lang != defaultLang && (k += "/" + lang);
    return k += "/#expr=" + encodeURIComponent(a) + "&arg=" + encodeURIComponent(b) + "&to=" + encodeURIComponent(f)
}

function M(a, b, f, k) {
    return ("" == k ? "" : k + "\\,") + "\\lim_{" + b + "\\to{" + f + "}}{" + a + "}"
}

function Dc(a, b, f) {
    var k = location.protocol + "//" + location.hostname + "/der";
    lang != defaultLang && (k += "/" + lang);
    return k += "/#expr=" + encodeURIComponent(a) + "&arg=" + encodeURIComponent(b) + "&funcs=" + encodeURIComponent(f)
}

function Ec() {
    return new Promise(function (a, b) {
        b = Date.now() - Cb;
        b = Math.max(0, 2100 - b);
        0 == b ? a() : setTimeout(() => a(), b)
    })
}

function Fc(a) {
    for (let b = 0; b < cb.length; b++)
        a = a.replace(cb[b][0], cb[b][1]);
    return a
}
async function sb(a) {
    if ("" == a) return false;
    db = [];
    var b = Cc(),
        f = (H, Q = "") => `<div class='ktx${Q}'>\\[${H}\\]</div>`,
        k = 0,
        h = "",
        x = [];
    a = [];
    var S = 100,
        E = [],
        D = document.createElement("div"),
        t = new StepMgr(D),
        K = !1,
        u = "",
        G = "",
        taylor1 = "",
        taylor2 = "",
        taylor3 = "";
    d.math_canvas.innerHTML = "";
    var ea = [];
    for (h = 0; h < b.length; h++) {
        var c = b[h]; -
            15 != c[0] && void 0 !== c[1] && (c[1][2] = (c[1][2] + "").replace(/dfrac/g, "frac"));
        void 0 !== c[2] && Number.isInteger(c[2]) && (c[2] += "");
        switch (c[0]) {
            case -2:
                var O = ["initint"];
                "" === c[3] && (O = ["initintno"]);
                var z = "";
                "" !== c[4] && (z = t.getHTML({
                    path: ["constraint"],
                    "ex-params": {
                        "::p": c[4]
                    }
                }));
                t.addStep({
                    path: O,
                    params: c.slice(1),
                    "ex-params": {
                        "::p": z,
                        "::n": ""
                    }
                });
                t.addStep({
                    path: ["stepsolutioncalc"]
                });
                break;
            case -10:
                x = c.slice(1);
                break;
            case -15:
                E = c[1];
                break;
            case -16:
                taylor1 = c[1];
                taylor2 = c[2];
                taylor3 = c[3];
                break;
            case "-1-":
                u = M(c[1], c[2], (c[3] + "").replace(/dfrac/g, "frac"), "");
                O = 0 == c[4] ? "" : "\\;\\htmlId{branch-from-" + c[4] + "}{\\htmlClass{red}{\\left(" + c[4] + "\\right)}}";
                G = u;
                k++;
                ea.push(c[4]);
                t.addStep({
                    path: ["calculate1"],
                    "ex-params": {
                        "::p": O,
                        "::q": u
                    }
                });
                break;
            case "0-":
                var F = "";
                [0, 1, 2, 3, 5].includes(c[1][0]) && 0 < ea.length && (F = ea.pop());
                O = ["table", c[1][0]];
                z = G + "=" + c[2];
                var J = false;
                if ([0, 1, 2, 5, 6, 9, 10, 11].includes(c[1][0])) J = true;
                if ([0, 1, 5, 6].includes(c[1][0]))
                    z = M(c[1][3], c[1][1], c[1][2], c[3]) + "=" + c[2];
                else if (10 == c[1][0])
                    z = M(c[1][5], c[1][1], c[1][2], c[3]) + "=" + c[2];
                else if (11 == c[1][0]) {
                    c[1][3][2] = c[1][3][2].replace(/dfrac/g, "frac");
                    c[1][4][2] = c[1][4][2].replace(/dfrac/g, "frac");
                    c[6] = (c[6] + "").replace(/dfrac/g, "frac");
                    z = M(c[2], c[1][3][1], c[1][3][2], "") + "=";
                    var fa = "=" + M(c[1][3][3], c[1][3][1], c[1][3][2], "") + "=" + (0 == c[1][3][0] ? c[1][3][4] : "{\\color{grey}{" + M(c[1][3][3], c[1][3][1], c[1][3][2], "") + "}}");
                    let H = M(c[2], c[1][4][1], c[1][4][2], "") + "=",
                        Q = "=" + M(c[1][4][3], c[1][4][1], c[1][4][2], "") + "=" + (0 == c[1][4][0] ? c[1][4][4] : "{\\color{grey}{" + M(c[1][4][3], c[1][4][1], c[1][4][2], "") + "}}");
                    O = ["table", c[1][0], 1];
                    t.addStep({
                        path: ["table", c[1][0], 0],
                        "ex-params": {
                            "::p1": z,
                            "::p": fa,
                            "::w1": H,
                            "::w": Q
                        }
                    });
                    z = "\\nexists" + M(c[2], c[1][1], c[1][2], "")
                }
                J && t.addStep({
                    path: O,
                    params: c[1].slice(1),
                    "ex-params": {
                        "::q": z
                    }
                });
                11 != c[1][0] && (z = c[2]);
                O = "" === F || "0" == F ? "" : "<div class='ktx'>\\[\\;\\htmlId{branch-" + F + "}{\\htmlClass{red}{\\left(" + F + "\\right)}}\\]</div>";
                t.addStep({
                    path: ["foundlimit"],
                    "ex-params": {
                        "::w": O,
                        "::q": z
                    }
                });
                break;
            case "1-":
                O = ["fame", 1];
                J = "";
                z = c[2];
                0 == c[1][0] ? (O = ["fame", 0],
                    J = /^\\?[a-z]*$/.test(c[1][3]) ? "=" : "\\underset{" + c[1][3] + "\\to{0}}{=}") : (J = /^\\?[a-z]*$/.test(c[1][4]) ? "=" : "\\underset{\\scriptsize\\begin{gathered}" + c[1][3] + "\\to{0}" + ("" !== c[1][9] ? "\\\\\\\\" + c[1][8] + "\\to{" + c[1][9] + "}" : "") + "\\end{gathered}}{=}",
                        z = 1 == c[1][0] ? M(c[2], c[1][1], c[1][2], c[3]) : c[3] + "\\," + c[2]);
                J = J.replace(/dfrac/g, "frac");
                z = J + z;
                z = 120 > (G + z).length ? "<div class='ktx keq'>\\[" + G + z + "\\]</div>" : "<div class='ktx kee'>\\[" + G + "=\\]</div><div class='ktx keq'>\\[" + z + "\\]</div>";
                t.addStep({
                    path: O,
                    params: c[1].slice(1),
                    "ex-params": {
                        "::p": z
                    }
                });
                G = M(c[2], c[1][1], c[1][2], c[3]);
                break;
            case "2-":
                O = [];
                J = {};
                if (0 == c[1][0]) {
                    u = "";
                    for (F = 0; F < c[2].length; F++)
                        u = u + M(c[2][F], c[1][1], c[1][2], "") + "+";
                    u = u.slice(0, -1);
                    "" != c[3] && (u = c[3] + "\\,\\left(" + u + "\\right)");
                    O = ["addlimit"];
                    J["::q"] = u
                } else if (1 == c[1][0]) {
                    u = "";
                    for (F = 0; F < c[4].length; F++)
                        u = u + M(c[4][F], c[1][1], c[1][2], "") + "+";
                    u = u.slice(0, -1);
                    "" != c[3] && (u = c[3] + "\\,\\left(" + u + "\\right)");
                    O = ["insert"];
                    J["::p"] = u + "=";
                    J["::q"] = "=" + c[5] + "=" + c[2]
                }
                t.addStep({
                    path: O,
                    params: c[1].slice(1),
                    "ex-params": J
                });
                G = u;
                break;
            case "3-":
                u = M(c[2], c[1][1], c[1][2], c[3]);
                t.addStep({
                    path: ["constmulti"],
                    params: c[1].slice(1),
                    "ex-params": {
                        "::q": u
                    }
                });
                G = u;
                break;
            case "4-":
                O = ["calculate4"];
                z = [];
                J = {};
                u = M(c[2], c[1][1], c[1][2], c[3]);
                3 == c[1][0] && (G = M(c[1][3], c[1][1], c[1][2], c[3]));
                if (-1 !== [1, 3].indexOf(c[1][0]))
                    break;
                if (2 == c[1][0]) {
                    O = ["fame4"];
                    G = "";
                    for (F = 0; F < c[1][3].length; F++)
                        G += t.getHTML({
                            path: ["fametype", c[1][3][F]]
                        });
                    z = c[1].slice(1);
                    J["::p"] = G
                }
                J["::q"] = u;
                t.addStep({
                    path: O,
                    params: z,
                    "ex-params": J
                });
                G = u;
                break;
            case "5-":
                u = M(c[2], c[1][3], c[1][4], c[3]);
                z = "";
                for (F = 0; F < c[4].length; F += 2)
                    z += c[4].slice(F, F + 2).join("&") + "\\\\";
                z = z.slice(0, -2);
                z = "\\begin{gathered}" + z + "\\end{gathered}";
                t.addStep({
                    path: ["change", 0],
                    params: c[1].slice(1),
                    "ex-params": {
                        "::p": f(z),
                        "::q": u
                    }
                });
                G = u;
                break;
            case "6-":
                z = u = M(c[2], c[1][1], c[1][2], c[3]);
                J = {};
                O = ["combo", c[1][0]];
                if (2 == c[1][0] || 7 == c[1][0])
                    O = "" == c[1][3] ? ["combo", c[1][0], 0] : ["combo", c[1][0], 1];
                else if (0 == c[1][0])
                    z = M(c[1][4], c[1][1], c[1][2], c[3]),
                        J["::p"] = z + "=",
                        J["::q"] = "=" + u;
                else if (3 == c[1][0])
                    z = u,
                        u = M(c[1][3], c[1][1], c[1][2], c[3]),
                        z = z + "=" + u;
                else if (8 == c[1][0])
                    F = t.getHTML({
                        path: ["formula", c[1][4]]
                    }),
                        F += f(c[1][3], " gray"),
                        J["::p"] = F;
                else if (10 == c[1][0]) {
                    fa = "";
                    for (F = 0; F < c[1][3].length; F++)
                        fa += t.getHTML({
                            path: ["fametype", c[1][3][F]]
                        });
                    J["::p"] = fa
                } else if (11 == c[1][0])
                    z = "<div class='ktx'>\\[" + c[1].slice(3).join("\\]</div><div class='ktx'>\\[") + "\\]</div>",
                        J["::p"] = z,
                        J["::w"] = G + "=",
                        z = "=" + u;
                else if (12 == c[1][0]) {
                    fa = "";
                    for (F = 3; F < c[1].length; F += 2)
                        "1" != c[1][F + 1] && (fa += "<div class='c-row'>" + f(c[1][F]) + t.getHTML({
                            path: ["by"]
                        }) + f(c[1][F + 1]) + "</div>");
                    J["::p"] = fa
                } else
                    21 == c[1][0] ? (F = "<div class='ktx gray'>\\[" + c[1].slice(3).join("\\]</div><div class='ktx gray'>\\[") + "\\]</div>",
                        J["::p"] = F) : 24 == c[1][0] && (F = "<div class='khline'></div><div class='ktx'>\\[" + c[1][3].join("\\]</div><div class='khline'></div><div class='ktx'>\\[") + "\\]</div>",
                            J["::p"] = F);
                if ("2" == c[1][0] && 1 == c[1][4])
                    break;
                void 0 === J["::q"] && (J["::q"] = z);
                t.addStep({
                    path: O,
                    params: c[1].slice(1),
                    "ex-params": J
                });
                G = u;
                break;
            case "7-":
                J = {};
                u = M(c[2], c[1][1], c[1][2], c[3]);
                a.push([ka(c[1][3]), ka(c[1][1]), S, ""]);
                J["::i1"] = S;
                S++;
                a.push([ka(c[1][4]), ka(c[1][1]), S, ""]);
                J["::i2"] = S;
                S++;
                J["::q"] = u;
                t.addStep({
                    path: ["hopital"],
                    params: c[1].slice(1),
                    "ex-params": J
                });
                G = u;
                break;
            case "8-":
                u = M(c[1][7], c[1][1], c[1][2], c[3]);
                z = "";
                1 !== c[1][4] && (z += t.getHTML({
                    path: ["numconj"]
                }) + f(c[1][4]));
                1 !== c[1][6] && (z += t.getHTML({
                    path: ["denomconj"]
                }) + f(c[1][6]));
                0 == c[1][0] && t.addStep({
                    path: ["conj"],
                    params: c[1].slice(1),
                    "ex-params": {
                        "::p": z,
                        "::q": u
                    }
                });
                G = u;
                break;
            case "9-":
                O = ["useformulas"];
                u = M(c[2], c[1][1], c[1][2], c[3]);
                1 == c[4].length && (O = ["useformula"]);
                z = "";
                for (F = 0; F < c[4].length; F++)
                    z += f(t.getHTML({
                        path: ["convert", c[4][F]]
                    }), " gray");
                t.addStep({
                    path: O,
                    params: c[1].slice(1),
                    "ex-params": {
                        "::p": z,
                        "::q": u
                    }
                });
                G = u;
                break;
            case "10-":
                u = c[2];
                "" !== c[3] && (u = c[3] + "\\cdot " + c[2]);
                t.addStep({
                    path: ["restrict"],
                    params: c[1].slice(1),
                    "ex-params": {
                        "::q": G + "=" + u
                    }
                });
                G = u;
                break;
            case "11-":
                u = M(c[2], c[1][1], c[1][2], c[3]);
                t.addStep({
                    path: ["multilimit"],
                    params: c[1].slice(1),
                    "ex-params": {
                        "::q": u
                    }
                });
                G = u;
                break;
            case "12-":
                u = M(c[2], c[1][1], c[1][2], c[3]);
                t.addStep({
                    path: ["powlim"],
                    params: c[1].slice(1),
                    "ex-params": {
                        "::q": u
                    }
                });
                G = u;
                break;
            case "13-":
                z = M(c[1][3], c[1][1], c[1][2], "");
                u = c[1][3];
                z = z + "=" + c[2];
                u = u.replace(/\\htmlClass{to\-lim\-class}|\\htmlId{to\-lim\-\d+}/g, "");
                t.addStep({
                    path: ["calculatelim"],
                    "ex-params": {
                        "::p": u,
                        "::q": z
                    }
                });
                u = M(c[1][4], c[1][1], c[1][2], c[3]);
                t.addStep({
                    path: ["calculate4"],
                    "ex-params": {
                        "::q": u
                    }
                });
                G = u;
                break;
            case "14-":
                u = M(c[2], c[1][1], c[1][2], c[3]);
                z = M(c[1][3], c[1][1], c[1][2], c[3]);
                O = f(z + "=", " gray") + f("=" + u, " gray");
                c = t.getHTML({
                    path: ["undef_arr", c[1][0]]
                });
                t.addStep({
                    path: ["undef"],
                    "ex-params": {
                        "::p": c,
                        "::w": O,
                        "::q": G
                    }
                });
                break;
            case "15-":
                u = M(c[1][4], c[1][1], c[1][2], "");
                t.addStep({
                    path: ["stepless"],
                    params: c[1].slice(1),
                    "ex-params": {
                        "::q": u + "=" + c[2]
                    }
                });
                break;
            case -3:
                z = c[1].replace(/to\{\\dfrac/, "to{\\frac"),
                    t.addStep({
                        path: ["error", c[2]],
                        "ex-params": {
                            "::q": z
                        }
                    }),
                    K = !0
        }
    }
    if (!K) {
        f = t.getHTML({
            path: ["links", 0]
        });
        b = document.createElement("div");
        b.classList.add("step");
        p = [];
        for (h = 0; h < x.length; h++)
            S = t.getHTML({
                path: ["links", x[h], 1]
            }),
                S = encodeURI(S),
                ea = t.getHTML({
                    path: ["links", x[h], 0]
                }),
                "" !== S && p.push(`<a href="${f + S}" target="_blank" class=>\\(${ea}\\)</a>`);
        0 != p.length && (h = `<div class="math-links notranslate">${p.join("")}</div>`,
            b.innerHTML = h,
            D.appendChild(b));
        "" !== taylor3 && (x = document.createElement("div"),
            x.classList.add("step"),
            h = "<div class='math-taylor non-select'><div><div class='math-taylor-summary'>" + t.getHTML({
                path: ["intaylor"]
            }) + "&nbsp;&nbsp;\\(\\htmlClass{notranslate}{" + taylor1 + "=" + taylor2 + "}\\)</div></div><div class='math-taylor-value ktx kee hide'>\\[" + taylor3 + "\\]</div></div>",
            x.innerHTML = h,
            D.appendChild(x))
    }
    var ta = function () {
        let H = "",
            Q = "",
            ba = document.createElement("span"),
            ma = document.createElement("span");
        ba.classList.add("ktx-latex-copy");
        ma.classList.add("ktx-expr-copy");
        d.math_canvas.append(H);
        d.math_canvas.append(Q);
        let q = null;
        return function (n) {
            "click" == n.type && this.classList.contains("ktx-copy") && (null != q && q.classList.remove("ktx-selected"),
                this.classList.add("ktx-selected"),
                q = this,
                this.appendChild(ba),
                this.appendChild(ma),
                H = this.dataset.tex,
                Q = this.dataset.expr,
                ba.title = this.dataset.tex,
                ma.title = this.dataset.expr);
            if (!(this.classList.contains("ktx-checked") || this.parentNode.parentNode.classList.contains("kmethod") || (this.classList.add("ktx-checked"),
                n = this.dataset.tex,
                null == n || 4 > n.length || n.includes("\\htmlId") || n.includes("hline")))) {
                n = xb(n);
                var v = ka(n).replace(/!/g, " | ").replace(/~/g, " & ");
                this.dataset.tex = n;
                this.dataset.expr = v;
                this.classList.add("ktx-copy");
            }
        }
    }();
    [...D.getElementsByClassName("ktx")].forEach(H => {
        H.dataset.tex = H.innerHTML.slice(2, -2);
        H.classList.add("notranslate");
    });
    var eb = function (H) {
        if (H = this.querySelector(".txt")) {
            var Q = H.innerHTML;
            /^\d+$/.test(Q) && (Q = parseInt(Q, 10),
                Q = m[Q],
                Q = zb(Q));
            H.innerHTML = Q.replace(/\\\(([^\s].*?)\\\)/g, "\\( \\htmlClass{notranslate}{$1}\\)");
            ra(this);
            H.classList.remove("notranslate")
        }
    };
    [...D.getElementsByClassName("more")].forEach(H => {
        H.addEventListener("click", eb, {
            once: !0
        })
    });
    ra(D, {
        ignoredTags: ["details"]
    });
    d.math_canvas.innerHTML = "";
    d.calculation_scale.style.fontSize = "100%";
    Hc(ya);
    d.math_canvas.appendChild(D);
    fb && (fb = !1, K || await Ec())
    h = r(l("I2Jvb2ttYXJrLWNvbnRhaW5lcg=="));
    null != h && h.classList.add("hide");
    d.math_canvas_container.classList.remove("hide");
    if (0 != k) {
        var ha = r("#hint-links");
        null != za ? clearTimeout(za) : null != ha && (ha.classList.remove("hide"),
            za = setTimeout(function () {
                null != ha && ha.classList.add("hidden")
            }, 4E3))
    }
    var ua = !1;
    !1 === Ga ? h = d.math_canvas_container.getBoundingClientRect().top + window.scrollY : (E = r(Ga),
        null != E ? (h = E.getBoundingClientRect().top - document.documentElement.clientHeight / 2 + window.scrollY,
            ua = E.getBoundingClientRect().left - document.documentElement.clientWidth / 2 + 150) : h = d.math_canvas_container.getBoundingClientRect().top + window.scrollY);
}

const l = window.atob;
var d = {
    GMcM: r("#display-output-mathjax"),
    UNKe: r("#display-output-outset"),
    calculation_scale: r("#calculation-scale"),
    math_canvas: r("#math-canvas"),
    math_canvas_container: r("#math-canvas-container")
},
    ya = 100,
    ja = [],
    za, Ua = !1,
    Fa = "xnthyzabcdfgjklopqrsuvw".split(""),
    Ta = "",
    pb = [null, null, null, null, null, null],
    Sa = null,
    Ra = null;

window.scaleCanvas = a => {
    ya = a;
    d.calculation_scale.style.fontSize = parseInt(.9 * a, 10) + "%";
    ya = a;
    window.localStorage.setItem("scale", ya + "");
    var b = [50, 75, 100, 125, 150];
    r("#s" + a).classList.add("allscales-select");
    for (var f = 0; f < b.length; f++)
        b[f] != a && r("#s" + b[f]).classList.remove("allscales-select")
};
const Hc = window.scaleCanvas;

var Xa = null,
    fb = !0,
    Ba = !1,
    sa = "#",
    Ja = "",
    Aa = "#",
    Ka = "",
    hb = [],
    Db = [],
    ca = "#",
    La = "",
    Qa = !1,
    tb = !0,
    Ga = !1,
    Ha = [],
    Ya = {},
    $a = {},
    Za = {},
    bb = {},
    m = [],
    db = [],
    ab = {};

var Cb = null,
    cb = [
        [/\\0/g, "<div class='c-col cr-gn'><div class='kbx'>\\txt{green}{"],
        [/\\1/g, "</div><div class='ktx keq'>\\[::q\\]</div></div>"],
        [/\\2/g, "<div class='ktx'>\\["],
        [/\\3/g, "\\txt{green}{"],
        [/\\4/g, "\\htmlClass{"],
        [/\\5/g, "<div class='"],
        [/\\6/g, "\\mathrm{"],
        [/\\7/g, "\\txt{}{"],
        [/\\8/g, "\\right)"],
        [/\\9/g, "\\left("],
        [/\\#/g, "</div>"]
    ];

class Filler {
    constructor() { }
    static get(a) {
        let b = bb,
            f = translateList[lang];
        for (let p = 0; p < a.length; p++) {
            b = b[a[p]],
                void 0 !== f && (f = f[a[p]]);
        }
        if ("string" !== typeof b)
            return b;
        let k = 0;
        b = Fc(b);
        b = b.replace(/\\more{(.*?)}\$(.*?)\$/sg, function (p, h, x) {
            if ("" === x || /^\d+$/.test(x) && db.includes(x))
                return "";
            /^\d+$/.test(x) && db.push(x);
            /^\d+$/.test(x) && /::/.test(m[x]) && (x = m[x],
                x = zb(x));
            x = x.replace(/\\\(([^\s].*?)\\\)/g, "\\( \\htmlClass{notranslate}{$1}\\)");
            return `<details class="more ${h}"><summary>${bb.details}</summary><div class="txt notranslate">${x}</div></details>`
        });
        a = function (p, h, x) {
            if ("&" === x || "" === x)
                return "";
            p = /^[:\-\u2014.]$/.test(x);
            void 0 === f || p || void 0 !== f[k] && (x = f[k]);
            p || k++;
            x = x.replace(/\\\(([^\s].*?)\\\)/g, "\\( \\htmlClass{notranslate}{$1}\\)");
            return `<div class="txt ${h}">${x}</div>`
        }
        b = b.replace(/\\txt{([^}]*?)}\$([^$]*?)\$({[0-9]+})?/sg, a);
        b = b.replace(/\\txt{([^}]*?)}{([^}]*?)}({[0-9]+})?/sg, a);
        return b
    }
    static fill(a, b) {
        const f = [/::y/g, /::x/g, /::a/g, /::b/g, /::n/g, /::c/g, /::d/g, /::f/g, /::g/g, /::h/g, /::i/g, /::j/g, /::k/g, /::l/g];
        b.forEach((k, p) => {
            a = a.replace(f[p], k)
        });
        return a
    }
    static fillExtra(a, b) {
        Object.keys(b).map(f => {
            let k = b[f];
            void 0 !== k && (a = a.replace(new RegExp(f, "g"), k))
        });
        return a
    }
    static fillRegex(a, b) {
        for (let f = 0; f < b.length; f++) {
            let k = b[f];
            a = a.replace(k[0], k[1])
        }
        return a
    }
}

class StepMgr {
    constructor(a) {
        this.content = a;
        this.patterns = new Filler
    }
    addStep(a) {
        a = this.getHTML(a);
        let b = document.createElement("div");
        b.classList.add("step");
        b.innerHTML = a;
        this.content.appendChild(b)
    }
    addRawStep(a) {
        let b = document.createElement("div");
        b.classList.add("step");
        b.innerHTML = a;
        this.content.appendChild(b)
    }
    getHTML(a) {
        let b = a.params || [],
            f = a["ex-params"] || {},
            k = a.regexps || [];
        a = Filler.get(a.path);
        a = Filler.fillExtra(a, f);
        a = Filler.fillRegex(a, k);
        return a = Filler.fill(a, b)
    }
}

if ("" !== window.location.hash) {
    ja = decodeURIComponent(window.location.hash).slice(1);
    //window.location = window.location.origin + window.location.pathname + "#";
}

new Promise(async _ => {
    while ('undefined' === typeof renderMathInElement)
        await new Promise(resolve => setTimeout(resolve, 25));
    rb('cn');
    sb(ja);
});