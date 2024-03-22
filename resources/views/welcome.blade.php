@extends('layouts.ecommerce')

@section('content')
    <div class="bg-gray-100 min-h-screen flex items-center justify-center">
        <div x-data="{ slides : ['image/1.png', 'image/2.png', 'image/3.png'], activeSlideIndex :0, delay :1500}"
        x-init="() =>{
            setInterval(() => {
                delay -= 10

                if(delay === 0) {
                    if (activeSlideIndex === slides.length -1) {
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
                    <li x-bind:class="{'absolute inset-0 opacity-0': index !== activeSlideIndex}">
                        <img x-bind:src="slide" alt="">
                    </li>
                </template>
            </ul>
        </div>
    </div>
@endsection
