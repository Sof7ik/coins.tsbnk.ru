<?php require $_SERVER["DOCUMENT_ROOT"]."/header.html"; ?>
<link rel="stylesheet" href="/contacts/contacts.css">

<?php require $_SERVER["DOCUMENT_ROOT"] . "/components/breadcrumbs/breadcrumbs-gold/breadcrumbs.html"; ?>

<div class="content-container">
    <section class="contacts-top">
        <h1 class="heading-1 gold contacts__title">Контакты</h1>

        <div class="contacts-3-row">
            <div class="contacts-row-item contacts">
                <h2 class="heading-4 contacts-row-item__name">Контакты</h2>

                <div class="contacts-row-item__email-tel">
                    <a href="tel:+7 (808) 505-04-76">+7 (808) 505-04-76</a>
                    <a href="mailto:coins.shop@tsbnk.ru">coins.shop@tsbnk.ru</a>
                </div>

                <div class="contacts-row-item__socials">
                    <a href="https://facebook.com/" target="_blank">
                        <img src="/images/icons/facebook.svg" alt="facebook icon">
                    </a>

                    <a href="https://vk.com/" target="_blank">
                        <img src="/images/icons/vk.svg" alt="vk icon">
                    </a>

                    <a href="https://ok.ru" target="_blank">
                        <img src="/images/icons/odnoklassniki.svg" alt="одноклассники icon">
                    </a>
                </div>
            </div>

            <div class="contacts-row-item opened-time">
                <h2 class="heading-4 contacts-row-item__name">Режим работы</h2>
                
                <p class="main-text">
                    Заказы в интернете-магазине подтверждаются с Пн-Пт с 09.00 до 18.00
                </p>
            </div>

            <div class="contacts-row-item optional">
                <p class="heading-4 contacts-row-item__name">Уважаемые покупатели!</p>

                <p class="main-text">
                    Магазин не работает с 27 декабря 2021 по 9 января 2022. Просьба приобрести интересующие вас монеты
                    заранее.
                </p>
            </div>
        </div>
    </section>

    <section class="contacts-ymaps">
        <div class="custom-ymaps-wrapper">

        </div>
    </section>

    <section class="addresses">
        <div class="inner-addresses-wrapper">
            <? require $_SERVER["DOCUMENT_ROOT"] . "/components/addresses/addresses.php"; ?>

            <div class="ask-question-form-wrapper">
                <div class="messages-wrapper">
                    <div class="success-message showed">
                        <img src="/images/icons/success.svg" alt="иконка с галочкой" class="success-icon">
                        <p class="success-message__text description-text">Спасибо. Ваш вопрос отправлен на модерацию</p>
                    </div>

                    <div class="error-message"></div>
                </div>

                <form action="" method="POST">
                    <h2 class="ask-question__title">Задать вопрос</h2>

                    <input type="text"
                        placeholder="Имя*"
                        name="fname"
                        autocomplete="name">

                    <input type="tel"
                        name="phone"
                        autocomplete="tel"
                        placeholder="Телефон*">

                    <textarea name="question" id="user-question" placeholder="Ваш вопрос"></textarea>

                    <button id="submit-question-form" class="mint-btn big filled">Отправить</button>
                </form>
            </div>
        </div>
    </section>

    <? require $_SERVER["DOCUMENT_ROOT"]."/includes/delivery-variants/delivery-variants.php" ?>
    <link rel="stylesheet" href="/includes/delivery-variants/delivery-variants.css">
</div>

<?php require $_SERVER["DOCUMENT_ROOT"]."/footer.html";?>