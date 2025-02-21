"use strict";

let keyExistsOn = (o, k) => k.split(".").reduce((a, c) => a.hasOwnProperty(c) ? a[c] || 1 : false, Object.assign({}, o)) !== false;
let getLocalize = (key) => keyExistsOn(localize, key) ? eval("localize." + key) : undefined;
let getCsrfToken = () => document.querySelector("meta[name=csrf-token]").getAttribute("content");
let convertRemToPixels = (r) => r * parseFloat(getComputedStyle(document.documentElement).fontSize);
let isTimestampWithinThreshold = (timestamp, threshold) => timestamp - Math.floor(Date.now() / 1000) < threshold;
let loadScriptsSequentially = (scripts, callback) => {
    if (scripts.length === 0) {
        callback()
        return
    }

    const urlWithNoCache = `${scripts[0]}?t=${new Date().getTime()}`

    $.getScript(urlWithNoCache, function() {
        loadScriptsSequentially(scripts.slice(1), callback)
    })
}
let getQueryParam = (key) => (new URLSearchParams(window.location.search)).get(key);
let isRtl = () => getComputedStyle(document.documentElement).direction === "rtl";

let getTokenTime = () => {

}

