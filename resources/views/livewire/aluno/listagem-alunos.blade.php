<div>
    <div class="w-full my-4">
        <div class="flex justify-between mx-5 py-3">
            <div class="relative mt-2">
                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                    <svg class="w-4 h-4 text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 20 20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                    </svg>
                </div>
                <input wire:model.live="pesquisa" type="text" id="table-search"
                    class="p-2 pl-10 text-sm text-gray-600 font-semibold rounded-md sm:w-72 bg-white dark:bg-gray-800 dark:text-white"
                    placeholder="Pesquisar {{ $sortField }}">
            </div>

            <div class="fle justify-center items-center gap-1">
                <x-buttons.button-primary x-data x-on:click="$dispatch('open-modal-md')" x-data="{ isOpen: false }" x-on:mouseover="isOpen = true"
                    x-on:mouseleave="isOpen = false">
                    <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                        <path d="M11 11V5H13V11H19V13H13V19H11V13H5V11H11Z"></path>
                    </svg>

                    <span x-show="isOpen" x-transition x-transition.duration.200ms>Novo Cadastro</span>
                </x-buttons.button-primary>

                <button class="p-2">
                    <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                        <path d="M10 18H14V16H10V18ZM3 6V8H21V6H3ZM6 13H18V11H6V13Z"></path>
                    </svg>
                </button>
            </div>

        </div>

        <div wire:init="load" class="w-full overflow-hidden rounded-lg shadow-xs hidden sm:block">
            <div class="w-full overflow-x-auto">
                <table class="w-full">
                    <thead>
                        <tr
                            class="text-xs font-semibold tracking-wide text-center text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                            <th class="px-4 py-3">
                                <div class="flex items-center cursor-pointer" wire:click="sortFilter('id')">
                                    <button class="text-xs font-medium leading-4 tracking-wider uppercase">Cod</button>
                                    @include('includes.icon-filter', ['field' => 'id'])
                                </div>
                            </th>
                            <th class="px-4 py-3 text-center">
                                <div class="flex items-center cursor-pointer" wire:click="sortFilter('Nome')">
                                    <button class="text-xs font-medium leading-4 tracking-wider uppercase">Nome</button>
                                    @include('includes.icon-filter', ['field' => 'nome'])
                                </div>
                            </th>
                            <th class="px-4 py-3 flex justify-center">
                                <div class="flex items-center cursor-pointer" wire:click="sortFilter('Whatsapp')">
                                    <button
                                        class="text-xs font-medium leading-4 tracking-wider uppercase">Telefone</button>
                                    @include('includes.icon-filter', ['field' => 'whatsapp'])
                                </div>
                            </th>
                            {{-- <th class="px-4 py-3">Status</th> --}}
                            <th class="px-4 py-3">Data Cadastro</th>
                            <th class="px-4 py-3">Ações</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
                        @foreach ($pessoas as $pessoa)
                            <tr wire:key="{{ $pessoa->id }}" class="text-gray-700 font-semibold dark:text-gray-400">
                                <td class="px-4 py-3 text-sm">
                                    {{ $pessoa->id }}
                                </td>

                                <td class="px-1 py-3">
                                    <div class="flex items-center text-sm">
                                        <!-- Avatar with inset shadow -->
                                        <div class="relative hidden mx-2 md:block">
                                            <svg class="w-6 h-6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                fill="none" viewBox="0 0 20 20">
                                                <path stroke="currentColor" stroke-linecap="round"
                                                    stroke-linejoin="round" stroke-width="1.5"
                                                    d="M10 19a9 9 0 1 0 0-18 9 9 0 0 0 0 18Zm0 0a8.949 8.949 0 0 0 4.951-1.488A3.987 3.987 0 0 0 11 14H9a3.987 3.987 0 0 0-3.951 3.512A8.948 8.948 0 0 0 10 19Zm3-11a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                            </svg>
                                        </div>
                                        <div>
                                            <p class="">{{ $pessoa->name }}</p>
                                            <p class="text-xs text-gray-600 dark:text-gray-400">
                                                {{ $pessoa->type }}
                                            </p>
                                        </div>
                                    </div>
                                </td>

                                <td class="px-4 py-3 text-sm text-center">
                                    {{ $pessoa->numero }}
                                </td>
                                {{-- <td class="px-4 py-3 text-xs">
                                    @if ($pessoa->status == 'Ativo')
                                        <span
                                            class="px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-full dark:bg-green-700 dark:text-green-100">
                                            {{ $pessoa->status }}
                                        </span>
                                    @else
                                        <span
                                            class="px-2 py-1 font-semibold leading-tight text-red-700 bg-green-100 rounded-full dark:bg-red-700 dark:text-green-100">
                                            {{ $pessoa->status }}
                                        </span>
                                    @endif
                                </td> --}}
                                <td class="px-4 py-3 text-sm text-center">
                                    {{ date('d/m/Y', strtotime($pessoa->created_at)) }}
                                </td>
                                <td class="px-4 py-3 flex justify-center">
                                    <div class="flex items-center space-x-2 text-sm">
                                        <a href=" {{ route('pessoal.show', ['codigo' => $pessoa->id]) }}"
                                            class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-purple-600 rounded-lg hover:scale-105 dark:hover:text-purple-600 dark:text-gray-400 focus:outline-none focus:shadow-outline-gray"
                                            aria-label="Edit">
                                            <svg class="w-5 h-5" aria-hidden="true" fill="currentColor"
                                                viewBox="0 0 20 20">
                                                <path
                                                    d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z">
                                                </path>
                                            </svg>
                                        </a>

                                        <button
                                            class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-purple-600 rounded-lg hover:scale-95 dark:hover:text-purple-600
                                             dark:text-gray-400 focus:outline-none focus:shadow-outline-gray"
                                            aria-label="Delete">
                                            <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                fill="currentColor">
                                                <path
                                                    d="M18.031 16.6168L22.3137 20.8995L20.8995 22.3137L16.6168 18.031C15.0769 19.263 13.124 20 11 20C6.032 20 2 15.968 2 11C2 6.032 6.032 2 11 2C15.968 2 20 6.032 20 11C20 13.124 19.263 15.0769 18.031 16.6168ZM16.0247 15.8748C17.2475 14.6146 18 12.8956 18 11C18 7.1325 14.8675 4 11 4C7.1325 4 4 7.1325 4 11C4 14.8675 7.1325 18 11 18C12.8956 18 14.6146 17.2475 15.8748 16.0247L16.0247 15.8748ZM12.1779 7.17624C11.4834 7.48982 11 8.18846 11 9C11 10.1046 11.8954 11 13 11C13.8115 11 14.5102 10.5166 14.8238 9.82212C14.9383 10.1945 15 10.59 15 11C15 13.2091 13.2091 15 11 15C8.79086 15 7 13.2091 7 11C7 8.79086 8.79086 7 11 7C11.41 7 11.8055 7.06167 12.1779 7.17624Z">
                                                </path>
                                            </svg>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

    </div>

    {{-- Listagem Mobile --}}
    <div class="w-full sm:hidden md:hidden lg:hidden">
        <div class="flex flex-col justify-center">
            @foreach ($pessoas as $pessoa)
                <div wire:key="{{ $pessoa->id }}"
                    class="text-md font-semibold text-gray-700 p-2 my-1 bg-gray-50 rounded-lg dark:text-white dark:bg-gray-800">
                    <div class="flex justify-between items-center">
                        <span class="text-blue-500">#{{ $pessoa->id }}</span>

                        <a href=" {{ route('pessoal.show', ['codigo' => $pessoa->id]) }}"
                            class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-purple-600 rounded-lg hover:scale-105 dark:hover:text-purple-600 dark:text-gray-400 focus:outline-none focus:shadow-outline-gray"
                            aria-label="Edit">
                            <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z">
                                </path>
                            </svg>
                        </a>
                    </div>
                    <div class="flex justify-between my-2">
                        <p class="flex flex-wrap">{{ $pessoa->nome }}</p>
                        <p class="text-gray-400">{{ $pessoa->tipo }}</p>
                    </div>

                    <p class="flex flex-wrap">{{ $pessoa->email }}</p>

                    <div class="flex justify-between items-center">
                        <p class="text-gray-400">{{ $pessoa->whatsapp }}</p>

                        @if ($pessoa->status == 'Ativo')
                            <span
                                class="px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-full dark:bg-green-700 dark:text-green-100">
                                {{ $pessoa->status }}
                            </span>
                        @else
                            <span
                                class="px-2 py-1 font-semibold leading-tight text-red-700 bg-green-100 rounded-full dark:bg-red-700 dark:text-green-100">
                                {{ $pessoa->status }}
                            </span>
                        @endif
                    </div>
                </div>
            @endforeach

        </div>
    </div>
    {{-- /Listagem Mobile --}}

    {{-- <div class="mx-2 mt-2">
        {{ $this->dados()->links('layouts.paginate') }}
    </div> --}}
</div>
