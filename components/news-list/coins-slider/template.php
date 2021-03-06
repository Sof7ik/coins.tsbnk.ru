<link rel="stylesheet" href="/components/news-list/coins-slider/style.css">
<script src="/components/news-list/coins-slider/script.js" defer></script>

<?
    $coins = [
        [
            "statuses" => [
                "Новинка",
                "Распродажа"
            ],
            "is_liked" => "Y",
            "name" => "Золотая монета Год Быка 2009 7,78 гр 9999 проба Австралия 25 долларов простая 25 рублей 2021 вес 50 гр.",
            "images" => [
                "/images/coins/coin-1.png",
                "/images/coins/coin-2.png",
                "/images/coins/coin-3.jpg",
            ],
            "is_in_stock" => "Y",
            "created-in" => "Соединённые штаты",
            "buyout-price" => "158 000",
            "sell-price" => "142 000",
            "old-price" => "158 000"
        ],

        [
            "statuses" => [
                "Новинка",
                "Распродажа",
                "Новинка",
                "Распродажа",
                "Новинка",
            ],
            "is_liked" => "N",
            "name" => "Золотая монета Год Быка 2009 7,78 гр 9999 проба Австралия 25 долларов простая 25 рублей 2021 вес 50 гр.",
            "images" => [
                "/images/coins/coin-1.png",
                "/images/coins/coin-2.png",
                "/images/coins/coin-3.jpg",
                "/images/coins/coin-1.png",
            ],
            "is_in_stock" => "Y",
            "created-in" => "Россия",
            "buyout-price" => "158 000",
            "sell-price" => "142 000",
            "old-price" => "158 000"
        ],

        [
            "statuses" => [],
            "is_liked" => "Y",
            "name" => "Золотая монета Год Быка 2009 7,78 гр 9999 проба Австралия 25 долларов простая 25 рублей 2021 вес 50 гр.",
            "images" => [
                "/images/coins/coin-1.png",
                "/images/coins/coin-2.png",
                "/images/coins/coin-3.jpg",
                "/images/coins/coin-1.png",
                "/images/coins/coin-2.png",
                "/images/coins/coin-3.jpg",
            ],
            "is_in_stock" => "Y",
            "created-in" => "ОАЭ",
            "buyout-price" => "158 000",
            "sell-price" => "142 000",
            "old-price" => "158 000"
        ],
        
        [
            "statuses" => [],
            "is_liked" => "N",
            "name" => "Золотая монета Год Быка 2009 7,78 гр 9999 проба Австралия 25 долларов простая 25 рублей 2021 вес 50 гр.",
            "images" => [
                "/images/coins/coin-1.png",
                "/images/coins/coin-2.png",
                "/images/coins/coin-3.jpg",
                "/images/coins/coin-1.png",
                "/images/coins/coin-2.png",
                "/images/coins/coin-3.jpg",
            ],
            "is_in_stock" => "Y",
            "created-in" => "ОАЭ",
            "buyout-price" => "158 000",
            "sell-price" => "142 000",
            "old-price" => "158 000"
        ],

        [
            "statuses" => [
                "Новинка",
                "Распродажа"
            ],
            "is_liked" => "Y",
            "name" => "Золотая монета Год Быка 2009 7,78 гр 9999 проба Австралия 25 долларов простая 25 рублей 2021 вес 50 гр.",
            "images" => [
                "/images/coins/coin-1.png",
                "/images/coins/coin-2.png",
                "/images/coins/coin-3.jpg",
            ],
            "is_in_stock" => "Y",
            "created-in" => "Соединённые штаты",
            "buyout-price" => "158 000",
            "sell-price" => "142 000",
            "old-price" => "158 000"
        ],

        [
            "statuses" => [
                "Новинка",
                "Распродажа",
                "Новинка",
                "Распродажа",
                "Новинка",
            ],
            "is_liked" => "N",
            "name" => "Золотая монета Год Быка 2009 7,78 гр 9999 проба Австралия 25 долларов простая 25 рублей 2021 вес 50 гр.",
            "images" => [
                "/images/coins/coin-1.png",
                "/images/coins/coin-2.png",
                "/images/coins/coin-3.jpg",
                "/images/coins/coin-1.png",
            ],
            "is_in_stock" => "Y",
            "created-in" => "Россия",
            "buyout-price" => "158 000",
            "sell-price" => "142 000",
            "old-price" => "158 000"
        ],

        [
            "statuses" => [],
            "is_liked" => "Y",
            "name" => "Золотая монета Год Быка 2009 7,78 гр 9999 проба Австралия 25 долларов простая 25 рублей 2021 вес 50 гр.",
            "images" => [
                "/images/coins/coin-1.png",
                "/images/coins/coin-2.png",
                "/images/coins/coin-3.jpg",
                "/images/coins/coin-1.png",
                "/images/coins/coin-2.png",
                "/images/coins/coin-3.jpg",
            ],
            "is_in_stock" => "Y",
            "created-in" => "ОАЭ",
            "buyout-price" => "158 000",
            "sell-price" => "142 000",
            "old-price" => "158 000"
        ],
        
        [
            "statuses" => [],
            "is_liked" => "N",
            "name" => "Золотая монета Год Быка 2009 7,78 гр 9999 проба Австралия 25 долларов простая 25 рублей 2021 вес 50 гр.",
            "images" => [
                "/images/coins/coin-1.png",
                "/images/coins/coin-2.png",
                "/images/coins/coin-3.jpg",
                "/images/coins/coin-1.png",
                "/images/coins/coin-2.png",
                "/images/coins/coin-3.jpg",
            ],
            "is_in_stock" => "Y",
            "created-in" => "ОАЭ",
            "buyout-price" => "158 000",
            "sell-price" => "142 000",
            "old-price" => "158 000"
        ],
    ]
