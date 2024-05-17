@extends('layouts.ecommerce')

@section('content')
    <main class="grid lg:grid-cols-2 place-items-center mx-6 pt-16 pb-8 md:pt-8">
        <div class="py-6 md:order-1 hidden md:block">
            <img src="https://private-user-images.githubusercontent.com/123313244/299048076-dd1c4271-0777-4c05-b4be-198ec5899800.png"
                alt="Astronaut in the air" loading="eager" format="avif" />
        </div>
        <div>
            <h1 class="text-lg"><span class="font-bold text-slate-800">Academia</span><span
                    class="text-purple-500 font-semibold">Web</span>
            </h1>
            <h1
                class="max-w-2xl mb-4 text-gray-800 text-4xl font-extrabold leading-none tracking-tight md:text-4xl xl:text-6xl">
                Sistema para a sua Academia
            </h1>
            <p class="text-lg mt-4 text-slate-600 max-w-xl">
                Transforme a maneira como você administra seu negócio com o nosso avançado Sistema de Gestão,
                um ERP online projetado para otimizar todos os aspectos da sua operação.
            </p>
            <div class="mt-6 flex flex-col sm:flex-row gap-3">
                <a href="#" class="text-white font-semibold bg-purple-500 p-2 rounded">Virar Membro</a>
                <a class="text-black font-semibold border-2 border-black p-2 rounded">Ver planos
                </a>
            </div>
        </div>
    </main>

    <main>

        <div class="flex justify-center items-center mt-20">
            <hr class="h-px w-56 bg-gray-300 border-0 ">
            <h1 class="text-4xl uppercase font-semibold tracking-widest mx-4 ">Em Promoção</h1>
            <hr class="h-px w-56 bg-gray-300 border-0 ">
        </div>

        <section id="container" class="m-7 flex justify-end items-end">

            <div id="card__container" class="swiper">
                <div id="" class="card__content ms-4 rounded-md overflow-hidden h-full">
                    <div class="swiper-wrapper">

                        <article class="w-55 rounded-md overflow-hidden bg-white swiper-slide">
                            <div class="relative pt-2 mb-[-44px]">
                                <img src="image/img/1.jpeg" alt="" class="relative h-64 z-10 my-0 mx-auto rounded">
                            </div>

                            <div id="card__data" class="relative z-20 bg-gray-200 rounded-lg p-2 text-center">
                                <h3 id="card__name" class="text-lg font-semibold tracking-widest mb-1">Nome do Produto</h3>
                                <p id="description" class="font-normal mb-2 tracking-wider">Descrição do produto</p>

                                <a href="" id="card__button"
                                    class="bg-orange-600 p-1 rounded my-5 font-semibold text-white">View More</a>
                            </div>
                        </article>

                        <article class="w-55 rounded-md overflow-hidden bg-white swiper-slide">
                            <div class="relative pt-2 mb-[-44px]">
                                <img src="image/img/2.jpeg" alt="" class="relative h-64 z-10 my-0 mx-auto rounded">
                            </div>

                            <div id="card__data" class="relative z-20 bg-gray-200 rounded-lg p-2 text-center">
                                <h3 id="card__name" class="text-lg font-semibold tracking-widest mb-1">Nome do Produto</h3>
                                <p id="description" class="font-normal mb-2 tracking-wider">Descrição do produto</p>

                                <a href="" id="card__button"
                                    class="bg-orange-600 p-1 rounded my-5 font-semibold text-white">View More</a>
                            </div>
                        </article>

                        <article class="w-55 rounded-md overflow-hidden bg-white swiper-slide">
                            <div class="relative pt-2 mb-[-44px]">
                                <img src="image/img/3.jpeg" alt="" class="relative h-64 z-10 my-0 mx-auto rounded">
                            </div>

                            <div id="card__data" class="relative z-20 bg-gray-200 rounded-lg p-2 text-center">
                                <h3 id="card__name" class="text-lg font-semibold tracking-widest mb-1">Nome do Produto</h3>
                                <p id="description" class="font-normal mb-2 tracking-wider">Descrição do produto</p>

                                <a href="" id="card__button"
                                    class="bg-orange-600 p-1 rounded my-5 font-semibold text-white">View More</a>
                            </div>
                        </article>

                        <article class="w-55 rounded-md overflow-hidden bg-white swiper-slide">
                            <div class="relative pt-2 mb-[-44px]">
                                <img src="image/img/4.jpeg" alt="" class="relative h-64 z-10 my-0 mx-auto rounded">
                            </div>

                            <div id="card__data" class="relative z-20 bg-gray-200 rounded-lg p-2 text-center">
                                <h3 id="card__name" class="text-lg font-semibold tracking-widest mb-1">Nome do Produto</h3>
                                <p id="description" class="font-normal mb-2 tracking-wider">Descrição do produto</p>

                                <a href="" id="card__button"
                                    class="bg-orange-600 p-1 rounded my-5 font-semibold text-white">View More</a>
                            </div>
                        </article>

                        <article class="w-55 rounded-md overflow-hidden bg-white swiper-slide">
                            <div class="relative pt-2 mb-[-44px]">
                                <img src="image/img/5.jpeg" alt="" class="relative h-64 z-10 my-0 mx-auto rounded">
                            </div>

                            <div id="card__data" class="relative z-20 bg-gray-200 rounded-lg p-2 text-center">
                                <h3 id="card__name" class="text-lg font-semibold tracking-widest mb-1">Nome do Produto</h3>
                                <p id="description" class="font-normal mb-2 tracking-wider">Descrição do produto</p>

                                <a href="" id="card__button"
                                    class="bg-orange-600 p-1 rounded my-5 font-semibold text-white">View More</a>
                            </div>
                        </article>

                        <article class="w-55 rounded-md overflow-hidden bg-white swiper-slide">
                            <div class="relative pt-2 mb-[-44px]">
                                <img src="image/img/6.jpeg" alt="" class="relative h-64 z-10 my-0 mx-auto rounded">
                            </div>

                            <div id="card__data" class="relative z-20 bg-gray-200 rounded-lg p-2 text-center">
                                <h3 id="card__name" class="text-lg font-semibold tracking-widest mb-1">Nome do Produto
                                </h3>
                                <p id="description" class="font-normal mb-2 tracking-wider">Descrição do produto</p>

                                <a href="" id="card__button"
                                    class="bg-orange-600 p-1 rounded my-5 font-semibold text-white">View More</a>
                            </div>
                        </article>

                    </div>
                </div>


                <!-- Navigation buttons -->
                <div
                    class="swiper-button-prev left-0 w-9 h-9 bg-gray-300 rounded-full opacity-30 hover:opacity-75 transition-all after:contents">
                    <svg xmlns="http://www.w3.org/1600/svg" viewBox="0 0 24 24" fill="currentColor">
                        <path
                            d="M10.8284 12.0007L15.7782 16.9504L14.364 18.3646L8 12.0007L14.364 5.63672L15.7782 7.05093L10.8284 12.0007Z">
                        </path>
                    </svg>
                </div>

                <div
                    class="swiper-button-next right-0 w-9 h-9 bg-gray-300 rounded-full opacity-30 hover:opacity-75 transition-all after:contents">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                        <path
                            d="M13.1717 12.0007L8.22192 7.05093L9.63614 5.63672L16.0001 12.0007L9.63614 18.3646L8.22192 16.9504L13.1717 12.0007Z">
                        </path>
                    </svg>
                </div>
            </div>

        </section>

        <section class="container-animation mt-20">
            <div class="flex justify-center flex-col sm:flex-row gap-7 h-full mx-7">

                <article class="rounded-md overflow-hidden">
                    <div class="relative pt-2 mb-[-56px] ">
                        <img src="image/img/1.jpeg" alt="" class="relative z-10 my-0 mx-auto rounded h-96">
                    </div>

                    <div id="card__data" class="relative z-20 rounded-lg p-2 text-center">
                        <h3 class="text-4xl text-white font-semibold tracking-widest mb-1">Categoria</h3>
                    </div>
                </article>

                <article class="rounded-md overflow-hidden">
                    <div class="relative pt-2 mb-[-56px]">
                        <img src="image/img/1.jpeg" alt="" class="relative z-10 my-0 mx-auto rounded h-96">
                    </div>

                    <div id="card__data" class="relative z-20 rounded-lg p-2 text-center">
                        <h3 class="text-4xl text-white font-semibold tracking-widest mb-1">Categoria</h3>
                    </div>
                </article>

                <article class="rounded-md overflow-hidden">
                    <div class="relative pt-2 mb-[-56px]">
                        <img src="image/img/1.jpeg" alt="" class="relative z-10 my-0 mx-auto rounded h-96">
                    </div>

                    <div id="card__data" class="relative z-20 rounded-lg p-2 text-center">
                        <h3 class="text-4xl text-white font-semibold tracking-widest mb-1">Categoria</h3>
                    </div>
                </article>
            </div>
        </section>

        <div class="flex justify-center items-center mt-32">
            <hr class="h-px w-56 bg-gray-300 border-0 ">
            <h1 class="text-4xl uppercase font-semibold tracking-widest mx-4 ">Destaques</h1>
            <hr class="h-px w-56 bg-gray-300 border-0 ">
        </div>

        <section class="container-animation">
            <div class="swiper-container h-full grid__content m-12 overflow-hidden">
                <div class="swiper-wrapper">

                    <article class="rounded-md overflow-hidden  swiper-slide">
                        <div class="">
                            <img src="image/img/4.jpeg" alt="" class="relative h-64 z-10 my-0 mx-auto rounded">
                        </div>

                    </article>

                    <article class="rounded-md overflow-hidden swiper-slide">
                        <div class="">
                            <img src="image/img/2.jpeg" alt="" class="relative h-64 z-10 my-0 mx-auto rounded">
                        </div>

                    </article>

                    <article class="rounded-md overflow-hidden swiper-slide">
                        <div class="">
                            <img src="image/img/1.jpeg" alt="" class="relative h-64 z-10 my-0 mx-auto rounded">
                        </div>

                    </article>

                    <article class="rounded-md overflow-hidden swiper-slide">
                        <div class="">
                            <img src="image/img/2.jpeg" alt="" class="relative h-64 z-10 my-0 mx-auto rounded">
                        </div>

                    </article>

                    <article class="rounded-md overflow-hidden swiper-slide">
                        <div class="">
                            <img src="image/img/4.jpeg" alt="" class="relative h-64 z-10 my-0 mx-auto rounded">
                        </div>

                    </article>

                    <article class="rounded-md overflow-hidden swiper-slide">
                        <div class="">
                            <img src="image/img/2.jpeg" alt="" class="relative h-64 z-10 my-0 mx-auto rounded">
                        </div>

                    </article>

                    <article class="rounded-md overflow-hidden swiper-slide">
                        <div class="">
                            <img src="image/img/1.jpeg" alt="" class="relative h-64 z-10 my-0 mx-auto rounded">
                        </div>

                    </article>

                    <article class="rounded-md overflow-hidden swiper-slide">
                        <div class="">
                            <img src="image/img/4.jpeg" alt="" class="relative h-64 z-10 my-0 mx-auto rounded">
                        </div>

                    </article>

                    <article class="rounded-md overflow-hidden swiper-slide">
                        <div class="">
                            <img src="image/img/1.jpeg" alt="" class="relative h-64 z-10 my-0 mx-auto rounded">
                        </div>

                    </article>

                </div>
            </div>
        </section>

    </main>

    <x-footer></x-footer>
@endsection
