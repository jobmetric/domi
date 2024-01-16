"use strict";

let keyExistsOn = (o, k) => k.split(".").reduce((a, c) => a.hasOwnProperty(c) ? a[c] || 1 : false, Object.assign({}, o)) !== false;
let getLocalize = (key) => keyExistsOn(localize, key) ? eval("localize." + key) : undefined;
