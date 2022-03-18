let linkedCoinsImagesPerItem = {};

function getImagesPerCoin(node) {
    const nodeID = node.dataset.coinId;

    if (node.querySelector(".images-count")) {
        const imagesQnty = node.querySelector(".images-count").children.length;
        linkedCoinsImagesPerItem[nodeID] = { images: imagesQnty };
    }
}

function coinPreviewHandler(event) {
    const coinPreviewWrapper = event.currentTarget;
    const coinID = coinPreviewWrapper.closest('.linked-coins__coin-item').dataset.coinId;

    const imagesQuantity = linkedCoinsImagesPerItem[coinID].images;
    const wrapperWidth = coinPreviewWrapper.clientWidth;

    // ширина одной части для показа изображения
    const step = wrapperWidth / imagesQuantity;

    const wrapperRect = coinPreviewWrapper.getBoundingClientRect();

    const userPointerPosition = event.clientX - wrapperRect.left;
    // console.log(userPointerPosition);

    let imageNum = parseInt(Math.abs((userPointerPosition / step)).toFixed());

    // console.log("itemNum old", imageNum);
    // console.log("images skolko", imagesQuantity);
    // console.log("_______________________________________________");

    if (imageNum > imagesQuantity - 1) {
        imageNum = imageNum - 1;
    }

    // console.log("image", imageNum);

    if (!coinPreviewWrapper.querySelector(`img:nth-child(${imageNum + 1})`).classList.contains("active")) {
        // hide image
        coinPreviewWrapper.querySelector('img.active').classList.remove("active");

        // deactive thumb
        coinPreviewWrapper.closest(".linked-coins__coin-item")
            .querySelector('.images-count__position.active').classList.remove("active");

        coinPreviewWrapper.querySelector(`img:nth-child(${imageNum + 1})`).classList.add('active');

        // active thumb
        coinPreviewWrapper.closest(".linked-coins__coin-item")
            .querySelector(`.images-count__position:nth-child(${imageNum + 1})`).classList.add("active");
    }
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

    document.querySelectorAll(".linked-coins__coin-item").forEach(coinItem => getImagesPerCoin(coinItem));

    // console.log(linkedCoinsImagesPerItem);

    document.querySelectorAll(".linked-coins__coin-item").forEach(coinItem => {
        const coinItemID = coinItem.dataset.coinId;

        for (coinNode in linkedCoinsImagesPerItem) {
            if (coinNode === coinItemID) {
                coinItem.querySelector(".coin-item__images-preview").addEventListener('mousemove', coinPreviewHandler);
                break;
            }
        }
    })
})