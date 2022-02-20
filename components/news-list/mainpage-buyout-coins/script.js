document.addEventListener('DOMContentLoaded', e => {
    const swiper = new Swiper('.swiper.buyout-coins-slider', {
        grabCursor: true,
        slidesPerView: 2,
        breakpoints: {
            1200: {
                spaceBetween: 30,
            },
            992: {
                spaceBetween: 25,
                navigation: {
                    prevEl: ".desktop-buyout-coins-nav-wrapper .swiper-button-prev",
                    nextEl: ".desktop-buyout-coins-nav-wrapper .swiper-button-next"
                }
            },
            569: {
                slidesPerView: 2,
                spaceBetween: 20,
                navigation: {
                    prevEl: ".mobile-buyout-coins-slider-nav .swiper-button-prev",
                    nextEl: ".mobile-buyout-coins-slider-nav .swiper-button-next"
                }
            },
            0: {
                slidesPerView: 1,
                spaceBetween: 20,
                navigation: {
                    prevEl: ".mobile-buyout-coins-slider-nav .swiper-button-prev",
                    nextEl: ".mobile-buyout-coins-slider-nav .swiper-button-next"
                }
            }
        }
    });
});