<?php require($_SERVER["DOCUMENT_ROOT"]."/header.html"); ?>
<link rel="stylesheet" href="/styles/mainpage.css">
<script src="/js/mainpage.js" defer></script>

<?

    $array = [
        [
            "title" => "Подарочная серебряная монета Москва из серии Скайлайн",
            "description" => "Коллекция Скайлайн доллары",
            "image" => "/images/mainpage/top-slider/ex-1.jpg",
            "bg" => "/images/mainpage/top-slider/slide-bg.png"
        ],
        [
            "title" => "Подарочная серебряная монета Москва из серии Скайлайн монета Москва из серии",
            "description" => "Коллекция Скайлайн доллары",
            "image" => "/images/coins/coin-1.png",
            "bg" => "/images/mainpage/top-slider/slide-bg.png"
        ],
        [
            "title" => "Подарочная с Скайлайн монета Москва из серии",
            "description" => "Коллекция Скайлайн доллары",
            "image" => "/images/coins/coin-2.png",
            "bg" => "/images/mainpage/top-slider/slide-bg.png"
        ],
        [
            "title" => "Пода Скайлайн монета Москва из серии",
            "description" => "Коллекция Скайлайн доллары",
            "image" => "/images/coins/coin-3.jpg",
            "bg" => "/images/mainpage/top-slider/slide-bg.png"
        ],
    ]

?>

<section class="mainpage-slider-wrapper">
    <!-- Slider main container -->
    <div class="swiper mainpage-top-slider">
        <!-- Additional required wrapper -->
        <div class="swiper-wrapper">
            <!-- Slides -->
            <?foreach ($array as $key => $slide) {?>
                <div class="swiper-slide">
                    <div class="slide-bg" style="background-image: url(<?=$slide['bg']?>)"></div>

                    <div class="content-container">
                        <div class="slide-title-collection-wrapper">
                            <p class="heading-1 mainpage-top-slider__slide-title"><?=$slide['title']?></p>

                            <p class="heading-3 mainpage-top-slider__collection"><?=$slide['description']?></p>
                        </div>

                        <img src="<?=$slide['image']?>" alt="монетка" class="mainpage-slider__slide-image">
                    </div>
                </div>  
            <?}?>
        </div>
    </div>

    <div class="swiper-pagination mainpage-top-slider-pagination">
        <div class="content-container"></div>
    </div>
</section>

<div class="content-container">
    <section class="famous-collections">
        <div class="famous-collections__title-wrapper">
            <h2 class="heading-3 famous-collections__title">Знаменитые коллекции монет</h2>
            
            <a href="/all-collections/all-collections.php" class="watch-all-collections">Посмотреть все</a>
        </div>

        <div class="collections-list">
            <div class="collection-item">
                <div class="collection-item__inner-wrapper">
                    <div class="mobile-left-wrapper">
                        <div class="collection-name-type-wrapper">
                            <h3 class="heading-4 collection__name">Защита дикой природы</h3>
                            <p class="description-text collection__type">Коллекция монет</p>
                        </div>
        
                        <div class="collection__preview-images">
                            <img src="/images/collections/collection-coin.png" alt="" class="collection__preview-image">
                            <img src="/images/collections/collection-coin.png" alt="" class="collection__preview-image">
                            <img src="/images/collections/collection-coin.png" alt="" class="collection__preview-image">
                        </div>
                    </div>
    
                    <a href="/catalog/catalog.php" class="rotating-image-wrapper">
                        <img src="/images/rotating-text/white/rotating-text.svg" alt="смотреть коллекцию" class="rotating-image">
                        <img src="/images/rotating-text/white/rotating-text-inner-arrow.svg" alt="стрелка" class="inner-arrow">
                    </a>
                </div>
            </div>

            <div class="collection-item">
                <div class="collection-item__inner-wrapper">
                    <div class="mobile-left-wrapper">
                        <div class="collection-name-type-wrapper">
                            <h3 class="heading-4 collection__name">Искусство Тиффани</h3>
                            <p class="description-text collection__type">Коллекция монет</p>
                        </div>
        
                        <div class="collection__preview-images">
                            <img src="/images/collections/collection-coin.png" alt="" class="collection__preview-image">
                            <img src="/images/collections/collection-coin.png" alt="" class="collection__preview-image">
                            <img src="/images/collections/collection-coin.png" alt="" class="collection__preview-image">
                        </div>
                    </div>
                    
                    <a href="/catalog/catalog.php" class="rotating-image-wrapper">
                        <img src="/images/rotating-text/white/rotating-text.svg" alt="смотреть коллекцию" class="rotating-image">
                        <img src="/images/rotating-text/white/rotating-text-inner-arrow.svg" alt="стрелка" class="inner-arrow">
                    </a>
                </div>
            </div>

            <div class="collection-item">
                <div class="collection-item__inner-wrapper">
                    <div class="mobile-left-wrapper">
                        <div class="collection-name-type-wrapper">
                            <h3 class="heading-4 collection__name">Православные монеты</h3>
                            <p class="description-text collection__type">Коллекция монет</p>
                        </div>
        
                        <div class="collection__preview-images">
                            <img src="/images/collections/collection-coin.png" alt="" class="collection__preview-image">
                            <img src="/images/collections/collection-coin.png" alt="" class="collection__preview-image">
                            <img src="/images/collections/collection-coin.png" alt="" class="collection__preview-image">
                        </div>
                    </div>

                    <a href="/catalog/catalog.php" class="rotating-image-wrapper">
                        <img src="/images/rotating-text/white/rotating-text.svg" alt="смотреть коллекцию" class="rotating-image">
                        <img src="/images/rotating-text/white/rotating-text-inner-arrow.svg" alt="стрелка" class="inner-arrow">
                    </a>
                </div>
            </div>

            <div class="collection-item">
                <div class="collection-item__inner-wrapper">
                    <div class="mobile-left-wrapper">
                        <div class="collection-name-type-wrapper">
                            <h3 class="heading-4 collection__name">Метеориты</h3>
                            <p class="description-text collection__type">Коллекция монет</p>
                        </div>
        
                        <div class="collection__preview-images">
                            <img src="/images/collections/collection-coin.png" alt="" class="collection__preview-image">
                            <img src="/images/collections/collection-coin.png" alt="" class="collection__preview-image">
                            <img src="/images/collections/collection-coin.png" alt="" class="collection__preview-image">
                        </div>
                    </div>

                    <a href="/catalog/catalog.php" class="rotating-image-wrapper">
                        <img src="/images/rotating-text/white/rotating-text.svg" alt="смотреть коллекцию" class="rotating-image">
                        <img src="/images/rotating-text/white/rotating-text-inner-arrow.svg" alt="стрелка" class="inner-arrow">
                    </a>
                </div>
            </div>
        </div>
    </section>

    <? require $_SERVER["DOCUMENT_ROOT"] . "/components/news-list/mainpage-buyout-coins/template.php"; ?>
</div>

<?php require($_SERVER["DOCUMENT_ROOT"]."/footer.html");?>