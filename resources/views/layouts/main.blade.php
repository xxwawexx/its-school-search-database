<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Are you moving to Hong Kong and don't know how to gain entry to the best school? The research on top schools in Hong Kong has been done for you.">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>@yield('title')</title>

        <!-- Local Assets -->
        @yield('local-assets')

        @include('templates.global-assets')

    </head>
    <body >

        @include('templates.loader')

        @include('templates.header')

            <main>
                @yield('content')
            </main>

            @include('templates.footer')

        {{-- @include('templates.admission-form') --}}

        @include('templates.global-scripts')

        <!-- Local Scripts -->
        @yield('local-scripts')
    </body>

</html>
