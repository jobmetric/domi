<?php

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

    'description' => env('DOMI_DESCRIPTION', ''),

    /*
    |--------------------------------------------------------------------------
    | Default Keywords
    |--------------------------------------------------------------------------
    |
    | Here you can specify which of the keywords you want
    | to consider as the default for the website.
    |
    */

    'keywords' => env('DOMI_KEYWORDS', 'Job Metric'),

    /*
    |--------------------------------------------------------------------------
    | Default Author
    |--------------------------------------------------------------------------
    |
    | Here you can specify which of the author you want
    | to consider as the default for the website.
    */

    'author' => env('DOMI_AUTHOR', 'Job Metric'),

    /*
    |--------------------------------------------------------------------------
    | Default Page Type
    |--------------------------------------------------------------------------
    |
    | Here you can specify which of the page type you want
    | to consider as the default for the website.
    |
    | @see string JobMetric\Domi\Enums\PageTypeEnum
    */

    'page_type' => env('DOMI_PAGE_TYPE', 'website'),

];
