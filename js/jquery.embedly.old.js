/*
 * Embedly JQuery v2.2.0
 * ==============
 * This library allows you to easily embed objects on any page.
 */
(function (a) {
    window.embedlyURLre = /(http|https):\/\/(\w+:{0,1}\w*@)?(\S+)(:[0-9]+)?(\/|\/([\w#!:.?+=&%@!\-\/]))?/;
    a.embedly = a.embedly || {};
    if (a.embedly.version) {
        return
    }
    a.extend({
        embedly: function (k, q, n) {
            var c = [];
            var p = "http://api.embed.ly/";
            var d;
            q = q ? q : {};
            d = a.extend({}, a.embedly.defaults, q);
            if (!d.urlRe) {
                d.urlRe = window.embedlyURLre
            }
            if (typeof k === "string") {
                k = new Array(k)
            }
            if (typeof n !== "undefined") {
                d.success = n
            }
            if (d.secure) {
                p = "https://api.embed.ly/"
            }
            if (!d.success) {
                d.success = function (i, t) {
                    var r, s = a(t.node);
                    if (!(i)) {
                        return null
                    }
                    if ((r = d.method) === "replace") {
                        return s.replaceWith(i.code)
                    } else {
                        if (r === "after") {
                            return s.after(i.code)
                        } else {
                            if (r === "afterParent") {
                                return s.parent().after(i.code)
                            } else {
                                if (r === "replaceParent") {
                                    return s.parent().replaceWith(i.code)
                                } else {
                                    if (r === "replaceAfter") {
                                        return s.parent().after(i.code).replaceWith(i.code)
                                    } 
                                }   
                            }
                        }
                    }
                }
            }
            if (!d.error) {
                d.error = function (i, r) {}
            }
            var m = function (i) {
                    return d.urlRe.test(i)
                };
            var o = function (r) {
                    var i = "urls=" + r;
                    if (d.maxWidth) {
                        i += "&maxwidth=" + d.maxWidth
                    } else {
                        if (typeof dimensions !== "undefined") {
                            i += "&maxwidth=" + dimensions.width
                        }
                    }
                    if (d.maxHeight) {
                        i += "&maxheight=" + d.maxHeight
                    }
                    if (d.chars) {
                        i += "&chars=" + d.chars
                    }
                    if (d.words) {
                        i += "&words=" + d.words
                    }
                    if (d.secure) {
                        i += "&secure=true"
                    }
                    if (d.frame) {
                        i += "&frame=true"
                    }
                    i += "&wmode=" + d.wmode;
                    if (typeof d.key === "string") {
                        i += "&key=" + d.key
                    }
                    if (typeof d.autoplay === "string" || typeof d.autoplay === "boolean") {
                        i += "&autoplay=" + d.autoplay
                    }
                    if (d.width) {
                        i += "&width=" + d.width
                    }
                    return i
                };
            var j = function () {
                    if (typeof d.key === "string") {
                        if (d.endpoint.search(/objectify/i) >= 0) {
                            return p + "2/objectify"
                        } else {
                            if (d.endpoint.search(/preview/i) >= 0) {
                                return p + "1/preview"
                            }
                        }
                    }
                    return p + "1/oembed"
                };
            var b = function () {
                    var i = [];
                    if (d.addImageStyles) {
                        if (d.maxWidth) {
                            units = isNaN(parseInt(d.maxWidth, 10)) ? "" : "px";
                            i.push("max-width: " + (d.maxWidth) + units)
                        }
                        if (d.maxHeight) {
                            units = isNaN(parseInt(d.maxHeight, 10)) ? "" : "px";
                            i.push("max-height: " + (d.maxHeight) + units)
                        }
                    }
                    return i.join(";")
                };
            var g = function (v, t) {
                    if (d.endpoint !== "oembed") {
                        return d.success(v, t)
                    }
                    var w, s, r, y, u,  x, z, i;  //var w, s, r, y, u, i, x, z;
                    if ((w = v.type) === "photo") {
                        y = v.title || "";
                        s = "<a href='" + t.url + "' target='_blank'><div class='thumbcontainer'><img style=' " + b() + "' src='" + v.url + "' alt='" + y + "' /></div></a>"
                    } else {
                        if (w === "video") {
                            s = v.html
                        } else {
                            if (w === "rich") {
                                s = v.html
                            } else {
                                y = v.title ? "<p class='highlight'>" + v.title + "</p>" : "";// || t.url;
                                i =  v.thumbnail_url ? "<div class='thumbcontainer' style='background: url(" +  v.thumbnail_url +") repeat-x center;'><img src='" + v.thumbnail_url + "' class='thumb' style='" + b() + "'/></div>" : ""; 
                                // i = v.thumbnail_url ? "<div class='thumbcontainer' style='background: url(" +  v.thumbnail_url +") repeat-x center;'><img src='" + v.thumbnail_url + "' class='thumb' style='" + b() + "'/></div>" : "";
                                z = v.description ? '<div class="description">' +  "<span class='provider' style='display:inline;'>" + v.provider_name + "</span>" + " | " + v.description + "</div>": "";
                                //z = v.description ? '<div class="description">' +  "<span class='provider' style='display:inline;'>" + v.provider_name + "</span>" + " | " + v.description + "</div>" + "<div class='thumbcontainer' style='background: url(" +  v.thumbnail_url +") repeat-x center;'><img src='" + v.thumbnail_url + "' class='thumb' style='" + b() + "'/></div>" : "";
                                x = '';//v.provider_name ? "<span class='provider'>" + v.provider_url + "</span>" : "";
                                s = i + "<a href='" + t.url + "'  target='_blank'>" + y + "</a>";
                                s += x;
                                s += z
                            }
                        }
                    }
                    if (d.wrapElement && d.wrapElement === "div" && a.browser.msie && a.browser.version < 9) {
                        d.wrapElement = "span"
                    }
                    if (d.wrapElement) {
                        s = "<" + d.wrapElement + ' class="' + d.className + '">' + s + "</" + d.wrapElement + ">"
                    }
                    v.code = s;
                    if (typeof t.node !== "undefined") {
                        a(t.node).data("oembed", v).trigger("embedly-oembed", [v])
                    }
                    return d.success(v, t)
                };
            var e = function (i) {
                    var t, v, u, s, r;
                    u = a.map(i, function (x, w) {
                        if (w === 0) {
                            if (x.node !== null) {
                                r = a(x.node);
                                s = {
                                    width: r.parent().width(),
                                    height: r.parent().height()
                                }
                            }
                        }
                        return encodeURIComponent(x.url)
                    }).join(",");
                    a.ajax({
                        url: j(),
                        dataType: "jsonp",
                        data: o(u),
                        success: function (w) {
                            return a.each(w, function (x, y) {
                                return y.type !== "error" ? g(y, i[x]) : d.error(i[x].node, y)
                            })
                        }
                    })
                };
            a.each(k, function (s, r) {
                var u = typeof d.elems !== "undefined" ? d.elems[s] : null;
                if (typeof u !== "undefined" && !m(r)) {
                    a(u).data("oembed", false)
                }
                var t = {
                    url: r,
                    error_code: 400,
                    error_message: "HTTP 400: Bad Request",
                    type: "error"
                };
                return (r && m(r)) ? c.push({
                    url: r,
                    node: u
                }) : d.error(u, t)
            });
            var l = [];
            var h = c.length;
            for (var f = 0;
            (0 <= h ? f < h : f > h); f += 20) {
                l = l.concat(e(c.slice(f, f + 20)))
            }
            if (d.elems) {
                return d.elems
            } else {
                return this
            }
        }
    });
    a.embedly.version = "2.2.0";
    a.embedly.defaults = {
        endpoint: "oembed",
        secure: false,
        frame: false,
        wmode: "opaque",
        method: "replace",
        addImageStyles: true,
        wrapElement: "div",
        className: "embed",
        elems: []
    };
    a.fn.embedly = function (d, g) {
        var e = typeof d !== "undefined" ? d : {};
        if (typeof g !== "undefined") {
            d.success = g
        }
        var f = new Array();
        var c = new Array();
        this.each(function () {
            if (typeof a(this).attr("href") !== "undefined") {
                f.push(a(this).attr("href"));
                c.push(a(this))
            } else {
                a(this).find("a").each(function () {
                    f.push(a(this).attr("href"));
                    c.push(a(this))
                })
            }
            e.elems = c
        });
        var b = a.embedly(f, e);
        return this
    }
})(jQuery);