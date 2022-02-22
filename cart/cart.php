<?php require($_SERVER["DOCUMENT_ROOT"]."/header.html"); ?>
<link rel="stylesheet" href="/cart/cart.css">
<script src="/cart/cart.js" defer></script>

<?php require $_SERVER["DOCUMENT_ROOT"] . "/components/breadcrumbs/breadcrumbs-blue/breadcrumbs.html"; ?>

<div class="content-container empty-cart">
    <h1 class="heading-1 cart-title">Корзина</h1>

    <?if (false)
    {?>
        <div class="cart-content-wrapper">
            <img src="/images/cart/cart-avatar.png" alt="" class="cart-avatar">
            
            <p class="heading-3 empty-cart-text">Ваша корзина пуста</p>
            
            <a href="/catalog/catalog.php" class="mint-btn filled mini full-width cart-catalog-button">Каталог</a>
        </div>
    <?}
    else 
    {?>
        <div class="cart-items-wrapper">
            <div class="coins-list">
                <div class="coin-item">
                    <div class="coin-image__text-wrapper">
                        <img src="/images/coins/coin-1.png" alt="" class="coin-item__image">

                        <div class="coin-item__name-wrapper">
                            <a href="/catalog/detail/catalog-detail.php" class="description-text coin-item__name">
                                Российская монета "Сезоны русского языка и литературы во Французской Республике и французского языка и литературы в Российской Федерации" 2012 из серебро 31.1 гр.
                            </a>

                            <button class="delete-from-cart">Удалить</button>
                        </div>
                    </div>

                    <div class="price-quantity-wrapper">
                        <div class="coin-prices">
                            <p class="coin-item__old-price">158 000 &#8381;</p>
                            <p class="coin-item__actual-price">142 000 &#8381;</p>
                        </div>

                        <div class="coin-item__quantity-wrapper">
                            <button class="quantity-change-btn decrement" disabled data-quantity-role="decrement">
                                <img src="/images/icons/cart/decrement-quantity.svg" alt="-">
                            </button>

                            <input type="number" class="quantity-value" value="1" min="1">

                            <button class="quantity-change-btn increment" data-quantity-role="increment">
                                 <img src="/images/icons/cart/increment-quantity.svg" alt="+">
                            </button>
                        </div>

                        <button class="delete-from-cart mobile">
                            <img src="/images/icons/header/gold-close.svg" alt="золотой крестик">
                        </button>
                    </div>
                </div>

                <div class="coin-item">
                    <div class="coin-image__text-wrapper">
                        <img src="/images/coins/coin-1.png" alt="" class="coin-item__image">

                        <div class="coin-item__name-wrapper">
                            <a href="/catalog/detail/catalog-detail.php" class="description-text coin-item__name">
                                Российская монета "Сезоны русского языка и литературы во Французской Республике и французского языка и литературы в Российской Федерации" 2012 из серебро 31.1 гр.
                            </a>

                            <button class="delete-from-cart">Удалить</button>
                        </div>
                    </div>

                    <div class="price-quantity-wrapper">
                        <div class="coin-prices">
                            <p class="coin-item__old-price">158 000 &#8381;</p>
                            <p class="coin-item__actual-price">142 000 &#8381;</p>
                        </div>

                        <div class="coin-item__quantity-wrapper">
                            <button class="quantity-change-btn decrement" disabled data-quantity-role="decrement">
                                <img src="/images/icons/cart/decrement-quantity.svg" alt="-">
                            </button>

                            <input type="number" class="quantity-value" value="1" min="1">

                            <button class="quantity-change-btn increment" data-quantity-role="increment">
                                 <img src="/images/icons/cart/increment-quantity.svg" alt="+">
                            </button>
                        </div>

                        <button class="delete-from-cart mobile">
                            <img src="/images/icons/header/gold-close.svg" alt="золотой крестик">
                        </button>
                    </div>
                </div>

                <div class="coin-item">
                    <div class="coin-image__text-wrapper">
                        <img src="/images/coins/coin-1.png" alt="" class="coin-item__image">

                        <div class="coin-item__name-wrapper">
                            <a href="/catalog/detail/catalog-detail.php" class="description-text coin-item__name">
                                Российская монета "Сезоны русского языка и литературы во Французской Республике и французского языка и литературы в Российской Федерации" 2012 из серебро 31.1 гр.
                            </a>

                            <button class="delete-from-cart">Удалить</button>
                        </div>
                    </div>

                    <div class="price-quantity-wrapper">
                        <div class="coin-prices">
                            <p class="coin-item__old-price">158 000 &#8381;</p>
                            <p class="coin-item__actual-price">142 000 &#8381;</p>
                        </div>

                        <div class="coin-item__quantity-wrapper">
                            <button class="quantity-change-btn decrement" disabled data-quantity-role="decrement">
                                <img src="/images/icons/cart/decrement-quantity.svg" alt="-">
                            </button>

                            <input type="number" class="quantity-value" value="1" min="1">

                            <button class="quantity-change-btn increment" data-quantity-role="increment">
                                 <img src="/images/icons/cart/increment-quantity.svg" alt="+">
                            </button>
                        </div>

                        <button class="delete-from-cart mobile">
                            <img src="/images/icons/header/gold-close.svg" alt="золотой крестик">
                        </button>
                    </div>
                </div>
            </div>

            <div class="cart-summary-wrapper">
                <button class="clear-cart">Очистить корзину</button>

                <div class="cart-summary">
                    <p class="cart-summary-text">
                        При оплате инвестиционных монет (Георгий Победоносец) банковской картой к цене добавляется комиссия 2,5 %
                    </p>

                    <div class="order-btn-summ-wrapper">
                        <div class="cart-total-price-wrapper">
                            <p class="cart-total-price__name">Сумма: </p>
                            <p class="cart-total-price__value">284 000 &#8381;</p>
                        </div>

                        <a 
                            href="/cart/cart-proceed/proceed.php" 
                            class="mint-btn big filled full-width cart-proceed-btn desktop">
                            Перейти к оформлению</a>

                        <a 
                        href="/cart/cart-proceed/proceed.php" 
                        class="mint-btn mini filled cart-proceed-btn mobile">
                           Оформить</a>
                    </div>
                
                    <div class="other-pages-links">
                        <a 
                            href="/delivery/delivery.php" 
                            class="other-page-links__link delivery-detail">
                            Подробнее о доставке
                        </a>

                        <a 
                            href="/delivery/delivery.php"
                            class="other-page-links__link payment-detail">
                            Подробнее об оплате
                        </a>

                        <a 
                            href="/sell-rules/sell-rules.php" 
                            class="other-page-links__link sell-rules">
                            Правила продажи
                        </a>
                    </div>
                </div>
            </div>
        </div>
    <?}?>
</div>

<?php require($_SERVER["DOCUMENT_ROOT"]."/footer.html"); ?>