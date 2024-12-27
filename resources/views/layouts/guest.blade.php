<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Axoltcode | Developers</title>

        <!-- Fonts -->
        <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
        <link rel="stylesheet" href="{{ asset('css/initial.css') }}">
        <link rel="stylesheet" href="{{ asset('css/nav.css') }}">
        <link rel="stylesheet" href="{{ asset('css/technologies.css')}}">
                    <!-- Font Awesome -->
            <link
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
            rel="stylesheet"
            />
            <!-- Google Fonts -->
            <link
            href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
            rel="stylesheet"
            />

        <!-- Styles / Scripts -->
        @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
            @vite(['resources/css/app.css', 'resources/js/app.js'])
        @else

        @endif
    </head>
    <body class="font-sans antialiased  dark:text-white/50 " style="background-color: rgb(19 23 28)">
        <div class=" text-black/50 ">
        
        <header class=" items-center  py-5 ">
            @include('layouts.navguest')
           
        </header>
        <div class="px-4  min-w-full min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 ">
            <div>
                <a href="/">
                    <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
                </a>
            </div>

            <div class="w-full sm:max-w-md mt-6 px-6 py-4  shadow-md rounded-lg overflow-hidden sm:rounded-lg" style="background: rgb(28 36 50 )">
                {{ $slot }}
            </div>
        </div>
        </div>   
    </body>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="{{ asset('js/navbar.js') }}"></script>
    <script src="{{asset('js/initial.js')}}"></script>
</html>
