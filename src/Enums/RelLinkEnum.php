<?php

namespace JobMetric\Domi\Enums;

use JobMetric\PackageCore\Enums\EnumToArray;

/**
 * @method static ALTERNATE
 * @method static AUTHOR
 * @method static DNS_PREFETCH
 * @method static HELP
 * @method static ICON
 * @method static LICENSE
 * @method static NEXT
 * @method static PINGBACK
 * @method static PRECONNECT
 * @method static PREFETCH
 * @method static PRELOAD
 * @method static PRERENDER
 * @method static PREV
 * @method static SEARCH
 * @method static STYLESHEET()
 */
enum RelLinkEnum : string {
    use EnumToArray;

    case ALTERNATE = "alternate";
    case AUTHOR = "author";
    case DNS_PREFETCH = "dns-prefetch";
    case HELP = "help";
    case ICON = "icon";
    case LICENSE = "license";
    case NEXT = "next";
    case PINGBACK = "pingback";
    case PRECONNECT = "preconnect";
    case PREFETCH = "prefetch";
    case PRELOAD = "preload";
    case PRERENDER = "prerender";
    case PREV = "prev";
    case SEARCH = "search";
    case STYLESHEET = "stylesheet";
}
