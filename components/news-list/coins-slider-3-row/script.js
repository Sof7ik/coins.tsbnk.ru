document.addEventListener("DOMContentLoaded", e => {
    const swiper = new Swiper('.linked-coins__slider', {
        grabCursor: true,

        navigation: {
            nextEl: '.linked-coins-slider__navigation .swiper-button-next',
            prevEl: '.linked-coins-slider__navigation .swiper-button-prev',
        },

        breakpoints:
        {
            0: {
                slidesPerView: 1,
                spaceBetween: 20,

                navigation: {
                    nextEl: '.mobile-linked-coins-slider-navigation .swiper-button-next',
                    prevEl: '.mobile-linked-coins-slider-navigation .swiper-button-prev',
                },
            },
            576: {
                slidesPerView: 2,
                spaceBetween: 20,

                navigation: {
                    nextEl: '.mobile-linked-coins-slider-navigation .swiper-button-next',
                    prevEl: '.mobile-linked-coins-slider-navigation .swiper-button-prev',
                },
            },
            992: {
                slidesPerView: 3,
                spaceBetween: 24,
            },
            1200: {
                slidesPerView: 3,
                spaceBetween: 30,
            }
        }
    });
})