?>

<section class="linked-coins">
    <div class="mobile-linked-coins-slider-navigation-wrapper">
        <h2 class="heading-3 linked-coins__title">Обратите внимание</h2>

        <div class="mobile-linked-coins-slider-navigation">
            <button class="swiper-button-prev">
                <img src="/images/icons/slider-arrow-about-company.svg" alt="стрелка влево">
            </button>

            <button class="swiper-button-next">
                <img src="/images/icons/slider-arrow-about-company.svg" alt="стрелка вправо">
            </button>
        </div>

        <a href="/catalog/catalog.php" class="watch-all">Посмотреть все</a>
    </div>

    <div class="swiper linked-coins__slider">
        <div class="swiper-wrapper">
            <?foreach ($coins as $key => $coin) {?>
                <a 
                    class="swiper-slide linked-coins__coin-item 
                    <?=$key%2 == 0 ? "dark" : ""?>" 
                    href="/catalog/detail/catalog-detail.php" 
                    data-coin-id="<?=$key+1?>">
                    
                    <div class="top-bar <?=count($coin['statuses']) != 0 ? 'has-status' : ''?>">
                        <div class="coin-item__statuses">
                            <?foreach($coin["statuses"] as $status)
                            {?>
                                <p class="coin-item__status sale"><?=$status?></p>
                            <?}?>
                        </div>

                        <button class="add-to-liked">
                            <img 
                                src="/images/icons/linked-coins/heart-gold<?=$coin['is_liked']=="Y"?'-filled':''?>.svg" 
                                alt="золотое сердечко">
                        </button>
                    </div>

                    <div class="mobile-needed-wrapper">
                        <div class="mobile-preview-wrapper">
                            <div class="coin-item__images-preview">
                                <?foreach($coin["images"] as $keyImage => $image){?>
                                    <img 
                                        src="<?=$image?>" alt="золотая монета" 
                                        <?= $keyImage == 0 ? "class='active'" : ""?>>
                                <?}?>
                            </div>

                            <?if(count($coin["images"]) > 1)
                            {?>
                                <div class="images-count">
                                    <?foreach($coin["images"] as $imageInd => $image)
                                    {?>
                                        <div class="images-count__position <?=$imageInd==0?'active':''?>"></div>
                                    <?}?>
                                </div>
                            <?}?>

                            <?if ($coin["is_in_stock"] == "Y")
                            {?>
                                <p class="coin-item__is-in-stock">В наличии</p>
                                
                            <?}
                            else
                            {?>
                                <p class="coin-item__is-in-stock">Нет в наличии</p>
                            <?}?>
                        </div>

                        <div class="coin-item__description-wrapper">
                            <p class="coin-item__created-in"><?=$coin["created-in"]?></p>

                            <p class="coin-item__name"><?=$coin["name"]?></p>
                            <p class="buy-price">Цена выкупа <?=$coin["buyout-price"]?> &#8381;</p>

                            
                            <?
                                if ($coin['is_in_stock']!='Y')
                                {?>
                                    <div class="bottom-bar no-cost">
                                        <div class="sell-price-wrapper">
                                            <p class="coin-item__sell-price">Нет в наличии</p>
                                        </div>

                                        <button class="add-to-cart notify">
                                            <img src="/images/icons/linked-coins/bell.svg" alt="звонок">
                                        </button>
                                    </div>
                                <?}
                                else
                                {?>
                                    <div class="bottom-bar">
                                        <div class="sell-price-wrapper">
                                            <p class="coin-item__sell-price"><?=$coin["sell-price"]?> &#8381;</p>

                                            <p class="coin-item__old-price"><?=$coin["old-price"]?> &#8381;</p>
                                        </div>

                                        <button class="add-to-cart">
                                            <img src="/images/icons/app-footer/shopping-cart.svg" alt="корзина">
                                        </button>
                                    </div>
                                <?}?>
                        </div>
                    </div>
                </a>
            <?}?>
        </div>

        <div class="linked-coins-slider__navigation">
            <button class="swiper-button-prev">
                <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M10.6241 6.61582L4.1487 0.158317C3.93654 -0.0531316 3.59305 -0.0527762 3.38124 0.15941C3.1696 0.37157 3.17015 0.715252 3.38234 0.926865L9.47231 7.00002L3.38212 13.0732C3.16996 13.2848 3.16941 13.6283 3.38102 13.8404C3.4872 13.9468 3.6263 14 3.76539 14C3.90414 14 4.04269 13.9472 4.14867 13.8415L10.6241 7.3842C10.7263 7.28254 10.7836 7.14418 10.7836 7.00002C10.7836 6.85587 10.7261 6.71767 10.6241 6.61582Z"/>
                </svg>
            </button>

            <button class="swiper-button-next dark-button">
                <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M10.6241 6.61582L4.1487 0.158317C3.93654 -0.0531316 3.59305 -0.0527762 3.38124 0.15941C3.1696 0.37157 3.17015 0.715252 3.38234 0.926865L9.47231 7.00002L3.38212 13.0732C3.16996 13.2848 3.16941 13.6283 3.38102 13.8404C3.4872 13.9468 3.6263 14 3.76539 14C3.90414 14 4.04269 13.9472 4.14867 13.8415L10.6241 7.3842C10.7263 7.28254 10.7836 7.14418 10.7836 7.00002C10.7836 6.85587 10.7261 6.71767 10.6241 6.61582Z"/>
                </svg>
            </button>
        </div>
    </div>
</section>