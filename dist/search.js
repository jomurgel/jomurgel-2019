!function(n){var o={};function r(e){if(o[e])return o[e].exports;var t=o[e]={i:e,l:!1,exports:{}};return n[e].call(t.exports,t,t.exports,r),t.l=!0,t.exports}r.m=n,r.c=o,r.d=function(e,t,n){r.o(e,t)||Object.defineProperty(e,t,{enumerable:!0,get:n})},r.r=function(e){"undefined"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(e,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(e,"__esModule",{value:!0})},r.t=function(t,e){if(1&e&&(t=r(t)),8&e)return t;if(4&e&&"object"==typeof t&&t&&t.__esModule)return t;var n=Object.create(null);if(r.r(n),Object.defineProperty(n,"default",{enumerable:!0,value:t}),2&e&&"string"!=typeof t)for(var o in t)r.d(n,o,function(e){return t[e]}.bind(null,o));return n},r.n=function(e){var t=e&&e.__esModule?function(){return e.default}:function(){return e};return r.d(t,"a",t),t},r.o=function(e,t){return Object.prototype.hasOwnProperty.call(e,t)},r.p="",r(r.s=17)}({0:function(e,t,n){"use strict";var a=function(e,t){return!!e.className.match(new RegExp("(\\s|^)"+t+"(\\s|$)"))},o=function(e,t){a(e,t)||(e.className+=" "+t)},r=function(e,t){if(a(e,t)){var n=new RegExp("(\\s|^)"+t+"(\\s|$)");e.className=e.className.replace(n," ")}},c=function(e,t){document.getElementById(e).setAttribute("aria-hidden",t)},u=function(e,t){for(var n=0;n<e.length;n++){e[n].setAttribute("tabindex",t)}},d=function(){var e=document.getElementsByTagName("body")[0],t=document.getElementById("primary").getElementsByTagName("a");a(e,"menu-open")?(r(e,"menu-open"),c("primary","true"),u(t,"-1")):(o(e,"menu-open"),c("primary","false"),u(t,"0"))},i=function(){var e=document.getElementsByTagName("body")[0],t=document.querySelector("form.search-form input");console.log(t),a(e,"search-open")?(r(e,"search-open"),c("search-form-container","true"),u(t,"-1"),t.blur()):(o(e,"search-open"),c("search-form-container","false"),u(t,"0"),t.focus())};document.addEventListener("readystatechange",function(){"complete"===document.readyState&&(function(){var n=document.getElementsByTagName("body")[0],o=document.getElementById("menu-toggle"),r=document.getElementById("primary");if(null!==r){var e=document.getElementById("primary").getElementsByTagName("a");a(n,"nav-is-visible")?u(e,"0"):u(e,"-1"),o.addEventListener("click",d),document.addEventListener("keydown",function(e){a(n,"menu-open")&&"Escape"===e.key&&d()}),document.addEventListener("click",function(e){var t=!r.contains(e.target)&&!o.contains(e.target);a(n,"menu-open")&&t&&d()})}}(),function(){var n=document.getElementById("search-toggle");if(null!==n){var o=document.getElementsByTagName("body")[0],r=document.getElementById("search-form-container");n.addEventListener("click",i),document.addEventListener("keydown",function(e){a(o,"search-open")&&"Escape"===e.key&&i()}),document.addEventListener("click",function(e){var t=!r.contains(e.target)&&!n.contains(e.target);a(o,"search-open")&&t&&i()})}}())});var s=document.getElementsByTagName("body")[0];a(s,"home blog")?document.addEventListener("DOMContentLoaded",function(){var e=document.querySelector(".sig-line"),t=document.querySelector(".sig-dot");setTimeout(function(){e.classList.add("loaded"),t.classList.add("loaded")},2500)}):document.addEventListener("DOMContentLoaded",function(){var e=document.querySelector(".sig-line"),t=document.querySelector(".sig-dot");e.classList.add("loaded"),t.classList.add("loaded")})},17:function(e,t,n){n(18),e.exports=n(19)},18:function(e,t,n){"use strict";n.r(t);n(0)},19:function(e,t,n){}});