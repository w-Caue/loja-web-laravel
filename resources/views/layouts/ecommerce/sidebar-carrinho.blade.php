<div x-cloak class=" flex justify-between">

    <div class="h-screen z-20 flex-shrink-0 bg-white transition-all duration-300 space-y-2 fixed"
        x-bind:class="{
            'w-96': !sidebar.full,
            'top-0 right-0': sidebar
                .navOpen,
            'top-0 -right-96': !sidebar.navOpen
        }">

        <!-- {{-- Sidebar Toggle --}} -->
        <button x-on:click="sidebar.navOpen = !sidebar.navOpen" 
            class="focus:outline-none absolute right-80 top-6 p-1 text-white bg-blue-500 rounded-full shadow-md">

            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
            </svg>

        </button>

        <h1 class="py-4 text-2xl font-semibold tracking-widest text-gray-700 text-center">
            Carrinho
        </h1>

        <hr class="h-px my-8 mx-5 bg-gray-400 border-0">

        <div class="px-4 space-y-4">

            

        </div>
    </div>

</div>
