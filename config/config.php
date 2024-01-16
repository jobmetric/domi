<?php

return [

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
    | Logo & favicon
    |--------------------------------------------------------------------------
    |
    | Address settings of logo and favicon files for the website
    |
    */

    "logo" => env("DOMI_LOGO", ''),
    "favicon" => env("DOMI_FAVICON", ''),

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
    | Datatable
    |--------------------------------------------------------------------------
    |
    | All datatable plugin settings
    |
    */

    "page_limit" => env("DOMI_PAGE_LIMIT", 10),

];
