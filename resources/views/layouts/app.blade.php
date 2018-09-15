<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ URL::asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
    <link rel="stylesheet"  href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css"
      integrity="sha384-OHBBOqpYHNsIqQy8hL1U+8OXf9hH6QRxi0+EODezv82DfnZoV7qoHAZDwMwEJvSw" crossorigin="anonymous">

    <!-- Styles -->
    <link href="{{ URL::asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        @guest
            @include('partials.header')
        @endguest

        <main class="">
            @yield('content')
        </main>
    </div>
</body>
</html>
