<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>Axoltcode | Developers</title>

    <!-- Fonts -->
<link rel="icon" type="image/png" href="{{ asset('img/logoaxolote.png') }}">
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <link rel="stylesheet" href="{{ asset('css/initial.css') }}">
    <link rel="stylesheet" href="{{ asset('css/nav.css') }}">
    <link rel="stylesheet" href="{{ asset('css/technologies.css')}}">
    <head>
        <script src="https://cdn.tailwindcss.com"></script>
    </head>
    
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
</head>
<body class="font-sans antialiased dark:text-white/50" style="background-color: rgb(19 23 28)">
    <!-- Contenido principal oculto inicialmente -->
    <div id="content" class="hidden-content">
        <header class="items-center py-5">
            @include('layouts.navbar')
        </header>

        @yield('services')

        <div class="relative min-h-screen flex flex-col items-center justify-center selection:text-white">
            @yield('content')
            @yield('profile-content')

            <div class="relative w-full max-w-2xl px-6 lg:max-w-7xl">
                <footer class="py-16 text-center text-sm">
                    @include('layouts.pie')
                </footer>
            </div>
        </div>
    </div>

   
    <script src="{{ asset('js/navbar.js') }}"></script>
    <script src="{{ asset('js/technologies.js') }}"></script>
    <script src="{{ asset('js/initial.js') }}"></script>
    <script src="{{ asset('js/testimonial.js') }}"></script>
</body>
</html>
