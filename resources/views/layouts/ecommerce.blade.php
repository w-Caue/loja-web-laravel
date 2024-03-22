<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ 'LaraLoja' }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Styles -->
    <style>
        [x-cloak] {
            display: none;
        }
    </style>

    @livewireStyles
</head>

<body class="font-sans antialiased bg-gray-100">
    <div x-data="data()" class="min-h-screen">
        @include('nav-menu')

        @include('layouts.ecommerce.sidebar-carrinho')

        <!-- Page Content -->
        <main>
            @yield('content')
        </main>
    </div>

    @stack('modals')

    @livewireScripts
</body>

<script>
    function data() {
        return {
            slides: ['image/1.png'],
            isUserOpen: false,
            toggleUser() {
                this.isUserOpen = !this.isUserOpen
            },
            sidebar: {
                full: false,
                navOpen: false
            },
            tooltip: {
                show: false,
                visibleClass: 'block sm:absolute  sm:border border-gray-500 left-16 sm:text-sm sm:bg-gray-800 sm:px-2 sm:py-1 sm:rounded'
            },
            dropdown: {
                open: false,
                toggle(tap) {
                    this.open = !this.open;
                },
                expandedClass: 'border-gray-400 ml-4 pl-4',
                shrinkedClass: 'sm:absolute top-0 left-20 sm:shadow-md sm:z-10 sm:bg-gray-900 sm:rounded-md sm:p-4 border-l sm:border-none border-gray-400 ml-4 pl-4 sm:ml-0 w-28'
            }

        }
    }
</script>

</html>
