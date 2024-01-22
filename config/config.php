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
