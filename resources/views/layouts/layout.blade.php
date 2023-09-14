<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lavender</title>
    @livewireStyles
    @livewireScripts
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
</head>

<body class="antialiased bg-slate-100">
    <div id="preloader" class="flex justify-center items-center fixed w-full h-screen left-0 top-0 bg-white z-50">
        <img src="/assets/img/preloader.svg" alt="">
    </div>
    @include('parts.header')
    @yield('content')
</body>

</html>
