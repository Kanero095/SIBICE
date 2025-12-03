<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    {{-- TailwindCSS --}}
    <script src="https://cdn.tailwindcss.com"></script>

    <link rel="icon" type="image/x-icon" href="{{ asset('Image/Logo/SIBICE_LOGO.png') }}">

    <!-- Styles -->
    @livewireStyles

    <style>
        .text-stroke-1 {
            -webkit-text-stroke: 1px #fff;
            text-shadow: 0 0 5px #000;
        }

        .text-shadow-3 {
            text-shadow: 0 0 3px #000;
        }

        .wrapper {
            display: flex;
            width: 100%;
            overflow-x: auto;
            gap: 20px;
            scroll-snap-type: x mandatory;
        }

        .wrapper-logo {
            display: flex;
            width: 100%;
            overflow-x: auto;
            gap: 20px;
            scroll-snap-type: x mandatory;
        }

        .card {
            scroll-snap-align: center;
            box-sizing: border-box;
            flex-shrink: 0;
            width: 250px;
        }
    </style>
</head>

<body class="font-sans overflow-x-hidden h-full w-full">

    <div class="bg-gray-100">
        <x-nav-menu />

        <!-- Page Content -->
        <main>
            {{ $slot }}
        </main>
    </div>

    @stack('modals')

    @livewireScripts

    <x-footer />
</body>

</html>
