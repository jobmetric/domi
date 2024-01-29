<?php

use JobMetric\Domi\Enums\PageTypeEnum;
use JobMetric\Domi\Facades\Domi;

if (!function_exists('DomiSetTitle')) {
    /**
     * set title for title tag
     *
     * @param string $title
     * @return void
     */
    function DomiSetTitle(string $title): void
    {
        Domi::setTitle($title);
    }
}

if (!function_exists('DomiSetDescription')) {
    /**
     * set description for description meta tag
     *
     * @param string $description
     * @return void
     */
    function DomiSetDescription(string $description): void
    {
        Domi::setDescription($description);
    }
}

if (!function_exists('DomiSetKeywords')) {
    /**
     * set keywords for keywords meta tag
     *
     * @param string $keywords
     * @return void
     */
    function DomiSetKeywords(string $keywords): void
    {
        Domi::setKeywords($keywords);
    }
}

if (!function_exists('DomiSetAuthor')) {
    /**
     * set author for author meta tag
     *
     * @param string $author
     * @return void
     */
    function DomiSetAuthor(string $author): void
    {
        Domi::setAuthor($author);
    }
}

if (!function_exists('DomiSetCanonical')) {
    /**
     * set canonical url for canonical meta tag
     *
     * @param string $url
     * @return void
     */
    function DomiSetCanonical(string $url): void
    {
        Domi::setCanonical($url);
    }
}

if (!function_exists('DomiSetRobots')) {
    /**
     * set robots data for robots meta tag
     *
     * @param string $robots
     * @return void
     */
    function DomiSetRobots(string $robots): void
    {
        Domi::setRobots($robots);
    }
}

if (!function_exists('DomiSetLink')) {
    /**
     * set link data for link tag
     *
     * @param string $link
     * @param string $rel
     * @return void
     */
    function DomiSetLink(string $link, string $rel): void
    {
        Domi::setLink($link, $rel);
    }
}

if (!function_exists('DomiSetStyle')) {
    /**
     * set style data for style tag
     *
     * @param string $href
     * @param string $rel
     * @param string|null $media
     * @return void
     */
    function DomiSetStyle(string $href, string $rel = 'stylesheet', string $media = null): void
    {
        Domi::setStyle($href, $rel, $media);
    }
}

if (!function_exists('DomiSetScript')) {
    /**
     * set script data for script tag
     *
     * @param string $src
     * @param string $type
     * @param boolean $async
     * @param boolean $defer
     * @return void
     */
    function DomiSetScript(string $src, string $type = 'application/javascript', bool $async = false, bool $defer = false): void
    {
        Domi::setScript($src, $type, $async, $defer);
    }
}

if (!function_exists('DomiSetLocalize')) {
    /**
     * set localize data for localize script variable
     *
     * @param string|null $key
     * @param array $l10n
     * @return void
     */
    function DomiSetLocalize(string $key = null, array $l10n = []): void
    {
        Domi::setLocalize($key, $l10n);
    }
}

if (!function_exists('DomiSetPlugins')) {
    /**
     * set plugins by parameters
     *
     * @param mixed ...$parameters
     * @return void
     */
    function DomiSetPlugins(...$parameters): void
    {
        Domi::setPlugins($parameters);
    }
}

if (!function_exists('DomiSetTemplate')) {
    /**
     * set template name
     *
     * @param string $template
     * @return void
     */
    function DomiSetTemplate(string $template): void
    {
        Domi::setTemplate($template);
    }
}

if (!function_exists('DomiSetLogo')) {
    /**
     * set logo path
     *
     * @param string $logo
     * @return void
     */
    function DomiSetLogo(string $logo): void
    {
        Domi::setLogo($logo);
    }
}

if (!function_exists('DomiSetFavicon')) {
    /**
     * set favicon path
     *
     * @param string $favicon
     * @return void
     */
    function DomiSetFavicon(string $favicon): void
    {
        Domi::setFavicon($favicon);
    }
}

if (!function_exists('DomiSetThemeColor')) {
    /**
     * set theme color for theme-color meta tag in mobile browsers
     *
     * @param string $color
     * @return void
     */
    function DomiSetThemeColor(string $color): void
    {
        Domi::setThemeColor($color);
    }
}

if (!function_exists('DomiSetPageType')) {
    /**
     * set page type for og:type meta tag
     * @param string $type
     * @return void
     * @see PageTypeEnum
     */
    function DomiSetPageType(string $type = 'website'): void
    {
        Domi::setPageType($type);
    }
}
