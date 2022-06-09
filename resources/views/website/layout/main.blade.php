<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Gaia Tours | @yield('title')</title>
        @include('website.layout.styles')
        @stack('styles')
    </head>
    <body>
        @include('website.layout.navbar')
        @yield('content')
        @include('website.layout.footer')
        @include('website.layout.loader')
        @include('website.layout.scripts')
        @stack('scripts')
    </body>
</html>
