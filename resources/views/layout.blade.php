<!DOCTYPE html>
<html lang="{{ trans('domi::base.lang') }}"@if(trans('domi::base.direction') == 'rtl') direction="rtl" style="direction: rtl;"@endif>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <base href="{{ env('app_url') }}"/>

    @if(config('domi.title_mode') == \JobMetric\Domi\Enums\TitleModeEnum::TITLE())
<title>@domi('title')</title>
    @elseif(config('domi.title_mode') == \JobMetric\Domi\Enums\TitleModeEnum::SITE_NAME())
<title>@domi('siteName')</title>
    @elseif(config('domi.title_mode') == \JobMetric\Domi\Enums\TitleModeEnum::BOTH())
<title>@domi('title') | @domi('siteName')</title>
    @endif

@isDomi('description')
    <meta name="description" content="@domi('description')">
@endisDomi
@isDomi('keywords')
    <meta name="keywords" content="@domi('keywords')">
@endisDomi
@isDomi('author')
    <meta name="author" content="@domi('author')">
@endisDomi

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Open Graph -->
@isDomi('pageType')
    <meta property="og:type" content="@domi('pageType')">
@endisDomi
@isDomi('title')
    <meta property="og:title" content="@domi('title')">
@endisDomi
@isDomi('description')
    <meta property="og.description" content="@domi('description')">
@endisDomi
@isDomi('canonical')
    <meta property="og:url" content="@domi('canonical')">
@endisDomi
@isDomi('siteName')
    <meta property="og:site_name" content="@domi('siteName')">
@endisDomi
@isDomi('image')
    <meta property="og:image" content="@domi('image')"> <!-- 1200x630 -->
@endisDomi
@isDomi('favicon')
    <!-- Icons -->
    <link rel="shortcut icon" href="@domi('favicon')">
    <link rel="icon" href="@domi('favicon')"/>
    <link rel="icon" type="image/png" sizes="16x16" href="@domi('favicon')"/>
    <link rel="icon" type="image/png" sizes="32x32" href="@domi('favicon')"/>
    <link rel="icon" type="image/png" sizes="96x96" href="@domi('favicon')"/>
    <link rel="icon" type="image/png" sizes="160x160" href="@domi('favicon')"/>
    <link rel="icon" type="image/png" sizes="196x196" href="@domi('favicon')"/>
    <link rel="apple-touch-icon" sizes="57x57" href="@domi('favicon')"/>
    <link rel="apple-touch-icon" sizes="60x60" href="@domi('favicon')"/>
    <link rel="apple-touch-icon" sizes="72x72" href="@domi('favicon')"/>
    <link rel="apple-touch-icon" sizes="76x76" href="@domi('favicon')"/>
    <link rel="apple-touch-icon" sizes="144x144" href="@domi('favicon')"/>
    <link rel="apple-touch-icon" sizes="120x120" href="@domi('favicon')"/>
    <link rel="apple-touch-icon" sizes="152x152" href="@domi('favicon')"/>
@endisDomi
@isDomi('themeColor')
    <meta name="theme-color" content="@domi('themeColor')">

    <!-- Windows 8 Tiles -->
    <meta name="msapplication-TileColor" content="@domi('themeColor')">
@endisDomi
@isDomi('image')
    <meta name="msapplication-TileImage" content="@domi('image')">
@endisDomi
@isDomi('image')
    <!-- Schema.org -->
    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "@domi('pageType')",
            "url": "{{ env('app_url') }}",
            "potentialAction": [{
                "@type": "SearchAction",
                "target": "{{ env('app_url') }}search?q={search_term_string}",
                "query-input": "required name=search_term_string"
            }]
        }
    </script>
@endisDomi
    @yield('head')

</head>
<body @isDomi('bodyClass')class="@domi('bodyClass')" @endisDomi>
@yield('content')

<script type="text/javascript">var localize = @domi('renderLocalize')</script>
@yield('script')

</body>
</html>
