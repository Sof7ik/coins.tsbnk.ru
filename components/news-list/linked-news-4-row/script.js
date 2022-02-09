document.addEventListener("DOMContentLoaded", e => {
    const swiper1 = new Swiper('.linked-news-encyclopedia-detail', {
        navigation: {
            nextEl: '.linked-news-slider-navigation-wrapper .swiper-button-next',
            prevEl: '.linked-news-slider-navigation-wrapper .swiper-button-prev',
        },
        grabCursor: true,

        breakpoints: {
            0: {
                slidesPerView: 1,
                spaceBetween: 20,
            },
            576: {
                slidesPerView: 2,
                spaceBetween: 20,
            },
            992: {
                slidesPerView: 3,
                spaceBetween: 24,
            },
            1200: {
                slidesPerView: 4,
                spaceBetween: 30,
            }
        },
    });
})