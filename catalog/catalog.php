<?php require($_SERVER["DOCUMENT_ROOT"]."/header.html"); ?>
<link rel="stylesheet" href="/catalog/catalog.css">
<script src="/catalog/script.js" defer></script>

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

                <button id="open-mobile-filters" class="">
                    <svg class="open-filters" width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M24.5413 25.4781C24.79 25.4781 25.0284 25.3794 25.2042 25.2035C25.38 25.0277 25.4788 24.7893 25.4788 24.5406V21.625C26.2382 21.4214 26.9091 20.9729 27.3877 20.3492C27.8662 19.7254 28.1256 18.9612 28.1256 18.175C28.1256 17.3888 27.8662 16.6246 27.3877 16.0008C26.9091 15.3771 26.2382 14.9286 25.4788 14.725V5.45313C25.4788 5.20448 25.38 4.96603 25.2042 4.79021C25.0284 4.6144 24.79 4.51562 24.5413 4.51562C24.2927 4.51562 24.0542 4.6144 23.8784 4.79021C23.7026 4.96603 23.6038 5.20448 23.6038 5.45313V14.7344C22.8445 14.938 22.1735 15.3864 21.695 16.0102C21.2164 16.634 20.957 17.3982 20.957 18.1844C20.957 18.9706 21.2164 19.7348 21.695 20.3585C22.1735 20.9823 22.8445 21.4308 23.6038 21.6344V24.55C23.6063 24.797 23.7061 25.0331 23.8817 25.2069C24.0572 25.3807 24.2943 25.4781 24.5413 25.4781ZM22.8257 18.175C22.8257 17.8357 22.9263 17.504 23.1148 17.2219C23.3033 16.9397 23.5713 16.7198 23.8848 16.59C24.1983 16.4601 24.5432 16.4261 24.876 16.4923C25.2088 16.5585 25.5145 16.7219 25.7544 16.9619C25.9944 17.2018 26.1578 17.5075 26.224 17.8403C26.2902 18.1731 26.2562 18.5181 26.1263 18.8315C25.9965 19.145 25.7766 19.413 25.4945 19.6015C25.2123 19.79 24.8806 19.8906 24.5413 19.8906C24.0863 19.8906 23.6499 19.7099 23.3282 19.3881C23.0064 19.0664 22.8257 18.63 22.8257 18.175Z" fill="#777777"/>
                        <path d="M15.0008 25.4801C15.2494 25.4801 15.4879 25.3814 15.6637 25.2055C15.8395 25.0297 15.9383 24.7913 15.9383 24.5426V11.5489C16.7785 11.3216 17.5075 10.7969 17.9898 10.0724C18.4721 9.34782 18.6748 8.47275 18.5601 7.60994C18.4455 6.74714 18.0214 5.95534 17.3667 5.38184C16.7119 4.80834 15.8712 4.49219 15.0008 4.49219C14.1304 4.49219 13.2896 4.80834 12.6349 5.38184C11.9802 5.95534 11.5561 6.74714 11.4414 7.60994C11.3268 8.47275 11.5295 9.34782 12.0118 10.0724C12.494 10.7969 13.2231 11.3216 14.0633 11.5489V24.5426C14.0633 24.7913 14.1621 25.0297 14.3379 25.2055C14.5137 25.3814 14.7521 25.4801 15.0008 25.4801ZM13.2852 8.10826C13.2833 7.76855 13.3823 7.43594 13.5697 7.15257C13.7571 6.86921 14.0244 6.64785 14.3377 6.51656C14.651 6.38527 14.9963 6.34996 15.3297 6.41509C15.6631 6.48023 15.9697 6.64288 16.2106 6.88244C16.4514 7.122 16.6158 7.42767 16.6827 7.76072C16.7497 8.09378 16.7163 8.43921 16.5867 8.75325C16.4571 9.06728 16.2372 9.33578 15.9549 9.52471C15.6726 9.71365 15.3405 9.81451 15.0008 9.81451C14.5474 9.81452 14.1124 9.63505 13.791 9.31534C13.4695 8.99562 13.2876 8.56165 13.2852 8.10826Z" fill="#777777"/>
                        <path d="M4.51788 18.4469V24.5406C4.51788 24.7893 4.61665 25.0277 4.79247 25.2035C4.96828 25.3794 5.20674 25.4781 5.45538 25.4781C5.70402 25.4781 5.94248 25.3794 6.11829 25.2035C6.29411 25.0277 6.39288 24.7893 6.39288 24.5406V18.4469C7.15224 18.2433 7.8232 17.7948 8.30174 17.171C8.78029 16.5473 9.03967 15.7831 9.03967 14.9969C9.03967 14.2107 8.78029 13.4465 8.30174 12.8227C7.8232 12.1989 7.15224 11.7505 6.39288 11.5469V5.45313C6.39288 5.20448 6.29411 4.96603 6.11829 4.79021C5.94248 4.6144 5.70402 4.51562 5.45538 4.51562C5.20674 4.51562 4.96828 4.6144 4.79247 4.79021C4.61665 4.96603 4.51788 5.20448 4.51788 5.45313V11.5469C3.75852 11.7505 3.08756 12.1989 2.60901 12.8227C2.13047 13.4465 1.87109 14.2107 1.87109 14.9969C1.87109 15.7831 2.13047 16.5473 2.60901 17.171C3.08756 17.7948 3.75852 18.2433 4.51788 18.4469ZM5.45538 13.2813C5.79509 13.2794 6.12771 13.3784 6.41107 13.5658C6.69443 13.7532 6.91579 14.0205 7.04708 14.3338C7.17837 14.6471 7.21369 14.9924 7.14855 15.3258C7.08341 15.6592 6.92076 15.9658 6.6812 16.2067C6.44165 16.4475 6.13597 16.6119 5.80292 16.6788C5.46987 16.7458 5.12443 16.7124 4.8104 16.5828C4.49636 16.4532 4.22786 16.2333 4.03893 15.951C3.85 15.6687 3.74913 15.3366 3.74913 14.9969C3.74912 14.5435 3.92859 14.1085 4.24831 13.787C4.56802 13.4656 5.00199 13.2837 5.45538 13.2813Z" fill="#777777"/>
                    </svg>

                    <svg class="close-filters" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M20 1.17838L18.8216 0L10 8.82162L1.17838 0L0 1.17838L8.82162 10L0 18.8216L1.17838 20L10 11.1784L18.8216 20L20 18.8216L11.1784 10L20 1.17838Z" fill="#00345E"/>
                    </svg>
                </button>
            </div>
        </div>
    </section>

    <section class="catalog-content-wrapper">
        <aside class="catalog-filter">
            <div class="catalog-form-wrapper">
                <form action="" method="GET">
                    <div class="mobile-filters__left">
                        <div class="filter-property-item">
                            <p class="filter-property__name">Металл</p>
        
                            <div class="filter-property__values">
                                <div class="filter-property__value">
                                    <input type="checkbox" class="filter-property__value-checkbox" id="filter-property__value-1">
        
                                    <label for="filter-property__value-1" class="checkbox-label">
                                        Золото
                                    </label>
        
                                </div>
        
                                <div class="filter-property__value">
                                    <input type="checkbox" class="filter-property__value-checkbox" id="filter-property__value-2">
        
                                    <label for="filter-property__value-2" class="checkbox-label">
                                        Золото+серебро
                                    </label>
        
                                </div>
        
                                <div class="filter-property__value">
                                    <input type="checkbox" class="filter-property__value-checkbox" id="filter-property__value-3">
        
                                    <label for="filter-property__value-3" class="checkbox-label">
                                        Медь-никель
                                    </label>
        
                                </div>
        
                                <div class="filter-property__value">
                                    <input type="checkbox" class="filter-property__value-checkbox" id="filter-property__value-4">
        
                                    <label for="filter-property__value-4" class="checkbox-label">
                                        Серебро
                                    </label>
        
                                </div>
        
                                <div class="filter-property__value">
                                    <input type="checkbox" class="filter-property__value-checkbox" id="filter-property__value-5">
                                    
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
        
                                    <label for="filter-property__value-7" class="checkbox-label">
                                        Анциркулейтейд
                                    </label>
        
                                </div>
        
                                <div class="filter-property__value">
                                    <input type="checkbox" class="filter-property__value-checkbox" id="filter-property__value-8">
        
                                    <label for="filter-property__value-8" class="checkbox-label">
                                        Бриллиант - анциркулейтейд
                                    </label>
        
                                </div>
        
                                <div class="filter-property__value">
                                    <input type="checkbox" class="filter-property__value-checkbox" id="filter-property__value-9">
        
                                    <label for="filter-property__value-9" class="checkbox-label">
                                        Пруф
                                    </label>
        
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="mobile-filter__right">
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
                    </div>     
                </form>
            </div>
        </aside>

        <section class="catalog-coins-wrapper">
            <div class="catalog-coins-items grid">
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
                            <div class="coin-item__description-text">
                                <p class="coin-item__created-in">Соединённые штаты</p>

                                <p class="coin-item__name">Золотая монета Год Быка 2009 7,78 гр 9999 проба Австралия 25 долларов простая 25 рублей 2021 вес 50 гр.</p>

                                <p class="buy-price">Цена выкупа 158 000 &#8381;</p>
                            </div>

                            <div class="bottom-bar">
                                <div class="sell-price-wrapper">
                                    <p class="coin-item__sell-price">142 000 &#8381;</p>

                                    <p class="coin-item__old-price">158 000</p>
                                </div>

                                <p class="list-coin-item__buy-price">Цена выкупа 158 000 &#8381;</p>

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
                            <div class="coin-item__description-text">
                                <p class="coin-item__created-in">Соединённые штаты</p>

                                <p class="coin-item__name">Золотая монета Год Быка 2009 7,78 гр 9999 проба Австралия 25 долларов простая 25 рублей 2021 вес 50 гр.</p>

                                <p class="buy-price">Цена выкупа 158 000 &#8381;</p>
                            </div>

                            <div class="bottom-bar">
                                <div class="sell-price-wrapper">
                                    <p class="coin-item__sell-price">142 000 &#8381;</p>

                                    <p class="coin-item__old-price">158 000</p>
                                </div>

                                <p class="list-coin-item__buy-price">Цена выкупа 158 000 &#8381;</p>

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
                            <div class="coin-item__description-text">
                                <p class="coin-item__created-in">Соединённые штаты</p>

                                <p class="coin-item__name">Золотая монета Год Быка 2009 7,78 гр 9999 проба Австралия 25 долларов простая 25 рублей 2021 вес 50 гр.</p>

                                <p class="buy-price">Цена выкупа 158 000 &#8381;</p>
                            </div>

                            <div class="bottom-bar">
                                <div class="sell-price-wrapper">
                                    <p class="coin-item__sell-price">142 000 &#8381;</p>

                                    <p class="coin-item__old-price">158 000</p>
                                </div>

                                <p class="list-coin-item__buy-price">Цена выкупа 158 000 &#8381;</p>

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
                            <div class="coin-item__description-text">
                                <p class="coin-item__created-in">Соединённые штаты</p>

                                <p class="coin-item__name">Золотая монета Год Быка 2009 7,78 гр 9999 проба Австралия 25 долларов простая 25 рублей 2021 вес 50 гр.</p>

                                <p class="buy-price">Цена выкупа 158 000 &#8381;</p>
                            </div>

                            <div class="bottom-bar">
                                <div class="sell-price-wrapper">
                                    <p class="coin-item__sell-price">142 000 &#8381;</p>

                                    <p class="coin-item__old-price">158 000</p>
                                </div>

                                <p class="list-coin-item__buy-price">Цена выкупа 158 000 &#8381;</p>

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
                            <div class="coin-item__description-text">
                                <p class="coin-item__created-in">Соединённые штаты</p>

                                <p class="coin-item__name">Золотая монета Год Быка 2009 7,78 гр 9999 проба Австралия 25 долларов простая 25 рублей 2021 вес 50 гр.</p>

                                <p class="buy-price">Цена выкупа 158 000 &#8381;</p>
                            </div>

                            <div class="bottom-bar">
                                <div class="sell-price-wrapper">
                                    <p class="coin-item__sell-price">142 000 &#8381;</p>

                                    <p class="coin-item__old-price">158 000</p>
                                </div>

                                <p class="list-coin-item__buy-price">Цена выкупа 158 000 &#8381;</p>

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
                            <div class="coin-item__description-text">
                                <p class="coin-item__created-in">Соединённые штаты</p>

                                <p class="coin-item__name">Золотая монета Год Быка 2009 7,78 гр 9999 проба Австралия 25 долларов простая 25 рублей 2021 вес 50 гр.</p>

                                <p class="buy-price">Цена выкупа 158 000 &#8381;</p>
                            </div>

                            <div class="bottom-bar">
                                <div class="sell-price-wrapper">
                                    <p class="coin-item__sell-price">142 000 &#8381;</p>

                                    <p class="coin-item__old-price">158 000</p>
                                </div>

                                <p class="list-coin-item__buy-price">Цена выкупа 158 000 &#8381;</p>

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
                            <div class="coin-item__description-text">
                                <p class="coin-item__created-in">Соединённые штаты</p>

                                <p class="coin-item__name">Золотая монета Год Быка 2009 7,78 гр 9999 проба Австралия 25 долларов простая 25 рублей 2021 вес 50 гр.</p>

                                <p class="buy-price">Цена выкупа 158 000 &#8381;</p>
                            </div>

                            <div class="bottom-bar">
                                <div class="sell-price-wrapper">
                                    <p class="coin-item__sell-price">142 000 &#8381;</p>

                                    <p class="coin-item__old-price">158 000</p>
                                </div>

                                <p class="list-coin-item__buy-price">Цена выкупа 158 000 &#8381;</p>

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
                            <div class="coin-item__description-text">
                                <p class="coin-item__created-in">Соединённые штаты</p>

                                <p class="coin-item__name">Золотая монета Год Быка 2009 7,78 гр 9999 проба Австралия 25 долларов простая 25 рублей 2021 вес 50 гр.</p>

                                <p class="buy-price">Цена выкупа 158 000 &#8381;</p>
                            </div>

                            <div class="bottom-bar">
                                <div class="sell-price-wrapper">
                                    <p class="coin-item__sell-price">142 000 &#8381;</p>

                                    <p class="coin-item__old-price">158 000</p>
                                </div>

                                <p class="list-coin-item__buy-price">Цена выкупа 158 000 &#8381;</p>

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
                            <div class="coin-item__description-text">
                                <p class="coin-item__created-in">Соединённые штаты</p>

                                <p class="coin-item__name">Золотая монета Год Быка 2009 7,78 гр 9999 проба Австралия 25 долларов простая 25 рублей 2021 вес 50 гр.</p>

                                <p class="buy-price">Цена выкупа 158 000 &#8381;</p>
                            </div>

                            <div class="bottom-bar">
                                <div class="sell-price-wrapper">
                                    <p class="coin-item__sell-price">142 000 &#8381;</p>

                                    <p class="coin-item__old-price">158 000</p>
                                </div>

                                <p class="list-coin-item__buy-price">Цена выкупа 158 000 &#8381;</p>

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
                            <div class="coin-item__description-text">
                                <p class="coin-item__created-in">Соединённые штаты</p>

                                <p class="coin-item__name">Золотая монета Год Быка 2009 7,78 гр 9999 проба Австралия 25 долларов простая 25 рублей 2021 вес 50 гр.</p>

                                <p class="buy-price">Цена выкупа 158 000 &#8381;</p>
                            </div>

                            <div class="bottom-bar">
                                <div class="sell-price-wrapper">
                                    <p class="coin-item__sell-price">142 000 &#8381;</p>

                                    <p class="coin-item__old-price">158 000</p>
                                </div>

                                <p class="list-coin-item__buy-price">Цена выкупа 158 000 &#8381;</p>

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
                            <div class="coin-item__description-text">
                                <p class="coin-item__created-in">Соединённые штаты</p>

                                <p class="coin-item__name">Золотая монета Год Быка 2009 7,78 гр 9999 проба Австралия 25 долларов простая 25 рублей 2021 вес 50 гр.</p>

                                <p class="buy-price">Цена выкупа 158 000 &#8381;</p>
                            </div>

                            <div class="bottom-bar">
                                <div class="sell-price-wrapper">
                                    <p class="coin-item__sell-price">142 000 &#8381;</p>

                                    <p class="coin-item__old-price">158 000</p>
                                </div>

                                <p class="list-coin-item__buy-price">Цена выкупа 158 000 &#8381;</p>

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
                            <div class="coin-item__description-text">
                                <p class="coin-item__created-in">Соединённые штаты</p>

                                <p class="coin-item__name">Золотая монета Год Быка 2009 7,78 гр 9999 проба Австралия 25 долларов простая 25 рублей 2021 вес 50 гр.</p>

                                <p class="buy-price">Цена выкупа 158 000 &#8381;</p>
                            </div>

                            <div class="bottom-bar">
                                <div class="sell-price-wrapper">
                                    <p class="coin-item__sell-price">142 000 &#8381;</p>

                                    <p class="coin-item__old-price">158 000</p>
                                </div>

                                <p class="list-coin-item__buy-price">Цена выкупа 158 000 &#8381;</p>

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

                <button id="load-more-buttons" class="mint-btn blue">Показать еще</button>
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