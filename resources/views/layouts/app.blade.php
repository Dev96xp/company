<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Fonts -->
        <link rel="stylesheet" href="https://use.typekit.net/aid1uvd.css">


        {{-- font-family: 'Cormorant Garamond', serif; --}}
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@500&display=swap" rel="stylesheet">


        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link
            href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@300;400&family=Montserrat:wght@200&family=Playfair+Display&family=Roboto:wght@300&family=Zen+Antique+Soft&display=swap"
            rel="stylesheet">

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Scheherazade+New&display=swap" rel="stylesheet">



        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <!-- Styles -->
        @livewireStyles


    </head>

    
    <body class="font-sans antialiased">
        <x-jet-banner />



        <div class="min-h-screen bg-gray-100">

            @livewire('navigation-menu')

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>

        @stack('modals')

        @livewireScripts


        @stack('script') {{-- Dropzone - PARTE 3/5 --}}

        {{-- Si la variable esta DEFINIDA la imprime , sino simplemente la ignora --}}
        {{-- Variable que viene para renderizarse, trae el codigo de java script --}}
        @isset($js)
            {{ $js }}
        @endisset
    
        <!-- Async script executes immediately and must be after any DOM elements used in callback. -->
        <script
            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB_HpE_-dofKBoEQKMWGzf1xr3gBJtlIuM&callback=initMap&libraries=&v=weekly"
            async>
        </script>
    
    
        {{-- Para google maps  - viene desde: (livewire/market/show-maps.blade.php) --}}
        @yield('scripts')


    </body>
</html>
