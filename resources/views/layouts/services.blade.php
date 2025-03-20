<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <title>Axoltcode | Freelancers</title>

        <!-- Fonts -->
        <link rel="icon" href="{{ asset('img/icon.png') }}" type="image/x-icon">
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
        <div class=" text-black/50 dark:text-white/50">
          
            <header class=" items-center  py-5 ">
                @include('layouts.navbar')
               
            </header>
            <div class="p-8 flex justify-start items-center">
                <a href="{{ route('inicial') }}" class="flex items-center space-x-2 text-gray-500 hover:text-white transition-colors">
                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-6 h-6">
                    <circle cx="12" cy="12" r="11" stroke="currentColor" stroke-width="2" fill="none" />
                    <path d="M12 8l-4 4m0 0l4 4m-4-4h8" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                  </svg>
                  <p class="underline  hover:text-white transition-colors">Volver atrás</p>
                </a>
              </div>                           
            @yield('services')
        </div>
        
    </body>
    
   

    <script src="https://cdn.tailwindcss.com"></script>
    <script src="{{ asset('js/navbar.js') }}"></script>
    <script src="{{asset('js/technologies.js')}}"></script>
    <script src="{{asset('js/initial.js')}}"></script>
    <script src="{{asset('js/testimonial.js')}}"></script>
</html>
