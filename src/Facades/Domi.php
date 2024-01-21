<?php

namespace JobMetric\Domi\Facades;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Facade;

/**
 * @method static void setTitle(string $title)
 * @method static string title()
 * @method static void setDescription(string $title)
 * @method static string description()
 * @method static void setKeywords(string $keywords)
 * @method static string keywords()
 * @method static void setCanonical(string $url)
 * @method static string canonical()
 * @method static void setRobots(string $robots)
 * @method static string robots()
 * @method static void setLink(string $link, string $rel)
 * @method static array link()
 * @method static void setStyle(string $href, string $rel = 'stylesheet', string $media = null)
 * @method static array style()
 * @method static void setScript(string $src, string $type = 'application/javascript', bool $async = false, bool $defer = false)
 * @method static array script()
 * @method static void setLocalize(string $key = null, array $l10n = [])
 * @method static array localize()
 *
 * @see \JobMetric\Domi\Domi
 */
class Domi extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor(): string
    {
        return 'Domi';
    }
}
