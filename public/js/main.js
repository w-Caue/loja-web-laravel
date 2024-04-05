
/* Header */
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
    setTimeout(showSlidess, 3000);
}
/* /Header */


/* --SWIPER-- */
/* --Slider Products-- */
let swiperCards = new Swiper('.card__content', {
    loop: false,
    spaceBetween: 20,
    grapCursor: true,

    pagination: {
        el: '.swiper-pagination',
        clickable: true,
        dynamicBullets: true,
    },

    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },

    breakpoints: {
        320: {
            slidesPerView: 1,
        },
        600: {
            slidesPerView: 3,
        },
        968: {
            slidesPerView: 4,
        },
    },
});
/* -/-Slider Products-/- */

let swiperGride = new Swiper('.grid__content', {
    slidesPerView: 4,

    grid: {
        rows: 2,
        fill: 2,
    },

    spaceBetween: 20,
});