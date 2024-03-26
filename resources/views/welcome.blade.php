@extends('layouts.ecommerce')

@section('content')
    <section class="bg-white">
        <div class=" relative lg:mt-0 lg:col-span-10 lg:flex">
            <div class="slideshow-container ">
                
                <div class="mySlides fade">
                    <img src="image/2.png" alt="" class="rounded-b-lg w-full">
                </div>

                <div class="mySlides fade">
                    <img src="image/3.png" alt="" class="rounded-b-lg w-full">
                </div>

            </div>

            {{-- <div class="absolute top-48 flex justify-between w-full">
                <button onclick="plusSlides(-1)" class="prev bg-gray-200 p-2 mx-1 rounded-full">
                    <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
                        height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m15 19-7-7 7-7" />
                    </svg>
                </button>

                <button onclick="plusSlides(1)" class="next bg-gray-200 p-2 mx-1 rounded-full">
                    <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
                        height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m9 5 7 7-7 7" />
                    </svg>
                </button>
            </div> --}}

        </div>
    </section>

    <script>
        var slideIndex = 1;

        showSlides(slideIndex);

        function plusSlides(n) {
            showSlides(slideIndex += n)
        }

        function currentSlide(n) {
            showSlides(slideIndex = n)
        }

        function showSlides(n) {
            var i;
            var slides = document.getElementsByClassName('mySlides');

            if (n > slides.length) {
                slideIndex = 1
            }
            if (n < 1) {
                slideIndex = slides.length
            }

            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = 'none';
            }

            slides[slideIndex - 1].style.display = 'block';
        }

        //auto slide
        var slideIndex = 0;
        showSlidess();

        function showSlidess() {
            var i;
            var slides = document.getElementsByClassName('mySlides');

            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = 'none';
            }

            slideIndex++;

            if (slideIndex > slides.length) {
                slideIndex = 1;
            }
            slides[slideIndex - 1].style.display = 'block';
            setTimeout(showSlidess, 2000);
        }
    </script>
@endsection
