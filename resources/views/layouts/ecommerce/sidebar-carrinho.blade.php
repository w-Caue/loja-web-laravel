<div x-cloak class=" flex justify-between">

    <div class="h-screen z-20 flex-shrink-0 bg-white transition-all duration-300 space-y-2 fixed"
        x-bind:class="{
            'w-80': !sidebarCar.full,
            'top-0 right-0': sidebarCar
                .navOpen,
            'top-0 -right-80': !sidebarCar.navOpen
        }">

        <!-- {{-- sidebarCar Toggle --}} -->
        <button x-on:click="sidebarCar.navOpen = !sidebarCar.navOpen"
            class="focus:outline-none absolute rigth-72 top-2 p-1 mx-1 text-gray-500 bg-gray-100 rounded-full shadow-md">

            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
            </svg>

        </button>

        <div class="my-16">
            <h1 class="py-4 text-2xl font-semibold tracking-widest text-gray-700 text-center">
                Carrinho
            </h1>

            <hr class="h-px  mx-5 bg-gray-400 border-0">
        </div>



        <div class="px-4 space-y-4">



        </div>
    </div>

</div>
