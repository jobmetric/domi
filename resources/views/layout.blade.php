<!DOCTYPE html>
<html lang="{{ trans('domi:base.lang') }}"@if(trans('domi:base.direction') == 'rtl') direction="rtl" style="direction: rtl;"@endif>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <base href="{{ env('app_url') }}"/>
    <title>@domi('title')</title>
    <meta name="description" content="@domi('description')">
    <meta name="keywords" content="@domi('keywords')">
    <meta name="author" content="@domi('author')">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{--{!! Domi::document()->getHeader() !!}--}}
    @yield('style')

</head>
<body class="{{--{{ Domi::document()->getBodyClass() }}--}}">
@yield('content')
{{--{!! Domi::document()->getFooter() !!}--}}
@yield('script')

</body>
</html>
