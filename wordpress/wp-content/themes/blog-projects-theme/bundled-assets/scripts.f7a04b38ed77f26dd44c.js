!(function (e) {
  function t(t) {
    for (
      var r, l, i = t[0], s = t[1], c = t[2], d = 0, p = [];
      d < i.length;
      d++
    )
      (l = i[d]),
        Object.prototype.hasOwnProperty.call(o, l) && o[l] && p.push(o[l][0]),
        (o[l] = 0);
    for (r in s) Object.prototype.hasOwnProperty.call(s, r) && (e[r] = s[r]);
    for (a && a(t); p.length; ) p.shift()();
    return u.push.apply(u, c || []), n();
  }
  function n() {
    for (var e, t = 0; t < u.length; t++) {
      for (var n = u[t], r = !0, i = 1; i < n.length; i++) {
        var s = n[i];
        0 !== o[s] && (r = !1);
      }
      r && (u.splice(t--, 1), (e = l((l.s = n[0]))));
    }
    return e;
  }
  var r = {},
    o = { 0: 0 },
    u = [];
  function l(t) {
    if (r[t]) return r[t].exports;
    var n = (r[t] = { i: t, l: !1, exports: {} });
    return e[t].call(n.exports, n, n.exports, l), (n.l = !0), n.exports;
  }
  (l.m = e),
    (l.c = r),
    (l.d = function (e, t, n) {
      l.o(e, t) || Object.defineProperty(e, t, { enumerable: !0, get: n });
    }),
    (l.r = function (e) {
      "undefined" != typeof Symbol &&
        Symbol.toStringTag &&
        Object.defineProperty(e, Symbol.toStringTag, { value: "Module" }),
        Object.defineProperty(e, "__esModule", { value: !0 });
    }),
    (l.t = function (e, t) {
      if ((1 & t && (e = l(e)), 8 & t)) return e;
      if (4 & t && "object" == typeof e && e && e.__esModule) return e;
      var n = Object.create(null);
      if (
        (l.r(n),
        Object.defineProperty(n, "default", { enumerable: !0, value: e }),
        2 & t && "string" != typeof e)
      )
        for (var r in e)
          l.d(
            n,
            r,
            function (t) {
              return e[t];
            }.bind(null, r)
          );
      return n;
    }),
    (l.n = function (e) {
      var t =
        e && e.__esModule
          ? function () {
              return e.default;
            }
          : function () {
              return e;
            };
      return l.d(t, "a", t), t;
    }),
    (l.o = function (e, t) {
      return Object.prototype.hasOwnProperty.call(e, t);
    }),
    (l.p = "/wp-content/themes/blog-projects-theme/bundled-assets/");
  var i = (window.webpackJsonp = window.webpackJsonp || []),
    s = i.push.bind(i);
  (i.push = t), (i = i.slice());
  for (var c = 0; c < i.length; c++) t(i[c]);
  var a = s;
  u.push([2, 1]), n();
})([
  ,
  function (e, t, n) {},
  function (e, t, n) {
    "use strict";
    n.r(t);
    n(1);
    var r = class {
        constructor() {
          (this.menu = document.querySelector(".site-header__menu")),
            (this.openButton = document.querySelector(
              ".site-header__menu-trigger"
            )),
            this.events();
        }
        events() {
          this.openButton.addEventListener("click", () => this.openMenu());
        }
        openMenu() {
          this.openButton.classList.toggle("fa-bars"),
            this.openButton.classList.toggle("fa-window-close"),
            this.menu.classList.toggle("site-header__menu--active");
        }
      },
      o = n(0);
    var u = class {
      constructor() {
        if (document.querySelector(".hero-slider")) {
          const e = document.querySelectorAll(".hero-slider__slide").length;
          let t = "";
          for (let n = 0; n < e; n++)
            t += `<button class="slider__bullet glide__bullet" data-glide-dir="=${n}"></button>`;
          document
            .querySelector(".glide__bullets")
            .insertAdjacentHTML("beforeend", t),
            new o.a(".hero-slider", {
              type: "carousel",
              perView: 1,
              autoplay: 3e3,
            }).mount();
        }
      }
    };
    new r(), new u();
  },
]);
