<!DOCTYPE html>
<html lang="{{ trans('domi:base.lang') }}"@if(trans('domi:base.direction') == 'rtl') direction="rtl" style="direction: rtl;"@endif>
<head>
    {!! Domi::document()->getHeader() !!}
    @yield('style')

</head>
<body class="{{ Domi::document()->getBodyClass() }}">
@yield('content')
{!! Domi::document()->getFooter() !!}
@yield('script')

</body>
</html>
