<?php require("header.html"); ?>
<link rel="stylesheet" href="/styles/delivery.css">

<?php require $_SERVER["DOCUMENT_ROOT"] . "/components/breadcrumbs/breadcrumbs-gold/breadcrumbs.html"; ?>
<link rel="stylesheet" href="/components/breadcrumbs/breadcrumbs-gold/breadcrumbs.css">

<div class="content-container">
    <section class="delivery-title">
        <h1 class="heading-1 delivery-title__title-text">Доставка и оплата</h1>

        <p class="delivery-title__description main-text">
            АКБ «Трансстройбанк» осуществляет доставку инвестиционных и памятных, подарочных золотых и серебряных монет по всей России, в том числе и Республике Крым.
        </p>

        <div class="delivery-title__delivery-terms">
            <div class="delivery-terms__delivery-term-item">
                <img src="/images/delivery-terms/gold-clock.png" alt="золотые часы">
                <p class="delivery-term-item__description">
                    Сроки доставки согласуются с менеджером Банка при подтверждении заказа.
                </p>
            </div>

            <div class="delivery-terms__delivery-term-item">
                <img src="/images/delivery-terms/gold-pointer.png" alt="золотой указатель мыши">
                <p class="delivery-term-item__description">
                    Доставка осуществляется по адресу, указанному при оформлении заказа.
                </p>
            </div>

            <div class="delivery-terms__delivery-term-item">
                <img src="/images/delivery-terms/gold-bag.png" alt="золотая сумка">
                <p class="delivery-term-item__description">
                    Заказ вручается лично в руки Получателю, указанному при оформлении заказа на сайте.
                </p>
            </div>
        </div>
    </section>

    <section class="moscow-delivery">
        <h2 class="heading-1 moscow-delivery__title">Доставка по Москве курьером Спецсвязи</h2>

        <div class="moscow-delivery__terms">
            <div class="moscow-delivery__term heading-4">
                Банковской картой на сайте после подтверждения заказа менеджером Банка
            </div>

            <div class="moscow-delivery__term heading-4">
                Наличными при получении заказа в пунктах самовывоза
            </div>
        </div>
    </section>

    <section class="pickup-points">
        <h2 class="heading-3 pickup-points__heading">
            Вы также можете забрать заказ бесплатно, при наличии выбранных Вами монет в других пунктах самовывоза
        </h2>

        <div class="pickup-points__list">
            <? require $_SERVER["DOCUMENT_ROOT"] . "/components/addresses/addresses.php"; ?>
            <link rel="stylesheet" href="/components/addresses/addresses-4-row.css">
        </div>
    </section>

    <?require $_SERVER["DOCUMENT_ROOT"]."/includes/delivery-variants/delivery-variants.php"?>
    <link rel="stylesheet" href="/includes/delivery-variants/delivery-variants.css">
</div>

<?php require "footer.html";?>