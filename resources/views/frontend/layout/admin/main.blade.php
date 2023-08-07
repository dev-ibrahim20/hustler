<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Hustler Store</title>

        @include('frontend.layout.admin.styles')
        @stack('styles')

        <!-- Styles -->
    </head>
    <body>
        @include('frontend.layout.admin.header')
        @yield('content')
        {{-- @include('frontend.layout.admin.footer') --}}
        @include('frontend.layout.admin.scripts')
        @stack('scripts')
    </body>
</html>
