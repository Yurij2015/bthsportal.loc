/* Copyright (c) 2008-2018, Quantcast Corp. */
/* Version: 4c19192-20180628134937 */
window.__qc = function (d) {
    if (d.__qc) return d.__qc;
    var ta = "a ce cm dst enc fpa fpan je ns ogl rf tzo sr".split(" "), N,
        Ya = "3097c37ec2c2 9591ee0951f 66322e4c24 497b48442447 8e5fbdcb69 b1cb39936ef 2c9fb934d88".split(" "),
        Za = ["9591ee0951f"], x = d.document, B = d.navigator,
        Z = "4dcfa7079941 127fdf7967f31 588ab9292a3f 32f92b0727e5 22f9aa38dfd3 a4abfe8f3e04 18b66bc1325c 958e70ea2f28 bdbf0cb4bbb 65118a0d557 40a1d9db1864 18ae3d985046 3b26460f55d".split(" "),
        ua = !1, va = !1, aa = 0, ba = [], $a = [], O = [], u = [], G = {}, P = 0, C = null, ca =
            {}, w = {}, wa = null, t, l, n, H, xa = !1, D = null, da = [].slice, ya, ea, Q, f, A, fa, za, Aa, ga, Ba, I, ha,
        E, R, Ca, ia, ja, Da, Ea, J, Fa, Ga, Ha, Ia, Ja, Ka, La, ka, la, ma, S, p, Ma, z, Na, T, Oa, Pa, na, Qa, Ra, K,
        y, Sa, L, Ta, U, Ua, Va, V, Wa, oa, pa, Xa, qa, F, W, X, M, ra, sa, Y;
    (function () {
        var a;
        a = x.createElement("script");
        N = "async" in a ? 1 : a.readyState ? 2 : 3
    })();
    var v = function (a) {
        try {
            return {
                init: R, hash: E, push: Ca, rules: Ua, hasRules: V, defaults: Xa, __qc: function () {
                    return !0
                }
            }[a].apply(null, da.call(arguments, 1))
        } catch (b) {
            return !1
        }
    };
    v.evts = 0;
    v.v = 2;
    v.SD = Z;
    v.qpixelsent = [];
    U = function (a) {
        var b = a ? a.length || 0 : 0, c;
        for (c = 0; c < b; c++) if (!a[c]) return !1;
        return !0
    };
    pa = function (a) {
        (a = a || d._qacct) && (K(u, a) || u.push(a))
    };
    K = function (a, b) {
        var c = a.length, e;
        for (e = 0; e < c; e++) if (a[e] === b) return !0;
        return !1
    };
    L = function (a) {
        return {}.toString.call(a).match(/\s([a-zA-Z]+)/)[1].toLowerCase()
    };
    Ta = function (a) {
        var b, c;
        b = L(a);
        if ("array" === b) return a.slice(0);
        if ("object" === b) {
            b = {};
            for (c in a) a.hasOwnProperty(c) && (b[c] = a[c]);
            return b
        }
        return "string" === b ? "" + a : a
    };
    Ca = function (a, b) {
        p(a, b)
    };
    V = function (a) {
        return K(O,
            a)
    };
    Xa = function (a, b) {
        var c;
        a && ((c = ca[a]) && (b = M(b, c)), b.qacct && delete b.qacct, ca[a] = b)
    };
    qa = function (a) {
        var b, c;
        if (f(a)) for (b in a) if ("string" == typeof a[b]) {
            b = a.event || "load";
            c = a.media || "webpage";
            "rule" !== b && "load" !== b || "webpage" !== c && "ad" !== c ? p(a) : (c = a.qacct || d._qacct, a.qacct = c, b = (b = w[c]) ? M(b, a) : a, w[c] = b);
            pa(a.qacct);
            break
        } else "object" == typeof a[b] && null != a[b] && qa(a[b])
    };
    M = function (a, b) {
        var c = {};
        c.qacct = a.qacct || b.qacct;
        c.event = "load" === a.event || "load" === b.event ? "load" : a.event && b.event ? a.event || b.event :
            null;
        c.media = null;
        c.media = "webpage" === a.media || "webpage" === b.media ? "webpage" : "ad" === a.media || "ad" === b.media ? "ad" : a.media || b.media;
        na(c, a, b);
        na(c, b, a);
        c.event || delete c.event;
        c.media || delete c.media;
        return c
    };
    na = function (a, b, c) {
        var e, d, k, f, r, m;
        for (e in b) b.hasOwnProperty(e) && !a.hasOwnProperty(e) && (d = b[e], k = c[e], f = "", r = !!d && "string" == typeof d, m = !!k && "string" == typeof k, r && (f = d), r && m && (f += ","), m && (f += k), a[e] = f)
    };
    F = function () {
        var a = [], b, c;
        if (!(0 < P)) {
            Sa();
            for (b in w) w.hasOwnProperty(b) && w[b] && (c = w[b], a.push(c),
                delete w[b]);
            1 == a.length && p(a[0]);
            1 < a.length && p(a)
        }
    };
    W = function () {
        var a = [], b, c, e;
        e = u.slice(0);
        for (b = 0; b < e.length; b++) c = e[b], V(c) || a.push(c);
        if (0 === a.length) F(); else for (b = 0; b < a.length; b++) c = a[b], O.push(c), Qa(c)
    };
    Ra = function (a, b, c, e) {
        var h;
        a = d.location.protocol + "//" + a;
        C = C || x.scripts[0];
        h = x.createElement("script");
        if (1 === N) h.src = a, h.async = !0, h.onload = b, c && (h.onerror = c), C.parentNode.insertBefore(h, C); else if (2 === N) {
            var k = !1;
            h.onload = h.onreadystatechange = function () {
                k || "loaded" != h.readyState && "complete" !=
                h.readyState || (k = !0, h.onreadystatechange = null, b())
            };
            h.src = a;
            C.parentNode.insertBefore(h, C)
        } else e && e()
    };
    Qa = function (a) {
        P++;
        Ra("rules.quantcount.com/rules-" + a + ".js", function () {
            G[a] = 2 === N ? 2 : 0;
            X()
        }, function () {
            G[a] = 1;
            X()
        }, function () {
            G[a] = 4;
            X()
        })
    };
    X = function () {
        P -= 0 < P ? 1 : 0;
        F()
    };
    Ua = function () {
        var a = !0, b, c, e;
        if (arguments.length) {
            e = function (b) {
                a ? qa(b) : p(b, !0)
            };
            for (b = 0; b < arguments.length; b++) c = da.call(arguments[b], 0), c.splice(1, 0, e), Va.apply(null, c);
            a = !1;
            ua && F()
        }
    };
    Va = function (a, b) {
        var c = [], e = [], d = b || p, k, f, r,
            m, q;
        if ((k = da.call(arguments, 2)) && k.length) {
            f = k[0] || U;
            r = k[1];
            m = k[2];
            k = m.length;
            for (q = 0; q < k; q++) c.push(!1), e.push(null);
            c = {p: a, f: c, r: f, c: m, a: r, v: e};
            V(a) || O.push(a);
            $a.push(c);
            Wa(c, d)
        } else O.push(a), G[a] = 6
    };
    Wa = function (a, b) {
        var c = a ? a.c ? a.c.length : 0 : 0, e;
        for (e = 0; e < c; e++) (function (c) {
            var e, d;
            try {
                e = a.c[c][0], d = a.c[c].slice(1), d.splice(0, 0, function (e) {
                    a.f[c] = !0;
                    a.v[c] = e;
                    oa(a, b)
                }), e.apply(null, d)
            } catch (r) {
                a.f[c] = !0, a.v[c] = !1, oa(a, b)
            }
        })(e)
    };
    oa = function (a, b) {
        var c = a.a, e = a.v, d = a.r || U, f, l, r, m, q, g;
        (f = U(a.f)) &&
        (f = f && d(e));
        if (f) for (e = 0; e < c.length; e++) try {
            l = c[e][0];
            r = 1 < c[e].length ? c[e].slice(1) : [];
            r = r.concat(a.v);
            m = l.apply(null, r);
            q = {qacct: a.p, event: "rule"};
            for (g in m) m.hasOwnProperty(g) && "qacct" !== g && (q[g] = m[g]);
            b(q)
        } catch (ab) {
        }
    };
    ya = function () {
        return ea(0) !== ea(6) ? 1 : 0
    };
    ea = function (a) {
        a = new Date(2E3, a, 1, 0, 0, 0, 0);
        var b = a.toGMTString(), b = new Date(b.substring(0, b.lastIndexOf(" ") - 1));
        return a - b
    };
    Q = function (a) {
        return a.replace(/\./g, "%2E").replace(/,/g, "%2C")
    };
    A = "function" === typeof encodeURIComponent ? encodeURIComponent :
        Q;
    f = function (a) {
        return "undefined" != typeof a && null != a
    };
    fa = function () {
        return Math.round(2147483647 * Math.random())
    };
    za = function (a) {
        var b = "", c = x.cookie, e;
        if (!c) return b;
        e = c.indexOf(a + "=");
        a = e + a.length + 1;
        -1 < e && (b = c.indexOf(";", a), 0 > b && (b = c.length), b = c.substring(a, b));
        return b
    };
    Da = function (a) {
        return "P0-" + fa() + "-" + a.getTime()
    };
    ja = function (a, b, c) {
        return ["__qca=", a, "; expires=", b.toGMTString(), "; path=/; domain=", c].join("")
    };
    ia = function () {
        var a = ["", ""], b = I(), c, e;
        if (1 === aa) return a[0] = ";fpan=u;fpa=", a;
        c = E(b);
        for (e = 0; e < Z.length; e++) if (Z[e] === c) return a[0] = ";fpan=u;fpa=", a;
        c = new Date;
        e = za("__qca");
        0 < e.length || D ? (0 === e.length && (e = D, a[1] = ja(D, new Date(c.getTime() + 338688E5), b)), a[0] = ";fpan=0;fpa=" + e) : (D = Da(c), a[1] = ja(D, new Date(c.getTime() + 338688E5), b), a[0] = ";fpan=1;fpa=" + D);
        return a
    };
    Aa = function () {
        var a = ia()[1];
        a && (x.cookie = a)
    };
    ga = function (a) {
        x.cookie = a + "=; expires=Thu, 01 Jan 1970 00:00:01 GMT; path=/; domain=" + I()
    };
    I = function () {
        var a, b, c, e;
        a = x.domain;
        "www." === a.substring(0, 4) && (a = a.substring(4, a.length));
        b = a.split(".");
        e = b.length;
        if (3 > e) return a;
        c = b[e - 1];
        return 3 > c.length ? a : a = b[e - 2] + "." + c
    };
    ha = function (a, b) {
        var c;
        for (c = 0; c < b.length; c++) a ^= b.charCodeAt(c), a += (a << 1) + (a << 4) + (a << 7) + (a << 8) + (a << 24);
        return a
    };
    E = function (a) {
        var b;
        b = ha(2166136261, a);
        a = ha(3386659096, a);
        return Math.round(Math.abs(b * a) / 65536).toString(16)
    };
    Oa = function (a) {
        var b, c;
        if (a && "object" === L(a)) for (c = 0; c < ta.length; c++) b = ta[c], a.hasOwnProperty(b) && a[b] && delete a[b]
    };
    T = function (a, b, c) {
        var e = {}, h, k = null, l = "webpage", r = "load", m = {}, q, g;
        h = b ? b.qacct ||
            d._qacct : d._qacct;
        q = w[h];
        b ? q && (b = M(b, q)) : b = q;
        h && delete w[h];
        Oa(b);
        if (null != b) for (g in b) m[g] = void 0 !== b[g], b.hasOwnProperty(g) && "string" === typeof g && "string" === typeof b[g] && ("uid" === g || "uh" === g ? (Ea() || (k = E(b[g])), delete b[g]) : "qacct" !== g && (0 < b[g].length ? e[g + a] = A(b[g]) : m[g] = !1, "media" === g && (l = b[g]), "event" === g && (r = b[g])));
        if ("string" !== typeof h) {
            if (!f(d._qacct) || 0 === d._qacct.length) return null;
            h = d._qacct
        }
        if (h) {
            if (q = ca[h]) for (g in q) "string" === typeof g && q.hasOwnProperty(g) && !m[g] && (e[g + a] = A(q[g]), "media" ===
            g && (l = q[g]), "event" === g && (r = q[g]))
        } else return null;
        m = G[h];
        f(m) || (m = 3);
        e["rf" + a] = "" + m;
        "string" === typeof k && (b.uh = k, e["uh" + a] = A(k));
        if ("webpage" === l && "load" === r) {
            for (b = 0; b < v.qpixelsent.length; b++) if (v.qpixelsent[b] === h && !c) return null;
            v.qpixelsent.push(h)
        }
        "ad" === l && (aa = 1);
        e["a" + a] = h;
        return e
    };
    Na = function (a) {
        var b = [], c;
        for (c in a) a[c] && a.hasOwnProperty(c) && b.push(c + "=" + a[c]);
        return b.join(";")
    };
    Pa = function () {
        var a = x.getElementsByTagName("meta"), b = "", c, e, d, k;
        for (c = 0; c < a.length; c++) {
            d = a[c];
            if (1E3 <= b.length) return b;
            f(d) && f(d.attributes) && f(d.attributes.property) && f(d.attributes.property.value) && f(d.content) && (e = d.attributes.property.value, d = d.content, 3 < e.length && "og:" === e.substring(0, 3) && (0 < b.length && (b += ","), k = 80 < d.length ? 80 : d.length, b += Q(e.substring(3, e.length)) + "." + Q(d.substring(0, k))))
        }
        return A(b)
    };
    Ba = function (a) {
        return "object" === typeof a ? ["p", "approved" === a.consent ? "a" : "d", "asserted" === a.source ? "e" : "i"].join("") : ""
    };
    Ea = function () {
        var a = !1;
        f(d.external) && (a = d.external, a = "function" === typeof a.InPrivateFilteringEnabled &&
            !0 === a.InPrivateFilteringEnabled());
        return a || "1" == B.doNotTrack || "yes" === B.doNotTrack || "1" == B.msDoNotTrack
    };
    p = function (a, b) {
        var c = "function" === typeof encodeURIComponent ? "n" : "s", e = fa(), h = "", k = "", l = "", r = "", m = "",
            q = "u", g = "1", t = [], n, p, u, w, y;
        aa = 0;
        f(v.qpixelsent) || (v.qpixelsent = []);
        if (f(a)) if (n = L(a), "object" === n) p = T("", a, b); else {
            if ("array" === n) for (n = 0; n < a.length; n++) u = T("." + (n + 1), a[n], b), p = 0 === n ? u : M(p, u)
        } else "string" === typeof _qacct && (p = T("", null, b));
        p && (n = B.cookieEnabled ? "1" : "0", "undefined" != typeof B.javaEnabled &&
        (q = B.javaEnabled() ? "1" : "0"), f(d._qmeta) && (k = ";m=" + A(d._qmeta), d._qmeta = null), self.screen && (h = screen.width + "x" + screen.height + "x" + screen.colorDepth), u = new Date, w = ya(), y = ia()[0], d.location && d.location.href && (l = A(d.location.href)), x && x.referrer && (m = A(x.referrer)), d.self === d.top && (g = "0"), p.url ? r = l : p.url = l, p.ref || (p.ref = m || ""), l = Pa(), m = Na(p), t.push("/pixel;r=" + e + ";" + m + y + ";ns=" + g + ";ce=" + n + ";qjs=1;qv=4c19192-20180628134937"), t.push((p.ref ? "" : ";ref=") + ";je=" + q + ";sr=" + h + ";enc=" + c + ";dst=" + w + ";et=" + u.getTime() +
            ";tzo=" + u.getTimezoneOffset() + (r ? ";ourl=" + r : "") + k + ";ogl=" + l), ba.push(t), z())
    };
    Ma = function (a) {
        if (l) {
            var b = new Image;
            a = [d.location.protocol, "//pixel.", Fa(t) ? "quantserve.com" : "quantcount.com", a[0], ";cm=", Ba(t), f(n) && "" !== n ? ";gdpr=1;gdpr_consent=" + n : "", a[1]].join("");
            b.alt = "";
            b.src = a;
            b.onload = function () {
                b && "number" == typeof b.width && 3 === b.width ? ga("__qca") : Aa()
            }
        }
    };
    z = function () {
        if (t && f(l) && f(n)) for (l || ga("__qca"); ba.length;) Ma(ba.shift()); else Ja()
    };
    Fa = function (a) {
        return !0 === a || 1 === a || 1 === a || f(a) && "approved" ===
        a.consent ? !0 : !1
    };
    Ga = function () {
        if (15271956E5 <= (new Date).getTime()) return !0;
        for (var a = 0; a < u.length; a++) if (K(Ya, E(u[a]))) return !0;
        return !1
    };
    ka = function () {
        for (var a = 0; a < u.length; a++) if (K(Za, E(u[a]))) return !0;
        return !1
    };
    Ja = function () {
        if (!xa) {
            xa = !0;
            var a = Ga();
            d.top === d.self ? (a ? "function" === typeof __cmp ? __cmp("getVendorConsents", [11], function (a, c) {
                la(a, c);
                __cmp("getConsentData", null, ma)
            }) : (l = !ka(), n = "") : (l = !0, n = ""), "object" === typeof PrivacyManagerAPI && "function" === typeof PrivacyManagerAPI.callApi ? Ha("getConsent",
                "advertising") : t = !0) : d.postMessage && "object" === typeof d.JSON ? Ia("getConsent", "advertising", a) : (t = 1, l = !a, n = "");
            z()
        }
    };
    Ha = function (a, b) {
        t = PrivacyManagerAPI.callApi(a, "quantserve.com", I(), "truste.com", b);
        z()
    };
    Ia = function (a, b, c) {
        if (c) {
            for (var e = window; !H;) {
                try {
                    e.frames.__cmpLocator && (H = e)
                } catch (h) {
                }
                if (e === window.top) break;
                e = e.parent
            }
            if (H) try {
                H.postMessage(d.JSON.stringify({
                    __cmpCall: {
                        command: "getVendorConsents",
                        parameter: [11],
                        callId: 1
                    }
                }), "*")
            } catch (h) {
                l = !1
            } else l = !ka(), n = ""
        } else l = !0, n = "";
        if (d.addEventListener) d.addEventListener("message",
            J, !1); else if (d.attachEvent) d.attachEvent("onmessage", J); else return t = !0, c && !f(l) && (l = !1), z();
        try {
            d.top.postMessage(d.JSON.stringify({
                PrivacyManagerAPI: {
                    timestamp: (new Date).getTime(),
                    action: a,
                    self: "quantserve.com",
                    domain: I(),
                    authority: "truste.com",
                    type: b
                }
            }), "*")
        } catch (h) {
            t = 1
        }
        f(t) || (wa = setTimeout(function () {
            f(t) || (t = !0, z())
        }, 25));
        z()
    };
    J = function (a) {
        if ("string" === typeof a.data && 0 !== a.data.length) {
            var b;
            try {
                b = d.JSON.parse(a.data)
            } catch (c) {
                return
            }
            if (b.__cmpReturn) return Ka(b.__cmpReturn);
            La(b)
        }
    };
    La =
        function (a) {
            a && "object" === typeof a.PrivacyManagerAPI && (clearTimeout(wa), S(), t = a.PrivacyManagerAPI, z())
        };
    Ka = function (a) {
        1 === a.callId ? (la(a.returnValue, a.success), H.postMessage(d.JSON.stringify({
            __cmpCall: {
                command: "getConsentData",
                parameter: null,
                callId: 2
            }
        }), "*")) : 2 === a.callId && ma(a.returnValue, a.success)
    };
    ma = function (a, b) {
        n = b ? a.consentData || "" : "";
        S();
        z()
    };
    la = function (a, b) {
        var c = a.gdprApplies, d = a.vendorConsents, d = d ? d[11] : void 0, f = a.purposeConsents, k;
        f && (k = f[1]);
        l = b && (!c || d && k);
        "boolean" !== typeof c &&
        (l = !1);
        S();
        z()
    };
    S = function () {
        f(l) && f(t) && f(n) && (d.removeEventListener ? window.removeEventListener("message", J, !1) : d.detachEvent && window.detachEvent("onmessage", J))
    };
    ra = function () {
        var a = arguments, b, c;
        y([].slice.call(a));
        for (c = 0; c < a.length; c++) b = a[c], p(b);
        u.length ? W() : F()
    };
    y = function (a) {
        var b = L(a);
        if ("array" === b) for (b = 0; b < a.length; b++) y(a[b]); else "object" === b && pa(a.qacct || d._qacct)
    };
    Sa = function () {
        var a;
        va || d._qevents.length || d.ezt.length || "undefined" === typeof _qacct || (p({qacct: d._qacct}), va = !0);
        if (!v.evts) {
            for (a in d._qevents) d._qevents[a] !==
            d._qevents.push && d._qevents.hasOwnProperty(a) && p(d._qevents[a]);
            for (a in d.ezt) d.ezt[a] !== d.ezt.push && d.ezt.hasOwnProperty(a) && p(d.ezt[a]);
            d._qevents = {push: ra};
            d.ezt.push = function () {
                var a = arguments, c;
                if (f(d.queueManager)) for (c = 0; c < a.length; c++) d.queueManager.push(a[c]); else ra.apply(this, arguments)
            };
            v.evts = 1
        }
    };
    Y = function (a) {
        var b;
        a && (b = Ta(a), y(a), d._qevents.push(b))
    };
    sa = function (a) {
        a.push = function () {
            y([].slice.call(arguments));
            W();
            return [].push.apply(a, arguments)
        }
    };
    R = function () {
        f(d._qevents) || (d._qevents =
            []);
        f(d.ezt) || (d.ezt = []);
        Y(d._qoptions);
        Y(d.qcdata);
        Y(d.smarttagdata);
        v.evts || (sa(d._qevents), sa(d.ezt));
        y(d.ezt);
        y(d._qevents);
        y({qacct: d._qacct});
        d._qoptions = null;
        u.length ? W() : F();
        ua = !0
    };
    d.quantserve = d.quantserve || R;
    v.quantserve = R;
    return v
}(window);
quantserve();
