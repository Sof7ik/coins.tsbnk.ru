const shareData = {
    title: '13132',
    text: '13123',
    url: 'https://developer.mozilla.org',
}

function share() {

}

function initShare(shareData) {
    if (!navigator.canShare) {
        console.log('navigator.canShare() not supported.');
    }
    else if (navigator.canShare(shareData)) {
        console.log('navigator.canShare() supported. We can use navigator.share() to send the data.');
    } else {
        console.log('Specified data cannot be shared.');
    }
}



function previewsPictures(event) {
    const target = event.currentTarget;

    const targetSrc = target.src;
    const targetAlt = target.alt;

    const bigCoinImage = document.querySelector('.coin-preview-big');
    bigCoinImage.src = targetSrc;
    bigCoinImage.alt = targetAlt;
}

function showMoreSpecs(event) {
    if (window.innerWidth <= 568) {
        console.log("хуйня сработала");

        const target = event ? event.currentTarget : document.getElementById("show-more-specs");

        const tableWrapper = document.querySelector('.mobile-description-table .coin__description-table.mobile-specs');

        const properties = tableWrapper.querySelectorAll('.coin__description-table__row');

        const isOpened = JSON.parse(tableWrapper.dataset.opened.toLowerCase());

        if (isOpened) {
            tableWrapper.style.maxHeight = `${(20 * 2) +
                properties[0].clientHeight + properties[1].clientHeight + properties[2].clientHeight}px`;

            tableWrapper.dataset.initialHeight = `(20 * 2) +
                properties[0].clientHeight + properties[1].clientHeight + properties[2].clientHeight`;

            target.textContent = "Показать больше";
        }
        else {
            let maxHeight = 0;

            properties.forEach(elem => {
                maxHeight += elem.clientHeight + 20;
            });

            maxHeight = `${maxHeight - 20}px`;

            tableWrapper.style.maxHeight = maxHeight;

            target.textContent = "Показать меньше";
        }

        tableWrapper.dataset.opened = JSON.stringify(!isOpened);
    }
}

document.addEventListener("DOMContentLoaded", e => {
    // initShare();

    document.getElementById("share").addEventListener('click', share);

    document.querySelectorAll('.coin__preview-picture')
        .forEach(image => image.addEventListener('click', previewsPictures))

    showMoreSpecs();
    document.getElementById("show-more-specs").addEventListener("click", showMoreSpecs);
})