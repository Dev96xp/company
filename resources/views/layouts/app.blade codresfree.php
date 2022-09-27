<!DOCTYPE html>

{{-- PLANTILLA PRINCIPAL - JETSTREAM --}}


<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'THE PALACE') }}</title>

    <!-- Fonts -->

    <link rel="stylesheet" href="https://use.typekit.net/aid1uvd.css">
    {{-- font-family: proxima-nova, sans-serif;
    font-weight: 800;
    font-style: normal; --}}


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

    <!-- Styles -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">

    {{-- Importando especial caracteres --}}
    <link rel="stylesheet" href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}">
    {{-- Este archivo lo baje y lo copie en esta direcion, es la version 6 --}}
    <link rel="stylesheet" href="{{ asset('vendor/fontawesome-free6/css/all.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/fontawesome-free6/css/fontawesome.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('vendor/fontawesome-free6/css/brands.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('vendor/fontawesome-free6/css/solid.css') }}" rel="stylesheet">

    {{-- Dropzone css - PARTE 1/5 --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.2/dropzone.min.css"
        integrity="sha512-jU/7UFiaW5UBGODEopEqnbIAHOI8fO6T99m7Tsmqs2gkdujByJfkCbbfPSN4Wlqlb9TGnsuC0YgUgWkRBK7B9A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- BOOTSTRAP 5 - Latest compiled and minified CSS -->
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"> --}}


    {{-- CDN - JQUERY Lo necesita google maps --}}
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
        crossorigin="anonymous"></script>


    @livewireStyles


    <!-- Scripts -->

    {{-- Dropzone js - PARTE 2/5 --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.2/min/dropzone.min.js"
        integrity="sha512-VQQXLthlZQO00P+uEu4mJ4G4OAgqTtKG1hri56kQY1DtdLeIqhKUp9W/lllDDu3uN3SnUNawpW7lBda8+dSi7w=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>


    {{-- Esto permite incorporar alpine --}}
    <script src="{{ mix('js/app.js') }}" defer></script>
</head>


<body class="font-sans antialiased">
    <x-jet-banner />

    <div class="min-h-screen bg-gray-100">

        {{-- manda llamar al livewire componente --}}

        {{-- LA LINEA DE MENU DE ESTE LAYOUT --}}
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
