<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i|Roboto+Mono:wght@100" rel="stylesheet">


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="icon" href="{{ asset('img/favicon.png') }}" type="image/png">
    <link rel="icon" href="{{ asset('img/favicon-32x32.png') }}" sizes="32x32" />
    <link rel="icon" href="{{ asset('img/favicon-192x192.png') }}" sizes="192x192" />
    <link rel="apple-touch-icon-precomposed"  href="{{ asset('img/favicon-180x180.png') }}" />

    <link href="{{ asset('vendor/layout/styles.css') }}" rel="stylesheet">
    @if(config('layout.custom_css'))
        <link href="{{ config('layout.custom_css') }}" rel="stylesheet">
    @endif

    <meta name="csrf-token" content="{{ csrf_token() }}">
    @rapydStyles
    @stack('head_scripts')

</head>
<body>
<div id="app">
    @section('main')
    <main class="p-4">
        @yield('content')
        {{ $slot ??'' }}
    </main>
    @show
</div>

@rapydScripts
@stack('footer_scripts')
<script src="{{ asset('vendor/layout/layout.js') }}" defer></script>
</body>
</html>
