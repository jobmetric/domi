<?php

use JobMetric\Domi\Enums\PageTypeEnum;
use JobMetric\Domi\Enums\RobotsEnum;
use JobMetric\Domi\Enums\TitleModeEnum;

return [

    /*
    |--------------------------------------------------------------------------
    | Cache Time
    |--------------------------------------------------------------------------
    |
    | Cache time for get data domi
    |
    | - set zero for remove cache
    | - set null for forever
    |
    | - unit: minutes
    */

    "cache_time" => env("DOMI_CACHE_TIME", 0),

    /*
    |--------------------------------------------------------------------------
    | Default Site Name
    |--------------------------------------------------------------------------
    |
    | Here you can specify which of the site name you want
    |
    */

    'site_name' => env('DOMI_SITE_NAME', 'Job Metric'),

    /*
    |--------------------------------------------------------------------------
    | Default Template Name
    |--------------------------------------------------------------------------
    |
    | Here you can specify which of the templates you want
    | to consider as the default for the website.
    |
    */

    'template' => env('DOMI_TEMPLATE', 'default'),

    /*
    |--------------------------------------------------------------------------
    | Default Title
    |--------------------------------------------------------------------------
    |
    | Here you can specify which of the title you want
    | to consider as the default for the website.
    |
    */

    'title' => env('DOMI_TITLE', 'Domi'),

    /*
    |--------------------------------------------------------------------------
    | Default Description
    |--------------------------------------------------------------------------
    |
    | Here you can specify which of the description you want
    | to consider as the default for the website.
    |
    */

    'description' => env('DOMI_DESCRIPTION', 'Job Metric'),

    /*
    |--------------------------------------------------------------------------
    | Default Keywords
    |--------------------------------------------------------------------------
    |
    | Here you can specify which of the keywords you want
    | to consider as the default for the website.
    |
    */

    'keywords' => env('DOMI_KEYWORDS', 'Job Metric, Domi'),

    /*
    |--------------------------------------------------------------------------
    | Default Author
    |--------------------------------------------------------------------------
    |
    | Here you can specify which of the author you want
    | to consider as the default for the website.
    |
    */

    'author' => env('DOMI_AUTHOR', 'Job Metric'),

    /*
    |--------------------------------------------------------------------------
    | Default robots
    |--------------------------------------------------------------------------
    |
    | Here you can specify which of the robots you want
    | to consider as the default for the website.
    |
    | @see string JobMetric\Domi\Enums\RobotsEnum
    | @see https://developers.google.com/search/reference/robots_meta_tag
    */

    'robots' => env('DOMI_ROBOTS', RobotsEnum::INDEX() . ',' . RobotsEnum::FOLLOW()),

    /*
    |--------------------------------------------------------------------------
    | Default Logo
    |--------------------------------------------------------------------------
    |
    | Here you can specify which of the logo you want
    |
    */

    'logo' => env('DOMI_LOGO', ''),

    /*
    |--------------------------------------------------------------------------
    | Default Favicon
    |--------------------------------------------------------------------------
    |
    | Here you can specify which of the favicon you want
    |
    */

    'favicon' => env('DOMI_FAVICON', ''),

    /*
    |--------------------------------------------------------------------------
    | Default Theme Color
    |--------------------------------------------------------------------------
    |
    | Here you can specify which of the theme color you want
    |
    */

    'theme_color' => env('DOMI_THEME_COLOR', '#fff'),

    /*
    |--------------------------------------------------------------------------
    | Default Page Type
    |--------------------------------------------------------------------------
    |
    | Here you can specify which of the page type you want
    | to consider as the default for the website.
    |
    | @see string JobMetric\Domi\Enums\PageTypeEnum
    |
    */

    'page_type' => env('DOMI_PAGE_TYPE', PageTypeEnum::WEBSITE()),

    /*
    |--------------------------------------------------------------------------
    | Title Mode
    |--------------------------------------------------------------------------
    |
    | Here you can specify which of the title mode you want
    | to consider as the default for the website.
    |
    | @see string JobMetric\Domi\Enums\TitleModeEnum
    |
    */

    'title_mode' => env('DOMI_TITLE_MODE', TitleModeEnum::BOTH()),

    /*
    |--------------------------------------------------------------------------
    | Page Limit
    |--------------------------------------------------------------------------
    |
    | Here you can specify how many items to display on the website pages.
    |
    */

    'page_limit' => env('DOMI_PAGE_LIMIT', 20),

];
