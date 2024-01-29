<?php

use JobMetric\Domi\Enums\PageTypeEnum;
use JobMetric\Domi\Facades\Domi;

if (!function_exists('DomiSiteName')) {
    /**
     * set site name for title tag
     *
     * @param string|null $siteName
     * @return void
     */
    function DomiSiteName(string|null $siteName): void
    {
        Domi::setSiteName($siteName);
    }
}

if (!function_exists('DomiTitle')) {
    /**
     * set title for title tag
     *
     * @param string|null $title
     * @return void
     */
    function DomiTitle(string|null $title): void
    {
        Domi::setTitle($title);
    }
}

if (!function_exists('DomiDescription')) {
    /**
     * set description for description meta tag
     *
     * @param string|null $description
     * @return void
     */
    function DomiDescription(string|null $description): void
    {
        Domi::setDescription($description);
    }
}

if (!function_exists('DomiKeywords')) {
    /**
     * set keywords for keywords meta tag
     *
     * @param string|null $keywords
     * @return void
     */
    function DomiKeywords(string|null $keywords): void
    {
        Domi::setKeywords($keywords);
    }
}

if (!function_exists('DomiImage')) {
    /**
     * set image for page
     *
     * @param string|null $url
     * @return void
     */
    function DomiImage(string|null $url): void
    {
        Domi::setImage($url);
    }
}

if (!function_exists('DomiAuthor')) {
    /**
     * set author for author meta tag
     *
     * @param string|null $author
     * @return void
     */
    function DomiAuthor(string|null $author): void
    {
        Domi::setAuthor($author);
    }
}

if (!function_exists('DomiCanonical')) {
    /**
     * set canonical url for canonical meta tag
     *
     * @param string|null $url
     * @return void
     */
    function DomiCanonical(string|null $url): void
    {
        Domi::setCanonical($url);
    }
}

if (!function_exists('DomiRobots')) {
    /**
     * set robots data for robots meta tag
     *
     * @param string|null $robots
     * @return void
     */
    function DomiRobots(string|null $robots): void
    {
        Domi::setRobots($robots);
    }
}

if (!function_exists('DomiLink')) {
    /**
     * set link data for link tag
     *
     * @param string $link
     * @param string $rel
     * @return void
     */
    function DomiLink(string $link, string $rel): void
    {
        Domi::setLink($link, $rel);
    }
}

if (!function_exists('DomiStyle')) {
    /**
     * set style data for style tag
     *
     * @param string $href
     * @param string $rel
     * @param string|null $media
     * @return void
     */
    function DomiStyle(string $href, string $rel = 'stylesheet', string $media = null): void
    {
        Domi::setStyle($href, $rel, $media);
    }
}

if (!function_exists('DomiScript')) {
    /**
     * set script data for script tag
     *
     * @param string $src
     * @param string $type
     * @param boolean $async
     * @param boolean $defer
     * @return void
     */
    function DomiScript(string $src, string $type = 'application/javascript', bool $async = false, bool $defer = false): void
    {
        Domi::setScript($src, $type, $async, $defer);
    }
}

if (!function_exists('DomiLocalize')) {
    /**
     * set localize data for localize script variable
     *
     * @param string|null $key
     * @param array|string $l10n
     * @return void
     */
    function DomiLocalize(string $key = null, array|string $l10n = []): void
    {
        Domi::setLocalize($key, $l10n);
    }
}

if (!function_exists('DomiPlugins')) {
    /**
     * set plugins by parameters
     *
     * @param mixed ...$parameters
     * @return void
     */
    function DomiPlugins(...$parameters): void
    {
        Domi::setPlugins($parameters);
    }
}

if (!function_exists('DomiTemplate')) {
    /**
     * set template name
     *
     * @param string|null $template
     * @return void
     */
    function DomiTemplate(string|null $template): void
    {
        Domi::setTemplate($template);
    }
}

if (!function_exists('DomiLogo')) {
    /**
     * set logo path
     *
     * @param string|null $logo
     * @return void
     */
    function DomiLogo(string|null $logo): void
    {
        Domi::setLogo($logo);
    }
}

if (!function_exists('DomiFavicon')) {
    /**
     * set favicon path
     *
     * @param string|null $favicon
     * @return void
     */
    function DomiFavicon(string|null $favicon): void
    {
        Domi::setFavicon($favicon);
    }
}

if (!function_exists('DomiThemeColor')) {
    /**
     * set theme color for theme-color meta tag in mobile browsers
     *
     * @param string|null $color
     * @return void
     */
    function DomiThemeColor(string|null $color): void
    {
        Domi::setThemeColor($color);
    }
}

if (!function_exists('DomiPageType')) {
    /**
     * set page type for og:type meta tag
     * @param string|null $type
     * @return void
     * @see PageTypeEnum
     */
    function DomiPageType(string|null $type = 'website'): void
    {
        Domi::setPageType($type);
    }
}

if (!function_exists('DomiBodyClass')) {
    /**
     * set body class
     *
     * @param string|null $class
     * @return void
     */
    function DomiBodyClass(string|null $class): void
    {
        Domi::setBodyClass($class);
    }
}
