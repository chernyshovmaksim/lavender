<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lavender</title>
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
</head>

<body class="antialiased bg-slate-100 flex flex-col min-h-screen">
    
    <x-preloader></x-preloader>

    @include('components.header')

    @yield('content')

    <x-footer></x-footer>
</body>

</html>
