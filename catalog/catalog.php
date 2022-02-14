<?php require($_SERVER["DOCUMENT_ROOT"]."/header.html"); ?>
<link rel="stylesheet" href="/catalog/catalog.css">

<?php require $_SERVER["DOCUMENT_ROOT"] . "/components/breadcrumbs/breadcrumbs-blue/breadcrumbs.html"; ?>

<div class="content-container">
    <h1 class="heading-1 catalog-section-name">Российские</h1>

    <section class="section-tabs-sort-wrapper">
        <div class="catalog-sections-tabs">
            <a href="" class="catalog-section-tab">В наличии</a>
            <a href="" class="catalog-section-tab active">Ожидаемые</a>
            <a href="" class="catalog-section-tab">Новинки</a>
            <a href="" class="catalog-section-tab">Все</a>
        </div>  

        <div class="catalog-sort">
            <select name="" id="" class="sort-type-select">
                <option value="">По умолчанию</option>
                <option value="">Сначала популярные</option>
                <option value="">По цене (дешевле)</option>
                <option value="">По цене (дороже)</option>
                <option value="">По названию (А-Я)</option>
                <option value="">По названию (Я-А)</option>
            </select>

            <div class="render-options">
                <button class="render-options__button" data-render-type="list">
                    <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0_2_5915)">
                            <path d="M17.1027 15.5366H5.06613C4.57004 15.5366 4.16797 15.1345 4.16797 14.6384C4.16797 14.1423 4.57004 13.7402 5.06613 13.7402H17.1024C17.5984 13.7402 18.0005 14.1423 18.0005 14.6384C18.0005 15.1345 17.5987 15.5366 17.1027 15.5366Z"/>
                            <path d="M17.1027 9.89788H5.06613C4.57004 9.89788 4.16797 9.4958 4.16797 8.99972C4.16797 8.50364 4.57004 8.10156 5.06613 8.10156H17.1024C17.5984 8.10156 18.0005 8.50364 18.0005 8.99972C18.0008 9.4958 17.5987 9.89788 17.1027 9.89788Z"/>
                            <path d="M17.1027 4.26116H5.06613C4.57004 4.26116 4.16797 3.85909 4.16797 3.363C4.16797 2.86692 4.57004 2.46484 5.06613 2.46484H17.1024C17.5984 2.46484 18.0005 2.86692 18.0005 3.363C18.0005 3.85909 17.5987 4.26116 17.1027 4.26116Z"/>
                            <path d="M1.20623 4.63902C1.87241 4.63902 2.41245 4.09897 2.41245 3.43279C2.41245 2.76661 1.87241 2.22656 1.20623 2.22656C0.540046 2.22656 0 2.76661 0 3.43279C0 4.09897 0.540046 4.63902 1.20623 4.63902Z" />
                            <path d="M1.20623 10.2054C1.87241 10.2054 2.41245 9.66538 2.41245 8.9992C2.41245 8.33301 1.87241 7.79297 1.20623 7.79297C0.540046 7.79297 0 8.33301 0 8.9992C0 9.66538 0.540046 10.2054 1.20623 10.2054Z" />
                            <path d="M1.20623 15.7757C1.87241 15.7757 2.41245 15.2357 2.41245 14.5695C2.41245 13.9033 1.87241 13.3633 1.20623 13.3633C0.540046 13.3633 0 13.9033 0 14.5695C0 15.2357 0.540046 15.7757 1.20623 15.7757Z" />
                        </g>
                        <defs>
                            <clipPath id="clip0_2_5915">
                            <rect width="18" height="18" fill="white"/>
                            </clipPath>
                        </defs>
                    </svg>
                </button>

                <button class="render-options__button active" data-render-type="grid">
                    <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.21534 0H2.08153C0.933785 0 0 0.933785 0 2.08153V6.21534C0 7.36309 0.933785 8.29688 2.08153 8.29688H6.21534C7.36309 8.29688 8.29688 7.36309 8.29688 6.21534V2.08153C8.29688 0.933785 7.36309 0 6.21534 0ZM6.89062 6.21534C6.89062 6.58768 6.58768 6.89062 6.21534 6.89062H2.08153C1.70919 6.89062 1.40625 6.58768 1.40625 6.21534V2.08153C1.40625 1.70919 1.70919 1.40625 2.08153 1.40625H6.21534C6.58768 1.40625 6.89062 1.70919 6.89062 2.08153V6.21534Z"/>
                        <path d="M15.8906 0H11.8125C10.6494 0 9.70312 0.946266 9.70312 2.10938V6.1875C9.70312 7.35061 10.6494 8.29688 11.8125 8.29688H15.8906C17.0537 8.29688 18 7.35061 18 6.1875V2.10938C18 0.946266 17.0537 0 15.8906 0ZM16.5938 6.1875C16.5938 6.5752 16.2783 6.89062 15.8906 6.89062H11.8125C11.4248 6.89062 11.1094 6.5752 11.1094 6.1875V2.10938C11.1094 1.72167 11.4248 1.40625 11.8125 1.40625H15.8906C16.2783 1.40625 16.5938 1.72167 16.5938 2.10938V6.1875Z"/>
                        <path d="M6.21534 9.29688H2.08153C0.933785 9.29688 0 10.2307 0 11.3784V15.5122C0 16.66 0.933785 17.5938 2.08153 17.5938H6.21534C7.36309 17.5938 8.29688 16.66 8.29688 15.5122V11.3784C8.29688 10.2307 7.36309 9.29688 6.21534 9.29688ZM6.89062 15.5122C6.89062 15.8846 6.58768 16.1875 6.21534 16.1875H2.08153C1.70919 16.1875 1.40625 15.8846 1.40625 15.5122V11.3784C1.40625 11.0061 1.70919 10.7031 2.08153 10.7031H6.21534C6.58768 10.7031 6.89062 11.0061 6.89062 11.3784V15.5122Z" />
                        <path d="M15.8906 9.29688H11.8125C10.6494 9.29688 9.70312 10.2431 9.70312 11.4062V15.4844C9.70312 16.6475 10.6494 17.5938 11.8125 17.5938H15.8906C17.0537 17.5938 18 16.6475 18 15.4844V11.4062C18 10.2431 17.0537 9.29688 15.8906 9.29688ZM16.5938 15.4844C16.5938 15.8721 16.2783 16.1875 15.8906 16.1875H11.8125C11.4248 16.1875 11.1094 15.8721 11.1094 15.4844V11.4062C11.1094 11.0185 11.4248 10.7031 11.8125 10.7031H15.8906C16.2783 10.7031 16.5938 11.0185 16.5938 11.4062V15.4844Z"/>
                    </svg>
                </button>
            </div>
        </div>
    </section>

    <section class="catalog-content-wrapper">
        <aside class="catalog-filter">
            <form action="" method="GET">
                <div class="filter-property-item">
                    <p class="filter-property__name">Металл</p>

                    <div class="filter-property__values">
                        <div class="filter-property__value">
                            <input type="checkbox" class="filter-property__value-checkbox" id="filter-property__value-1">

                            <div class="custom-checkbox" tabindex="0">
                                <span class="custom-checkbox__inner"></span>
                            </div>

                            <label for="filter-property__value-1" class="checkbox-label">
                                Золото
                            </label>

                        </div>

                        <div class="filter-property__value">
                            <input type="checkbox" class="filter-property__value-checkbox" id="filter-property__value-2">

                            <div class="custom-checkbox" tabindex="0">
                                <span class="custom-checkbox__inner"></span>
                            </div>
                            
                            <label for="filter-property__value-2" class="checkbox-label">
                                Золото+серебро
                            </label>

                        </div>

                        <div class="filter-property__value">
                            <input type="checkbox" class="filter-property__value-checkbox" id="filter-property__value-3">
                            
                            <div class="custom-checkbox" tabindex="0">
                                <span class="custom-checkbox__inner"></span>
                            </div>

                            <label for="filter-property__value-3" class="checkbox-label">
                                Медь-никель
                            </label>

                        </div>

                        <div class="filter-property__value">
                            <input type="checkbox" class="filter-property__value-checkbox" id="filter-property__value-4">
                            
                            <div class="custom-checkbox" tabindex="0">
                                <span class="custom-checkbox__inner"></span>
                            </div>

                            <label for="filter-property__value-4" class="checkbox-label">
                                Серебро
                            </label>

                        </div>

                        <div class="filter-property__value">
                            <input type="checkbox" class="filter-property__value-checkbox" id="filter-property__value-5">
                            
                            <div class="custom-checkbox" tabindex="0">
                                <span class="custom-checkbox__inner"></span>
                            </div>
                            
                            <label for="filter-property__value-5" class="checkbox-label">
                                Серебро с покрытием
                            </label>

                        </div>
                    </div>
                </div>

                <div class="filter-property-item">
                    <p class="filter-property__name">Качество</p>

                    <div class="filter-property__values">
                        <div class="filter-property__value active">
                            <input type="checkbox" class="filter-property__value-checkbox" id="filter-property__value-7">
                            
                            <div class="custom-checkbox" tabindex="0">
                                <span class="custom-checkbox__inner"></span>
                            </div>

                            <label for="filter-property__value-7" class="checkbox-label">
                                Анциркулейтейд
                            </label>

                        </div>

                        <div class="filter-property__value">
                            <input type="checkbox" class="filter-property__value-checkbox" id="filter-property__value-8">
                            
                            <div class="custom-checkbox" tabindex="0">
                                <span class="custom-checkbox__inner"></span>
                            </div>

                            <label for="filter-property__value-8" class="checkbox-label">
                                Бриллиант - анциркулейтейд
                            </label>

                        </div>

                        <div class="filter-property__value">
                            <input type="checkbox" class="filter-property__value-checkbox" id="filter-property__value-9">

                            <div class="custom-checkbox" tabindex="0">
                                <span class="custom-checkbox__inner"></span>
                            </div>

                            <label for="filter-property__value-9" class="checkbox-label">
                                Пруф
                            </label>

                        </div>
                    </div>
                </div>

                <div class="filter-property-item select">
                    <select name="" id="">
                        <option value="" selected disabled>Проба</option>
                        <option value="">Высшая</option>
                        <option value="">Классная</option>
                        <option value="">Пойдёт</option>
                    </select>
                </div>

                <div class="filter-property-item select">
                    <select name="" id="">
                        <option value="" selected disabled>Номинал</option>
                        <option value="">Высшая</option>
                        <option value="">Классная</option>
                        <option value="">Пойдёт</option>
                    </select>
                </div>

                <div class="filter-property-item select">
                    <select name="" id="">
                        <option value="" selected disabled>Год</option>
                        <option value="">Высшая</option>
                        <option value="">Классная</option>
                        <option value="">Пойдёт</option>
                    </select>
                </div>

                <div class="filter-property-item select">
                    <select name="" id="">
                        <option value="" selected disabled>Набор</option>
                        <option value="">Высшая</option>
                        <option value="">Классная</option>
                        <option value="">Пойдёт</option>
                    </select>
                </div>

                <div class="filter-property-item select">
                    <select name="" id="">
                        <option value="" selected disabled>Серия</option>
                        <option value="">Высшая</option>
                        <option value="">Классная</option>
                        <option value="">Пойдёт</option>
                    </select>
                </div>

                <div class="filter-property-item select">
                    <select name="" id="">
                        <option value="" selected disabled>Страна</option>
                        <option value="">Высшая</option>
                        <option value="">Классная</option>
                        <option value="">Пойдёт</option>
                    </select>
                </div>

                <input type="reset" value="Сбросить" class="mint-btn filled big reset-filters full-width">
            </form>
        </aside>

        <section class="catalog-coins-wrapper">
            <div class="catalog-coins-items">
                <a class="catalog-coins__coin-item" href="/catalog/detail/catalog-detail.php">
                    <div class="top-bar has-status">
                        <div class="coin-item__statuses">
                            <p class="coin-item__status sale">Распродажа</p>
                            <p class="coin-item__status is-new">Новинка</p>
                        </div>

                        <button class="add-to-liked">
                            <img src="/images/icons/linked-coins/heart-gold.svg" alt="золотое сердечко">
                        </button>
                    </div>

                    <div class="mobile-needed-wrapper">
                        <div class="mobile-preview-wrapper">
                            <div class="coin-item__images-preview">
                                <img src="/images/coins/coin-1.png" alt="золотая монета">
                            </div>

                            <p class="coin-item__is-in-stock">В наличии</p>
                        </div>

                        <div class="coin-item__description-wrapper">
                            <p class="coin-item__created-in">Соединённые штаты</p>

                            <p class="coin-item__name">Золотая монета Год Быка 2009 7,78 гр 9999 проба Австралия 25 долларов простая 25 рублей 2021 вес 50 гр.</p>

                            <p class="buy-price">Цена выкупа 158 000 &#8381;</p>

                            <div class="bottom-bar">
                                <div class="sell-price-wrapper">
                                    <p class="coin-item__sell-price">142 000 &#8381;</p>

                                    <p class="coin-item__old-price">158 000</p>
                                </div>

                                <button class="add-to-cart">
                                    <img src="/images/icons/app-footer/shopping-cart.svg" alt="корзина">
                                </button>
                            </div>
                        </div>
                    </div>
                </a>

                <a class="catalog-coins__coin-item" href="/catalog/detail/catalog-detail.php">
                    <div class="top-bar has-status">
                        <div class="coin-item__statuses">
                            <p class="coin-item__status sale">Распродажа</p>
                            <p class="coin-item__status is-new">Новинка</p>
                        </div>

                        <button class="add-to-liked">
                            <img src="/images/icons/linked-coins/heart-gold.svg" alt="золотое сердечко">
                        </button>
                    </div>

                    <div class="mobile-needed-wrapper">
                        <div class="mobile-preview-wrapper">
                            <div class="coin-item__images-preview">
                                <img src="/images/coins/coin-1.png" alt="золотая монета">
                            </div>

                            <p class="coin-item__is-in-stock">В наличии</p>
                        </div>

                        <div class="coin-item__description-wrapper">
                            <p class="coin-item__created-in">Соединённые штаты</p>

                            <p class="coin-item__name">Золотая монета Год Быка 2009 7,78 гр 9999 проба Австралия 25 долларов простая 25 рублей 2021 вес 50 гр.</p>

                            <p class="buy-price">Цена выкупа 158 000 &#8381;</p>

                            <div class="bottom-bar">
                                <div class="sell-price-wrapper">
                                    <p class="coin-item__sell-price">142 000 &#8381;</p>

                                    <p class="coin-item__old-price">158 000</p>
                                </div>

                                <button class="add-to-cart">
                                    <img src="/images/icons/app-footer/shopping-cart.svg" alt="корзина">
                                </button>
                            </div>
                        </div>
                    </div>
                </a>

                <a class="catalog-coins__coin-item" href="/catalog/detail/catalog-detail.php">
                    <div class="top-bar has-status">
                        <div class="coin-item__statuses">
                            <p class="coin-item__status sale">Распродажа</p>
                            <p class="coin-item__status is-new">Новинка</p>
                        </div>

                        <button class="add-to-liked">
                            <img src="/images/icons/linked-coins/heart-gold.svg" alt="золотое сердечко">
                        </button>
                    </div>

                    <div class="mobile-needed-wrapper">
                        <div class="mobile-preview-wrapper">
                            <div class="coin-item__images-preview">
                                <img src="/images/coins/coin-1.png" alt="золотая монета">
                            </div>

                            <p class="coin-item__is-in-stock">В наличии</p>
                        </div>

                        <div class="coin-item__description-wrapper">
                            <p class="coin-item__created-in">Соединённые штаты</p>

                            <p class="coin-item__name">Золотая монета Год Быка 2009 7,78 гр 9999 проба Австралия 25 долларов простая 25 рублей 2021 вес 50 гр.</p>

                            <p class="buy-price">Цена выкупа 158 000 &#8381;</p>

                            <div class="bottom-bar">
                                <div class="sell-price-wrapper">
                                    <p class="coin-item__sell-price">142 000 &#8381;</p>

                                    <p class="coin-item__old-price">158 000</p>
                                </div>

                                <button class="add-to-cart">
                                    <img src="/images/icons/app-footer/shopping-cart.svg" alt="корзина">
                                </button>
                            </div>
                        </div>
                    </div>
                </a>

                <a class="catalog-coins__coin-item" href="/catalog/detail/catalog-detail.php">
                    <div class="top-bar has-status">
                        <div class="coin-item__statuses">
                            <p class="coin-item__status sale">Распродажа</p>
                            <p class="coin-item__status is-new">Новинка</p>
                        </div>

                        <button class="add-to-liked">
                            <img src="/images/icons/linked-coins/heart-gold.svg" alt="золотое сердечко">
                        </button>
                    </div>

                    <div class="mobile-needed-wrapper">
                        <div class="mobile-preview-wrapper">
                            <div class="coin-item__images-preview">
                                <img src="/images/coins/coin-1.png" alt="золотая монета">
                            </div>

                            <p class="coin-item__is-in-stock">В наличии</p>
                        </div>

                        <div class="coin-item__description-wrapper">
                            <p class="coin-item__created-in">Соединённые штаты</p>

                            <p class="coin-item__name">Золотая монета Год Быка 2009 7,78 гр 9999 проба Австралия 25 долларов простая 25 рублей 2021 вес 50 гр.</p>

                            <p class="buy-price">Цена выкупа 158 000 &#8381;</p>

                            <div class="bottom-bar">
                                <div class="sell-price-wrapper">
                                    <p class="coin-item__sell-price">142 000 &#8381;</p>

                                    <p class="coin-item__old-price">158 000</p>
                                </div>

                                <button class="add-to-cart">
                                    <img src="/images/icons/app-footer/shopping-cart.svg" alt="корзина">
                                </button>
                            </div>
                        </div>
                    </div>
                </a>

                <a class="catalog-coins__coin-item" href="/catalog/detail/catalog-detail.php">
                    <div class="top-bar has-status">
                        <div class="coin-item__statuses">
                            <p class="coin-item__status sale">Распродажа</p>
                            <p class="coin-item__status is-new">Новинка</p>
                        </div>

                        <button class="add-to-liked">
                            <img src="/images/icons/linked-coins/heart-gold.svg" alt="золотое сердечко">
                        </button>
                    </div>

                    <div class="mobile-needed-wrapper">
                        <div class="mobile-preview-wrapper">
                            <div class="coin-item__images-preview">
                                <img src="/images/coins/coin-1.png" alt="золотая монета">
                            </div>

                            <p class="coin-item__is-in-stock">В наличии</p>
                        </div>

                        <div class="coin-item__description-wrapper">
                            <p class="coin-item__created-in">Соединённые штаты</p>

                            <p class="coin-item__name">Золотая монета Год Быка 2009 7,78 гр 9999 проба Австралия 25 долларов простая 25 рублей 2021 вес 50 гр.</p>

                            <p class="buy-price">Цена выкупа 158 000 &#8381;</p>

                            <div class="bottom-bar">
                                <div class="sell-price-wrapper">
                                    <p class="coin-item__sell-price">142 000 &#8381;</p>

                                    <p class="coin-item__old-price">158 000</p>
                                </div>

                                <button class="add-to-cart">
                                    <img src="/images/icons/app-footer/shopping-cart.svg" alt="корзина">
                                </button>
                            </div>
                        </div>
                    </div>
                </a>

                <a class="catalog-coins__coin-item" href="/catalog/detail/catalog-detail.php">
                    <div class="top-bar has-status">
                        <div class="coin-item__statuses">
                            <p class="coin-item__status sale">Распродажа</p>
                            <p class="coin-item__status is-new">Новинка</p>
                        </div>

                        <button class="add-to-liked">
                            <img src="/images/icons/linked-coins/heart-gold.svg" alt="золотое сердечко">
                        </button>
                    </div>

                    <div class="mobile-needed-wrapper">
                        <div class="mobile-preview-wrapper">
                            <div class="coin-item__images-preview">
                                <img src="/images/coins/coin-1.png" alt="золотая монета">
                            </div>

                            <p class="coin-item__is-in-stock">В наличии</p>
                        </div>

                        <div class="coin-item__description-wrapper">
                            <p class="coin-item__created-in">Соединённые штаты</p>

                            <p class="coin-item__name">Золотая монета Год Быка 2009 7,78 гр 9999 проба Австралия 25 долларов простая 25 рублей 2021 вес 50 гр.</p>

                            <p class="buy-price">Цена выкупа 158 000 &#8381;</p>

                            <div class="bottom-bar">
                                <div class="sell-price-wrapper">
                                    <p class="coin-item__sell-price">142 000 &#8381;</p>

                                    <p class="coin-item__old-price">158 000</p>
                                </div>

                                <button class="add-to-cart">
                                    <img src="/images/icons/app-footer/shopping-cart.svg" alt="корзина">
                                </button>
                            </div>
                        </div>
                    </div>
                </a>

                <a class="catalog-coins__coin-item" href="/catalog/detail/catalog-detail.php">
                    <div class="top-bar has-status">
                        <div class="coin-item__statuses">
                            <p class="coin-item__status sale">Распродажа</p>
                            <p class="coin-item__status is-new">Новинка</p>
                        </div>

                        <button class="add-to-liked">
                            <img src="/images/icons/linked-coins/heart-gold.svg" alt="золотое сердечко">
                        </button>
                    </div>

                    <div class="mobile-needed-wrapper">
                        <div class="mobile-preview-wrapper">
                            <div class="coin-item__images-preview">
                                <img src="/images/coins/coin-1.png" alt="золотая монета">
                            </div>

                            <p class="coin-item__is-in-stock">В наличии</p>
                        </div>

                        <div class="coin-item__description-wrapper">
                            <p class="coin-item__created-in">Соединённые штаты</p>

                            <p class="coin-item__name">Золотая монета Год Быка 2009 7,78 гр 9999 проба Австралия 25 долларов простая 25 рублей 2021 вес 50 гр.</p>

                            <p class="buy-price">Цена выкупа 158 000 &#8381;</p>

                            <div class="bottom-bar">
                                <div class="sell-price-wrapper">
                                    <p class="coin-item__sell-price">142 000 &#8381;</p>

                                    <p class="coin-item__old-price">158 000</p>
                                </div>

                                <button class="add-to-cart">
                                    <img src="/images/icons/app-footer/shopping-cart.svg" alt="корзина">
                                </button>
                            </div>
                        </div>
                    </div>
                </a>

                <a class="catalog-coins__coin-item" href="/catalog/detail/catalog-detail.php">
                    <div class="top-bar has-status">
                        <div class="coin-item__statuses">
                            <p class="coin-item__status sale">Распродажа</p>
                            <p class="coin-item__status is-new">Новинка</p>
                        </div>

                        <button class="add-to-liked">
                            <img src="/images/icons/linked-coins/heart-gold.svg" alt="золотое сердечко">
                        </button>
                    </div>

                    <div class="mobile-needed-wrapper">
                        <div class="mobile-preview-wrapper">
                            <div class="coin-item__images-preview">
                                <img src="/images/coins/coin-1.png" alt="золотая монета">
                            </div>

                            <p class="coin-item__is-in-stock">В наличии</p>
                        </div>

                        <div class="coin-item__description-wrapper">
                            <p class="coin-item__created-in">Соединённые штаты</p>

                            <p class="coin-item__name">Золотая монета Год Быка 2009 7,78 гр 9999 проба Австралия 25 долларов простая 25 рублей 2021 вес 50 гр.</p>

                            <p class="buy-price">Цена выкупа 158 000 &#8381;</p>

                            <div class="bottom-bar">
                                <div class="sell-price-wrapper">
                                    <p class="coin-item__sell-price">142 000 &#8381;</p>

                                    <p class="coin-item__old-price">158 000</p>
                                </div>

                                <button class="add-to-cart">
                                    <img src="/images/icons/app-footer/shopping-cart.svg" alt="корзина">
                                </button>
                            </div>
                        </div>
                    </div>
                </a>

                <a class="catalog-coins__coin-item" href="/catalog/detail/catalog-detail.php">
                    <div class="top-bar has-status">
                        <div class="coin-item__statuses">
                            <p class="coin-item__status sale">Распродажа</p>
                            <p class="coin-item__status is-new">Новинка</p>
                        </div>

                        <button class="add-to-liked">
                            <img src="/images/icons/linked-coins/heart-gold.svg" alt="золотое сердечко">
                        </button>
                    </div>

                    <div class="mobile-needed-wrapper">
                        <div class="mobile-preview-wrapper">
                            <div class="coin-item__images-preview">
                                <img src="/images/coins/coin-1.png" alt="золотая монета">
                            </div>

                            <p class="coin-item__is-in-stock">В наличии</p>
                        </div>

                        <div class="coin-item__description-wrapper">
                            <p class="coin-item__created-in">Соединённые штаты</p>

                            <p class="coin-item__name">Золотая монета Год Быка 2009 7,78 гр 9999 проба Австралия 25 долларов простая 25 рублей 2021 вес 50 гр.</p>

                            <p class="buy-price">Цена выкупа 158 000 &#8381;</p>

                            <div class="bottom-bar">
                                <div class="sell-price-wrapper">
                                    <p class="coin-item__sell-price">142 000 &#8381;</p>

                                    <p class="coin-item__old-price">158 000</p>
                                </div>

                                <button class="add-to-cart">
                                    <img src="/images/icons/app-footer/shopping-cart.svg" alt="корзина">
                                </button>
                            </div>
                        </div>
                    </div>
                </a>
            </div>

            <div class="elements-loaded">
                <p class="elements-count">9 из 125</p>

                <button id="load-more-buttons" class="mint-btn filled mini">Показать еще</button>
            </div>

            <!-- тут проблема с перекрытием стилей -->
            <div class="recently-watched">
                <? // require $_SERVER["DOCUMENT_ROOT"] ."/components/news-list/coins-slider-3-row/template.php"; ?>
            </div>

            <article class="catalog-desctiption">
                <h2 class="heading-2 catalog-description__title">Купить Российские инвестиционные монеты</h2>

                <p class="main-text catalog-description-text">
                    Российские инвестиционные монеты давно зарекомендовали себя как эффективное средство сбережения и приумножения финансов. Это один из наиболее защищенных от инфляционных и кризисных тенденций в экономике видов активов. История продажи инвестиционных монет современного образца началась еще в 70-х годах прошлого века. Как это произошло и почему продажа таких монет до сих пор актуальна? Подробности в нашей статье.
                    <br><br>
                    Как формируется стоимость инвестиционных монет и с чего началась их история
                    В первой половине 1970-х годов Советский Союз столкнулся с острым дефицитом продовольствия. Партийным руководством было решено импортировать зерно, а международными договорами в качестве расчетной единицы было принято золото. Тогда же монетные дворы СССР отчеканили первую партию инвестиционных монет из драгоценного металла, номинальная стоимость которых составляла 10 рублей. Купить инвестиционные монеты могли только интуристы в обмен на валюту или государства в рамках торговых соглашений.<br>
                    После распада СССР продажа инвестиционных монет была восстановлена в 2001 году. Начиная с 2005 года Центробанк России выпускает новые золотые монеты, например, «Георгий Победоносец». Сегодня купить инвестиционные монеты из драгоценных металлов может любой желающий. 
                </p>
            </article>
        </section>
    </section>
</div>

<?php require($_SERVER["DOCUMENT_ROOT"]."/footer.html");?>