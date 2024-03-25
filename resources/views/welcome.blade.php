@extends('layouts.ecommerce')

@section('content')
    <section class="bg-white">
        <div class="grid max-w-screen-xl px-4 pt-20 pb-8 mx-auto lg:gap-8 xl:gap-0 lg:py-16 lg:grid-cols-12 lg:pt-28">
            <div class="mr-auto place-self-center lg:col-span-7">
                <h1 class="max-w-2xl mb-4 text-4xl font-extrabold leading-none tracking-tight md:text-4xl xl:text-6xl">
                    Sabor em Cada Mordida: Pizzas e Hambúrgueres Irresistíveis <br></h1>
                <p class="max-w-2xl mb-6 font-light text-gray-500 lg:mb-8 md:text-lg lg:text-xl dark:text-gray-400">
                    Explore a delícia em nosso menu! Pizzas cheias de sabor e hambúrgueres suculentos - [Nome da
                    Lanchonete] é o paraíso para quem ama uma boa mordida. Ingredientes frescos, combinações únicas e
                    muita paixão. Venha saborear o melhor da cidade!</p>

            </div>
            <div class="hidden lg:mt-0 lg:col-span-5 lg:flex">
                {{-- <div class="bg-gray-100 flex items-center justify-center">
                    <div x-data="{ slides: ['image/1.png', 'image/2.png', 'image/3.png'], activeSlideIndex: 0, delay: 1500 }" x-init="() => {
                        setInterval(() => {
                            delay -= 10
                    
                            if (delay === 0) {
                                if (activeSlideIndex === slides.length - 1) {
                                    activeSlideIndex = 0
                                } else {
                                    activeSlideIndex += 1
                                }
                    
                                delay = 1500
                            }
                        }, 10)
                    }"
                        class="bg-white rounded-md shadow-sm max-w-sm overflow-hidden">

                        <ul class="relative">
                            <template x-for="(slide, index) in slides">
                                <li x-bind:class="{ 'absolute inset-0 opacity-0': index !== activeSlideIndex }">
                                    <img x-bind:src="slide" alt="">
                                </li>
                            </template>
                        </ul>
                    </div>
                </div> --}}

                <div id="slide">
                    <div id="list" class="relative h-full flex justify-center w-full">
                        <div id="item">
                            <img src="image/1.png" alt="" class="h-60">
                        </div>

                        <div class=" absolute top-32 left-12 flex justify-between w-full">
                            <button class="bg-gray-200 p-1 rounded-full">
                                <svg class="w-4 h-4" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                                    viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="m15 19-7-7 7-7" />
                                </svg>
                            </button>

                            <button class="bg-gray-200 p-1 rounded-full">
                                <svg class="w-4 h-4" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                                    viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="m9 5 7 7-7 7" />
                                </svg>
                            </button>
                        </div>

                        <ul class=" absolute bottom-1 w-full flex justify-center gap-3">
                            <li class="bg-gray-400 rounded-full p-1"></li>
                            <li class="bg-gray-400 rounded-full p-1"></li>
                            <li class="bg-gray-400 rounded-full p-1"></li>
                            <li class="bg-gray-400 rounded-full p-1"></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script></script>
@endsection
