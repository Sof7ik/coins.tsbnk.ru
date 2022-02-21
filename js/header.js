function openShopMenu(event) {
    const target = event.currentTarget;

    const shopMenuWrapper = document.querySelector(".shop-menu-wrapper");

    if (target.classList.contains('opened')) {
        shopMenuWrapper.classList.add("hidden");
    }
    else {
        shopMenuWrapper.classList.remove("hidden");
    }

    target.classList.toggle("opened");
}

function onChangeInput(event) {
    const query = event.currentTarget.value;

    const searchWrapper = document.querySelector('.header-search-wrapper');
    const links = searchWrapper.querySelectorAll('.link-to-all-results');

    links.forEach(link => {
        const oldHref = link.href.split("=");

        link.href = `${oldHref[0]}=${query}`;
    })
}

function onInputBlur(event) {
    console.log("blur");

    const searchWrapper = document.querySelector('header .header-search-wrapper');
    searchWrapper.classList.remove('active');

    const headerUp = document.querySelector("#page-header .header-up");
    headerUp.classList.remove("search-opened");

    if (event === null) {
        searchWrapper.querySelector('input').blur();
    }
}

function onInputKeydown(event) {
    if (event.key === "Escape") {
        onInputBlur(null);
    }
    else if (event.key === "Enter") {
        if (event.currentTarget.value.trim() !== "") {
            window.location = `/all-search-results/?query=${event.currentTarget.value}`;
        }
    }
}

function onInputFocus(event) {
    const searchWrapper = document.querySelector('header .header-search-wrapper');
    searchWrapper.classList.add('active');
}

function onPageScroll(event) {
    const header = document.querySelector("header#page-header");
    const headerUp = header.querySelector(".header-up");

    if (document.body.scrollTop > headerUp.clientHeight) {
        header.classList.add('sticky');
        document.querySelector('.header-mrb').style.display = "block";

        // document.querySelector('#page-header .header-bottom .shop-menu-wrapper').style.height = `51px`;
    }
    else {
        header.classList.remove('sticky');
        document.querySelector('.header-mrb').style.display = "none";

        // document.querySelector('#page-header .header-bottom .shop-menu-wrapper').style.height = `unset`;
    }
}

function openStickyHeaderSearch(event) {
    console.log("open f");

    const headerUp = document.querySelector("#page-header .header-up");
    headerUp.classList.add("search-opened");

    const input = document.getElementById('header-search-input');

    input.focus();
}

function openMobileCatalog(event) {
    console.log("хуйня")

    const target = event.currentTarget;
    const mobileCatalogMenu = target.closest(".mobile-catalog-wrapper")
        .querySelector(".mobile-catalog-navigation-wrapper");

    if (target.classList.contains("opened")) {
        mobileCatalogMenu.classList.add("hidden");
    }
    else {
        mobileCatalogMenu.classList.remove("hidden");
    }

    target.classList.toggle("opened");
}

// cart block
function closeHeaderCartByEsc(event) {
    if (event.key === "Escape") {
        closeHeaderCart(null);
    }
}

function openHeaderCart(event) {
    const target = event.currentTarget;

    const parentWrapper = target.closest(".cart-wrapper");

    parentWrapper.classList.add("opened");

    document.addEventListener('keydown', closeHeaderCartByEsc);

}

function closeHeaderCart(event) {
    const wrapper = document.getElementById("open-header-cart").closest(".cart-wrapper");

    wrapper.classList.remove("opened");

    document.removeEventListener("keydown", closeHeaderCartByEsc);
}

document.addEventListener("DOMContentLoaded", e => {
    document.querySelectorAll(".open-shop-menu")
        .forEach(button => button.addEventListener('click', openShopMenu));

    document.getElementById('header-search-input').addEventListener('focus', onInputFocus);
    document.getElementById('header-search-input').addEventListener('blur', onInputBlur);

    // input blur;
    const elems = [];

    const bg = document.querySelector('.header-search-sticky-bg');
    elems.push(bg);

    const goldX = document.getElementById("close-input");
    elems.push(goldX);

    // console.log(elems);

    elems.forEach(item => {
        item.addEventListener('click', onInputBlur);
    })

    document.getElementById('header-search-input').addEventListener('input', onChangeInput);
    document.getElementById('header-search-input').addEventListener("keydown", onInputKeydown);

    document.body.addEventListener('scroll', onPageScroll);

    document.getElementById('open-sticky-search').addEventListener('click', openStickyHeaderSearch);

    document.getElementById("open-mobile-catalog").addEventListener("click", openMobileCatalog);

    // cart
    document.getElementById("open-header-cart").addEventListener('click', openHeaderCart);
    document.querySelector(".personal-navigation__item.cart-wrapper .header-cart-fixed-bg").addEventListener('click', closeHeaderCart);
})