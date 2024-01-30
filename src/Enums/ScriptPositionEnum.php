<?php

namespace JobMetric\Domi\Enums;

use JobMetric\PackageCore\Enums\EnumToArray;

/**
 * @method static TOP()
 * @method static BOTTOM()
 */
enum ScriptPositionEnum : string {
    use EnumToArray;

    case TOP = "top";
    case BOTTOM = "bottom";
}
