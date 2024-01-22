<?php

namespace JobMetric\Domi\Enums;

use JobMetric\PackageCore\Enums\EnumToArray;

/**
 * @method static INDEX()
 * @method static NOINDEX()
 * @method static FOLLOW()
 * @method static NOFOLLOW()
 * @method static NOARCHIVE()
 * @method static NOSNIPPET()
 * @method static NOODP()
 * @method static NOYDIR()
 * @method static NONE()
 * @method static NOIMAGEINDEX()
 * @method static NOTRANSLATE()
 * @method static NOCONTENT()
 * @method static NOSITEARCHIVE()
 * @method static MAX_SNIPPET()
 * @method static MAX_IMAGE_PREVIEW()
 * @method static MAX_VIDEO_PREVIEW()
 */
enum RobotsEnum : string {
    use EnumToArray;

    case INDEX = "index";
    case NOINDEX = "noindex";
    case FOLLOW = "follow";
    case NOFOLLOW = "nofollow";
    case NOARCHIVE = "noarchive";
    case NOSNIPPET = "nosnippet";
    case NOODP = "noodp";
    case NOYDIR = "noydir";
    case NONE = "none";
    case NOIMAGEINDEX = "noimageindex";
    case NOTRANSLATE = "notranslate";
    case NOCONTENT = "nocontent";
    case NOSITEARCHIVE = "nositearchive";
    case MAX_SNIPPET = "max-snippet";
    case MAX_IMAGE_PREVIEW = "max-image-preview";
    case MAX_VIDEO_PREVIEW = "max-video-preview";
}
