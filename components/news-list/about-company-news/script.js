document.addEventListener("DOMContentLoaded", e => {
    const swiper = new Swiper('.last-news-about-company',
        {
            navigation: {
                nextEl: '.last-news__swiper-navingation-buttons .swiper-button-next',
                prevEl: '.last-news__swiper-navingation-buttons .swiper-button-prev',
            },
            breakpoints:
            {
                0: {
                    slidesPerView: 1,
                    spaceBetween: 20,
                },
                576:
                {
                    slidesPerView: 2,
                    spaceBetween: 20,
                },
                992:
                {
                    slidesPerView: 3,
                    spaceBetween: 25,
                },
                1400:
                {
                    slidesPerView: 3,
                    spaceBetween: 30,
                },
            }
        });
})