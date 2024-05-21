<!doctype html>
<html x-data="data()" lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>AcademyWeb</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

    <!-- Fonts -->
    {{-- <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Freeman&display=swap" rel="stylesheet"> --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200..1000;1,200..1000&display=swap"
        rel="stylesheet">

    {{-- <link rel="stylesheet" href="{{ asset('css/swiper-bundle.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}"> --}}

    @vite('resources/css/app.css', 'resources/js/alpine/start.js')

    <style>
        [x-cloak] {
            display: none;
        }
    </style>

    @livewireStyles
</head>

<body>
    <div class="flex h-screen bg-gray-200 dark:bg-gray-900">
        @include('layouts.admin.navbar')

        @include('layouts.admin.sidebar')

        <div class="flex flex-col flex-1 w-full mt-16">
            <main class="h-full pb-16 overflow-y-auto">
                <!-- Remove everything INSIDE this div to a really blank page -->
                <div class="container px-6 mx-auto grid">
                    {{ $slot }}
                </div>
            </main>
        </div>

    </div>

    {{-- <script src="{{ asset('js/swiper-bundle.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/gsap.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/ScrollTrigger.min.js"></script>
    <script src="{{ asset('js/main.js') }}"></script> --}}

    @livewireScripts

    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    {{-- <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/Observer.min.js"></script> --}}

    {{-- <x-livewire-alert::scripts /> --}}

</body>

<script>
    function data() {
        return {
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
