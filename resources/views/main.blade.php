<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Naturo Feminin</title>
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <!-- Fonts -->
        <link
            href="https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
            rel="stylesheet"
        />
    </head>

    <body class="top">
        <header class="bg-white z-50 fixed top-0 w-full shadow">
            @include('navbar.navbar')
        </header>
        <div class="main-container">
            <div id="accueil-container">@include('pages.accueil')</div>
            <div id="prestations-container">@include('pages.prestation')</div>
            <div id="enjeux-container">@include('pages.enjeux')</div>
            <div id="apropos-container">@include('pages.apropos')</div>
            <div id="contact-container">@include('pages.contact')</div>
        </div>
    </body>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="{{ asset('js/app.js') }}"></script>
    <script>
        AOS.init();
    </script>
</html>
