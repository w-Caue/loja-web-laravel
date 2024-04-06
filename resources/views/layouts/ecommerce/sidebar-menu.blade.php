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
            class="focus:outline-none absolute left-72 top-2 p-1 text-gray-500 bg-gray-100 rounded-full shadow-md">

            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
            </svg>

        </button>

        <div class="m-4">
            @auth
                <div class="">

                    {{-- <hr class="h-px my-3 mx-9 bg-gray-300 border-0"> --}}

                    <div class="flex flex-col gap-5 uppercase my-9 mx-2 text-gray-600">
                        <h1 class="text-xl font-semibold text-gray-500">{{ Auth::user()->name }}</h1>

                        <a href=""
                            class="text-sm font-bold tracking-widest hover:scale-95 hover:text-blue-600 transition-all"
                            role="none">
                            Minha Conta
                        </a>

                        <a href=""
                            class="text-sm font-bold tracking-widest hover:scale-95 hover:text-blue-600 transition-all"
                            role="none">
                            Meus Pedidos
                        </a>

                        <ul class="" role="none">
                            <li>
                                <!-- Authentication -->
                                <form method="POST" action="{{ route('logout') }}" x-data>
                                    @csrf


                                    <a href="{{ route('logout') }}" @click.prevent="$root.submit();"
                                        class="text-sm text-red-400 font-bold tracking-widest hover:scale-95 hover:text-red-600 transition-all"
                                        role="none">
                                        Sair
                                    </a>
                                </form>
                            </li>

                        </ul>
                    </div>


                </div>

            @endauth

            @guest
                <button class="gap-1 items-center text-gray-500">
                    <a href="{{ route('login') }}" class="text-md ">
                        <h1 class="text-md font-semibold ">Entrar <span class="font-medium">ou</span>
                            Se Cadastrar</h1>
                    </a>
                </button>
            @endguest

        </div>

        <h1 class="py-1 text-xl font-semibold tracking-widest text-gray-500 text-center">
            Menu
        </h1>

        <hr class="h-px mx-9 bg-gray-300 border-0">

        <div class="px-4 space-y-4">
            <nav class=" bg-white">
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


    </div>

</div>
