function changeRender(event) {
    const target = event.currentTarget;

    document.querySelector('.render-options .render-options__button.active').classList.remove('active');

    target.classList.add('active');

    document.querySelector('.catalog-coins-items').classList.remove('list');
    document.querySelector('.catalog-coins-items').classList.remove('list');

    document.querySelector('.catalog-coins-items').classList.add(target.dataset.renderType);
}

function openMobileFilters(event) {
    const target = event.currentTarget;

    target.classList.toggle("filters-opened");

    const catalogFilter = document.querySelector(".catalog-filter");
    const catalogFilterFormWrapper = catalogFilter.querySelector(".catalog-form-wrapper");

    if (target.classList.contains("filters-opened")) {
        catalogFilter.classList.add("opened");

        catalogFilterFormWrapper.dataset.initialHeight = `${catalogFilter.querySelector('form').clientHeight}`;
        catalogFilterFormWrapper.style.maxHeight = `${catalogFilter.querySelector('form').clientHeight}px`;

    }
    else {
        catalogFilter.classList.remove("opened");

        catalogFilterFormWrapper.dataset.initialHeight = `0`;
        catalogFilterFormWrapper.style.maxHeight = `0`;
    }
}

function onResizeFilters(event) {
    const catalogFilter = document.querySelector(".catalog-filter");
    const catalogFilterFormWrapper = catalogFilter.querySelector(".catalog-form-wrapper");

    if (catalogFilter.classList.contains("opened")) {
        const initialHeight = parseInt(catalogFilterFormWrapper.dataset.initialHeight);
        const currentHeight = catalogFilter.querySelector('form').clientHeight;

        if (currentHeight > initialHeight || currentHeight < initialHeight) {
            catalogFilterFormWrapper.dataset.initialHeight = `${currentHeight}`;
            catalogFilterFormWrapper.style.maxHeight = `${currentHeight}px`;
        }
    }
}


document.addEventListener("DOMContentLoaded", e => {
    document.querySelectorAll('.render-options .render-options__button').forEach(button => {
        button.addEventListener('click', changeRender);
    })

    document.getElementById("open-mobile-filters").addEventListener('click', openMobileFilters);

    window.addEventListener("resize", onResizeFilters);
})