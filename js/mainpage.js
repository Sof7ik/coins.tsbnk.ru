function topSliderParallax(event)
{
    const target = event.currentTarget;

    const bg = target.querySelector(".slide-bg");

    let koef = (event.clientX * 2 / target.clientWidth) - 1;

    let koef2 = koef * (-5);

    target.querySelector(".content-container").style.transform = `translateX(${koef2}%)`;

    let bgKoef = koef * 10;

    bg.style.left = `${bgKoef}%`;
}

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

        breakpoints: {
            0: {
                spaceBetween: 20,
            },
            700: {
                spaceBetween: 100
            }
        }
    });

    document.querySelectorAll(".mainpage-top-slider .swiper-slide").forEach(slide => {
        slide.addEventListener("mousemove", topSliderParallax);
    })
})