<div x-cloak class=" flex justify-between">

    <div class="h-screen z-20 flex-shrink-0 bg-white transition-all duration-300 space-y-2 fixed"
        x-bind:class="{
            'w-80': !sidebarMenu.full,
            'top-0 left-0': sidebarMenu
                .menuOpen,
            'top-0 -left-80': !sidebarMenu.menuOpen
        }">

        <!-- {{-- sidebarMenu Toggle --}} -->
        <button x-on:click="sidebarMenu.menuOpen = !sidebarMenu.menuOpen"
            class="focus:outline-none absolute left-64 top-4 p-1 text-white bg-blue-500 rounded-full shadow-md">

            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                class="w-7 h-7">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
            </svg>

        </button>

        <div>
            @auth
                <div class="">
                    <h1 class="text-xl font-semibold m-5 text-gray-700">{{ Auth::user()->name }}</h1> 

                    <template x-if="isUserOpen">
                        <div class="z-50 fixed right-10 top-14 my-4 px-4 text-base list-none bg-white divide-y divide-gray-100 rounded shadow"
                            id="dropdown-2">
                            <div class="flex flex-col gap-3 px-4 py-3" role="none">
                                <a href="" class="text-sm text-gray-900" role="none">
                                    Minha Conta
                                </a>

                                <a href="" class="text-sm text-gray-900" role="none">
                                    Meus Pedidos
                                </a>
                            </div>
                            <ul class="py-1" role="none">
                                <li>
                                    <!-- Authentication -->
                                    <form method="POST" action="{{ route('logout') }}" x-data>
                                        @csrf

                                        <x-dropdown-link href="{{ route('logout') }}" @click.prevent="$root.submit();">
                                            {{ __('Sair') }}
                                        </x-dropdown-link>
                                    </form>
                                </li>

                            </ul>
                        </div>
                    </template>
                </div>

            @endauth

            @guest
                <button class="hidden sm:flex gap-1 items-center m-5 text-gray-700">
                    <a href="{{ route('login') }}" class="text-md ">
                        <h1 class="text-md font-semibold ">Entrar <span class="font-medium">ou</span>
                            Se Cadastrar</h1>
                    </a>
                </button>
            @endguest

        </div>

        <hr class="h-px mx-9 bg-gray-400 border-0">

        <div class="px-4 space-y-4">
            <nav class="hidden sm:block bg-white">
                <hr class="h-px mx-72 bg-gray-200 border-0 ">
                <div class="flex flex-col justify-end items-start text-gray-600 gap-7 p-2 uppercase">
                    <a href=""
                        class="text-md font-bold tracking-widest hover:scale-95 hover:text-blue-600 transition-all">Promoções</a>
                    <a href=""
                        class="text-md font-bold tracking-widest hover:scale-95 hover:text-blue-600 transition-all">Camisas</a>
                    <a href=""
                        class="text-md font-bold tracking-widest hover:scale-95 hover:text-blue-600 transition-all">Novidades</a>
                    <a href=""
                        class="text-md font-bold tracking-widest hover:scale-95 hover:text-blue-600 transition-all">Destaques</a>
                </div>
            </nav>
        </div>

        <hr class="h-px my-8 mx-9 bg-gray-400 border-0">
    </div>

</div>
