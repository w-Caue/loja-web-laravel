<!DOCTYPE html>
<html x-data="data()" lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

   <!-- Scripts -->
   @vite(['resources/css/app.css', 'resources/js/app.js'])
   <style>
       [x-cloak] {
           display: none;
       }
   </style>

   <!-- Styles -->
   @livewireStyles
</head>

<body class="font-sans antialiased">

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

   @stack('modals')

   @livewireScripts
   @livewireScriptConfig

   {{-- <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

   <x-livewire-alert::scripts /> --}}
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
