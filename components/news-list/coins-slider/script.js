function coinPreviewHandler(event)
{
    const coinPreviewWrapper = event.currentTarget;

    const imagesQuantity = coinPreviewWrapper.children.length;
    const wrapperWidth = coinPreviewWrapper.clientWidth;

    const step = wrapperWidth / imagesQuantity;

    const wrapperRect = coinPreviewWrapper.getBoundingClientRect();

    const userPointerPosition = event.clientX - wrapperRect.left;
    console.log(userPointerPosition);

    const ff = step * userPointerPosition;

    console.log(ff);

    // console.log(imagesQuantity);
}


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
                slidesPerView: 4,
                spaceBetween: 30,
            }
        }
    });

    document.querySelectorAll('.linked-coins__coin-item .coin-item__images-preview')
        .forEach(wrapper => wrapper.addEventListener('mousemove', coinPreviewHandler))
})