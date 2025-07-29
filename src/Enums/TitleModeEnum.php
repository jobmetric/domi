<?php

namespace JobMetric\Domi\Enums;

use JobMetric\PackageCore\Enums\EnumMacros;

/**
 * @method static SITE_NAME()
 * @method static TITLE()
 * @method static BOTH()
 */
enum TitleModeEnum : string {
    use EnumMacros;

    case SITE_NAME = "site_name";
    case TITLE = "TITLE";
    case BOTH = "both";
}
