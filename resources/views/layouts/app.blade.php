<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    @include('partials.head')

    <body class="font-sans antialiased">
        @yield('content')

        @include('partials.scripts')

    </body>
</html>
