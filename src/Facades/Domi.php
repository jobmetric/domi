<?php

namespace JobMetric\Domi\Facades;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Facade;

/**
 * @method static mixed call(string $method)
 * @method static bool isCall(string $method)
 * @method static void setSiteName(string|null $siteName)
 * @method static string|null siteName()
 * @method static void setTitle(string|null $title)
 * @method static string|null title()
 * @method static void setDescription(string|null $title)
 * @method static string|null description()
 * @method static void setKeywords(string|null $keywords)
 * @method static string|null keywords()
 * @method static void setImage(string|null $url)
 * @method static string|null image()
 * @method static void setAuthor(string|null $author)
 * @method static string|null author()
 * @method static void setCanonical(string|null $url)
 * @method static string|null canonical()
 * @method static void setRobots(string|null $robots)
 * @method static string|null robots()
 * @method static void setLink(string $href, array $items)
 * @method static array link()
 * @method static void setStyle(string $href, string $rel = 'stylesheet', string $media = null, string $integrity = null, string $crossOrigin = null)
 * @method static array style()
 * @method static void setScript(string $src, string $type = 'application/javascript', bool $async = false, bool $defer = false, string $position = 'bottom')
 * @method static array topScript()
 * @method static array bottomScript()
 * @method static void setLocalize(string $key = null, array|string $l10n = [])
 * @method static array localize()
 * @method static string renderLocalize()
 * @method static void setPlugin(string $key, callable $function)
 * @method static void setPlugins(...$parameters)
 * @method static array plugin()
 * @method static void setTemplate(string|null $template)
 * @method static string|null template()
 * @method static void setLogo(string|null $logo)
 * @method static string|null logo()
 * @method static void setFavicon(string|null $favicon)
 * @method static string|null favicon()
 * @method static void setThemeColor(string|null $color)
 * @method static string|null themeColor()
 * @method static void setPageType(string|null $type = 'website')
 * @method static string|null pageType()
 * @method static void setBodyClass(string|null $class)
 * @method static string|null bodyClass()
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
