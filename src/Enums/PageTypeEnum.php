<?php

namespace JobMetric\Domi\Enums;

use JobMetric\PackageCore\Enums\EnumToArray;

/**
 * @method static WEBSITE()
 * @method static ARTICLE()
 * @method static PRODUCT()
 * @method static PROFILE()
 * @method static VIDEO()
 * @method static AUDIO()
 * @method static BOOK()
 * @method static MUSIC()
 * @method static MOVIE()
 * @method static GAME()
 * @method static APPLICATION()
 */
enum PageTypeEnum : string {
    use EnumToArray;

    case WEBSITE = "website";
    case ARTICLE = "article";
    case PRODUCT = "product";
    case PROFILE = "profile";
    case VIDEO = "video";
    case AUDIO = "audio";
    case BOOK = "book";
    case MUSIC = "music";
    case MOVIE = "movie";
    case GAME = "game";
    case APPLICATION = "application";
}
