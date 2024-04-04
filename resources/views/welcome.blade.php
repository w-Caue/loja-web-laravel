@extends('layouts.ecommerce')

@section('content')
    <nav class="hidden sm:block bg-white">
        <hr class="h-px mx-72 bg-gray-200 border-0 ">
        <div class="flex justify-center items-center gap-7 p-2 uppercase">
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

    <section class="">
        <div class="relative lg:mt-0 lg:col-span-10 lg:flex">
            <div class="slideshow-container ">

                <div class="mySlides fade">
                    <img src="image/1.png" alt="" class="rounded-b-lg w-full h-52 sm:h-auto">
                </div>

                <div class="mySlides fade">
                    <img src="image/2.png" alt="" class="rounded-b-lg w-full h-52 sm:h-auto">

                </div>

            </div>
        </div>
    </section>

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
                            <h3 id="card__name" class="text-lg font-semibold tracking-widest mb-1">Nome do Produto</h3>
                            <p id="description" class="font-normal mb-2 tracking-wider">Descrição do produto</p>

                            <a href="" id="card__button"
                                class="bg-orange-600 p-1 rounded my-5 font-semibold text-white">View More</a>
                        </div>
                    </article>

                </div>
            </div>


            <!-- Navigation buttons -->
            <div class="swiper-button-prev left-0 w-11 h-11 after:contents">
                <svg xmlns="http://www.w3.org/1600/svg" viewBox="0 0 24 24" fill="currentColor">
                    <path
                        d="M10.8284 12.0007L15.7782 16.9504L14.364 18.3646L8 12.0007L14.364 5.63672L15.7782 7.05093L10.8284 12.0007Z">
                    </path>
                </svg>
            </div>

            <div class="swiper-button-next right-0 w-11 h-11 after:contents">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                    <path
                        d="M13.1717 12.0007L8.22192 7.05093L9.63614 5.63672L16.0001 12.0007L9.63614 18.3646L8.22192 16.9504L13.1717 12.0007Z">
                    </path>
                </svg>
            </div>
        </div>

    </section>

    <div class="flex justify-center items-center mt-32">
        <hr class="h-px w-56 bg-gray-300 border-0 ">
        <h1 class="text-4xl uppercase font-semibold tracking-widest mx-4 ">Destaques</h1>
        <hr class="h-px w-56 bg-gray-300 border-0 ">
    </div>

    <section>
        <div class="swiper-container h-full grid__content">
            <div class="swiper-wrapper">
                <div class="swiper-slide h-[(calc(100% - 30px) / 2])">
                    <img src="image/img/1.jpeg" alt="" class="w-full h-full rounded-lg">
                </div>
                <div class="swiper-slide h-[(calc(100% - 30px) / 2])">
                    <img src="image/img/2.jpeg" alt="" class="w-full h-full rounded-lg">
                </div>

                <div class="swiper-slide h-[(calc(100% - 30px) / 2])">
                    <img src="image/img/4.jpeg" alt="" class="w-full h-full rounded-lg">
                </div>
                <div class="swiper-slide h-[(calc(100% - 30px) / 2])">
                    <img src="image/img/1.jpeg" alt="" class="w-full h-full rounded-lg">
                </div>

                <div class="swiper-slide h-[(calc(100% - 30px) / 2])">
                    <img src="image/img/2.jpeg" alt="" class="w-full h-full rounded-lg">
                </div>
                <div class="swiper-slide h-[(calc(100% - 30px) / 2])">
                    <img src="image/img/4.jpeg" alt="" class="w-full h-full rounded-lg">
                </div>

                <div class="swiper-slide h-[(calc(100% - 30px) / 2])">
                    <img src="image/img/1.jpeg" alt="" class="w-full h-full rounded-lg">
                </div>
                <div class="swiper-slide h-[(calc(100% - 30px) / 2])">
                    <img src="image/img/4.jpeg" alt="" class="w-full h-full rounded-lg">
                </div>

            </div>
        </div>
    </section>
@endsection
