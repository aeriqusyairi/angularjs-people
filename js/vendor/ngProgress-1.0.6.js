/*
 ngProgress 1.0.6 - slim, site-wide progressbar for AngularJS
(C) 2013 - Victor Bjelkholm 
License: MIT 
Source: https://github.com/VictorBjelkholm/ngProgress 
 Date Compiled: 2014-08-27
*/
angular.module("ngProgress.provider", ["ngProgress.directive"]).provider("ngProgress", function () {
    "use strict";
    this.autoStyle = !0, this.count = 0, this.height = "2px", this.color = "firebrick", this.$get = ["$document", "$window", "$compile", "$rootScope", "$timeout", function (a, b, c, d, e) {
        var f = this.count, g = this.height, h = this.color, i = d, j = a.find("body")[0], k = c("<ng-progress></ng-progress>")(i);
        j.appendChild(k[0]), i.count = f, void 0 !== g && k.eq(0).children().css("height", g), void 0 !== h && (k.eq(0).children().css("background-color", h), k.eq(0).children().css("color", h));
        var l, m = 0;
        return {
            start: function () {
                this.show();
                var a = this;
                clearInterval(m), m = setInterval(function () {
                    if (isNaN(f))clearInterval(m), f = 0, a.hide(); else {
                        var b = 100 - f;
                        f += .15 * Math.pow(1 - Math.sqrt(b), 2), a.updateCount(f)
                    }
                }, 200)
            }, updateCount: function (a) {
                i.count = a, i.$$phase || i.$apply()
            }, height: function (a) {
                return void 0 !== a && (g = a, i.height = g, i.$$phase || i.$apply()), g
            }, color: function (a) {
                return void 0 !== a && (h = a, i.color = h, i.$$phase || i.$apply()), h
            }, hide: function () {
                k.children().css("opacity", "0");
                var a = this;
                a.animate(function () {
                    k.children().css("width", "0%"), a.animate(function () {
                        a.show()
                    }, 500)
                }, 500)
            }, show: function () {
                var a = this;
                a.animate(function () {
                    k.children().css("opacity", "1")
                }, 100)
            }, animate: function (a, b) {
                l && e.cancel(l), l = e(a, b)
            }, status: function () {
                return f
            }, stop: function () {
                clearInterval(m)
            }, set: function (a) {
                return this.show(), this.updateCount(a), f = a, clearInterval(m), f
            }, css: function (a) {
                return k.children().css(a)
            }, reset: function () {
                return clearInterval(m), f = 0, this.updateCount(f), 0
            }, complete: function () {
                f = 100, this.updateCount(f);
                var a = this;
                return clearInterval(m), e(function () {
                    a.hide(), e(function () {
                        f = 0, a.updateCount(f)
                    }, 500)
                }, 1e3), f
            }, setParent: function (a) {
                if (null === a || void 0 === a)throw new Error("Provide a valid parent of type HTMLElement");
                null !== j && void 0 !== j && j.removeChild(k[0]), j = a, j.appendChild(k[0])
            }, getDomElement: function () {
                return k
            }
        }
    }], this.setColor = function (a) {
        return void 0 !== a && (this.color = a), this.color
    }, this.setHeight = function (a) {
        return void 0 !== a && (this.height = a), this.height
    }
}), angular.module("ngProgress.directive", []).directive("ngProgress", ["$window", "$rootScope", function (a, b) {
    var c = {
        replace: !0, restrict: "E", link: function (a, c) {
            b.$watch("count", function (b) {
                (void 0 !== b || null !== b) && (a.counter = b, c.eq(0).children().css("width", b + "%"))
            }), b.$watch("color", function (b) {
                (void 0 !== b || null !== b) && (a.color = b, c.eq(0).children().css("background-color", b), c.eq(0).children().css("color", b))
            }), b.$watch("height", function (b) {
                (void 0 !== b || null !== b) && (a.height = b, c.eq(0).children().css("height", b))
            })
        }, template: '<div id="ngProgress-container"><div id="ngProgress"></div></div>'
    };
    return c
}]), angular.module("ngProgress", ["ngProgress.directive", "ngProgress.provider"]);