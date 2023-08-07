<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Hunstler Store</title>

        @include('frontend.layout.front.styles')
        @stack('styles')

        <!-- Styles -->
    </head>
    <body>
        @include('frontend.layout.front.header')
        @yield('content')
        @include('frontend.layout.front.footer')
        @include('frontend.layout.front.scripts')
        @stack('script')
    </body>
</html>
