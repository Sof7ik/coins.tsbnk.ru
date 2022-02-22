<?php require($_SERVER["DOCUMENT_ROOT"]."/header.html"); ?>
<link rel="stylesheet" href="/styles/mainpage.css">

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