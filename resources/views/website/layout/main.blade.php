<!DOCTYPE html>
<html>
    <head>
        <title>Gaia Tours | @yield('title')</title>
        @include('website.layout.styles')
        @stack('styles')
    </head>
    <body dir="{{Session::get('language_dir')}}">
        @include('website.layout.navbar')
        @yield('content')
        @include('website.layout.footer')
        @include('website.layout.loader')
        @include('website.layout.scripts')
        @stack('scripts')
    </body>
</html>
