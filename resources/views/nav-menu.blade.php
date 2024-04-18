<nav class="bg-white border-gray-200">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-around mx-auto p-4">
        <button x-on:click="sidebarMenu.menuOpen = !sidebarMenu.menuOpen" class="block md:hidden">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
            </svg>
        </button>

        <a href="/" class="flex items-center space-x-3 rtl:space-x-reverse">
            <img src="https://flowbite.com/docs/images/logo.svg" class="h-8" alt="Flowbite Logo" />
            <span class="self-center text-2xl font-semibold whitespace-nowrap ">Logo</span>
        </a>

        <div class="relative hidden md:block w-1/2">
            <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                <svg class="w-4 h-4 text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 20 20">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                </svg>
            </div>
            <input type="text" id="search-navbar"
                class=" block w-full p-3 ps-10 text-sm font-semibold text-gray-900 border-2 border-gray-200 rounded-lg bg-white"
                placeholder="Pesquisa">
        </div>

        <div class="flex md:order-2 gap-5 items-center space-x-3 md:space-x-0 rtl:space-x-reverse">
            <button type="button" class="block md:hidden">
                <svg class="w-5 h-5 text-gray-700" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 20 20">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                </svg>
            </button>

            @auth
                <div class="hidden sm:block">
                    <span class="flex items-center rounded-md">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-8 h-8">
                            <path fill-rule="evenodd"
                                d="M18.685 19.097A9.723 9.723 0 0 0 21.75 12c0-5.385-4.365-9.75-9.75-9.75S2.25 6.615 2.25 12a9.723 9.723 0 0 0 3.065 7.097A9.716 9.716 0 0 0 12 21.75a9.716 9.716 0 0 0 6.685-2.653Zm-12.54-1.285A7.486 7.486 0 0 1 12 15a7.486 7.486 0 0 1 5.855 2.812A8.224 8.224 0 0 1 12 20.25a8.224 8.224 0 0 1-5.855-2.438ZM15.75 9a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0Z"
                                clip-rule="evenodd" />
                        </svg>

                        <button x-on:click="toggleUser()" @click.away="isUserOpen = false" type="button"
                            class="flex flex-col px-3 py-2 border border-transparent text-md leading-4 font-medium rounded-md text-gray-500 bg-white  transition ease-in-out duration-150">
                            <p>Bem vindo(a)</p>
                            <p class="text-blue-500">{{ Auth::user()->name }}</p>
                        </button>
                    </span>

                    <template x-if="isUserOpen">
                        <div class="z-50 fixed right-16 top-14 my-4 px-4 text-base list-none bg-white divide-y divide-gray-100 rounded shadow"
                            id="dropdown-2">
                            <div class="flex flex-col gap-3 px-4 py-3" role="none">
                                <a href="{{ route('ecommerce.conta-usuario') }}" class="text-sm text-gray-900" role="none">
                                    Minha Conta
                                </a>

                                <a href="{{ route('ecommerce.pedidos-usuario') }}" class="text-sm text-gray-900" role="none">
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
                <button class="hidden sm:flex gap-1 items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-8 h-8">
                        <path fill-rule="evenodd"
                            d="M18.685 19.097A9.723 9.723 0 0 0 21.75 12c0-5.385-4.365-9.75-9.75-9.75S2.25 6.615 2.25 12a9.723 9.723 0 0 0 3.065 7.097A9.716 9.716 0 0 0 12 21.75a9.716 9.716 0 0 0 6.685-2.653Zm-12.54-1.285A7.486 7.486 0 0 1 12 15a7.486 7.486 0 0 1 5.855 2.812A8.224 8.224 0 0 1 12 20.25a8.224 8.224 0 0 1-5.855-2.438ZM15.75 9a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0Z"
                            clip-rule="evenodd" />
                    </svg>

                    <a href="{{ route('login') }}" class="text-sm ">
                        <h1 class="text-sm font-semibold">Entrar <span class="font-medium">ou</span><br>
                            se cadastrar</h1>
                    </a>
                </button>
            @endguest

            <button x-on:click="sidebarCar.navOpen = !sidebarCar.navOpen" type="button" class="flex gap-1">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                </svg>
            </button>
        </div>
    </div>
</nav>
