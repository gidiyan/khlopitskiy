<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Khlopitskiy') }}</title>
    <link rel="shortcut icon" href="{{'favicon.ico'}}" type="image/x-icon">
    <link rel="https://khlopitskiy.herokuapp.com/favicon.ico" type="image/x-icon">

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Styles -->
{{--    <link href="{{ asset('css/app.css') }}" rel="stylesheet">--}}
{{--    <link href="{{ asset('css/lightbox.css') }}" rel="stylesheet">--}}
{{--    <link href="{{ asset('css/gallery.css') }}" rel="stylesheet">--}}
{{--    <link href="{{ asset('css/gallery-keyframes-swing.css') }}" rel="stylesheet">--}}
    <link href="https://khlopitskiy.herokuapp.com/css/lightbox.css" rel="stylesheet">
    <link href="https://khlopitskiy.herokuapp.com/css/app.css" rel="stylesheet">
    <link href="https://khlopitskiy.herokuapp.com/css/gallery.css" rel="stylesheet">
    <link href="https://khlopitskiy.herokuapp.com/css/gallery-keyframes-swing.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet">

    <!-- Scripts -->
{{--    <script src="{{ asset('js/gallery.js') }}" defer></script>--}}
{{--    <script src="{{ asset('js/app.js') }}" defer></script>--}}
{{--    <script src="{{ asset('js/nav.js') }}"></script>--}}
        <script src="https://khlopitskiy.herokuapp.com/js/gallery.js" defer></script>
        <script src="https://khlopitskiy.herokuapp.com/js/app.js" defer></script>
        <script src="https://khlopitskiy.herokuapp.com/js/nav.js" defer></script>
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.7.3/dist/alpine.js" defer></script>
    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.1.min.js" defer></script>
{{--    <script src="{{ asset('js/lightbox.js') }}" defer></script>--}}
{{--    <script src="{{ asset('js/slider.js') }}" defer></script>--}}
    <script src="https://khlopitskiy.herokuapp.com/js/lightbox.js" defer></script>
    <script src="https://khlopitskiy.herokuapp.com/js/slider.js" defer></script>
</head>
<body>
<div class="font-sans text-gray-900 antialiased">
    {{ $slot }}
</div>
</body>
</html>
