<?php

namespace JobMetric\Domi\Enums;

use JobMetric\PackageCore\Enums\EnumMacros;

/**
 * @method static TOP()
 * @method static BOTTOM()
 */
enum ScriptPositionEnum : string {
    use EnumMacros;

    case TOP = "top";
    case BOTTOM = "bottom";
}
