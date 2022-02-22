document.addEventListener("DOMContentLoaded", e => {
    const swiper = new Swiper('.swiper.mainpage-top-slider', {
        speed: 600,
        grabCursor: true,
        spaceBetween: 100,
        // autoplay: {
        //     speed: 600,
        //     delay: 4000,
        //     disableOnInteraction: false,
        //     pauseOnMouseEnter: true,
        // },
        loop: true,
        pagination: {
            el: '.swiper-pagination.mainpage-top-slider-pagination .content-container',
            type: 'bullets',
            bulletElement: "button",
            clickable: true,
            renderBullet: (index, className) => {
                return `<button class=${className}>${index + 1}</button>`
            }
        },
    });
})