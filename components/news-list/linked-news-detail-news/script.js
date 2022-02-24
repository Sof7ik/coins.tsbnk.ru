document.addEventListener("DOMContentLoaded", e => {
    const swiper = new Swiper(`.swiper.linked-detail-news-slider`, {
        navigation: {
            nextEl: ".slider-nav .swiper-button-next",
            prevEl: ".slider-nav .swiper-button-prev"
        },
        breakpoints: {
            1400: {
                spaceBetween: 100,
                slidesPerView: 3,
            },
            1200: {
                spaceBetween: 57,
                slidesPerView: 3,
            },
            992: {
                spaceBetween: 40,
                slidesPerView: 3,
            },
            // 768: {
            //     spaceBetween: 20,
            //     slidesPerView: 2,
            // },
            576: {
                slidesPerView: 2,
                spaceBetween: 20,
            },
            0: {
                slidesPerView: 1,
                spaceBetween: 20
            }
        }
    });
})