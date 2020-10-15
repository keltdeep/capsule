<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script type="application/javascript" src="{{ asset('js/app.js') }}" defer></script>


    @stack('scripts')

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Libre+Franklin:ital,wght@0,600;1,900&family=Secular+One&display=swap" rel="stylesheet">
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
            @yield('content')
    </div>
<style>
    body {
        font-family: 'Libre Franklin', sans-serif;
        line-height: 1.1;
    }
</style>
</body>
</html>
