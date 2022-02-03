<?php require($_SERVER["DOCUMENT_ROOT"]."/header.html"); ?>
<link rel="stylesheet" href="/about-company/about-company.css">

<?php require $_SERVER["DOCUMENT_ROOT"] . "/components/breadcrumbs/breadcrumbs-blue/breadcrumbs.html"; ?>
<link rel="stylesheet" href="/components/breadcrumbs/breadcrumbs-blue/breadcrumbs.css">

<div class="content-container">
    <section class="about-company-text-image">
        <h1 class="about-company-text__mobile-header heading-1">О Coins.tsbnk</h1>

        <img src="/images/coins-building.jpg" alt="фотография здания ТрансСтройБанк" class="building-photo">

        <div class="about-company-text">
            <h1 class="heading-1">О Coins.tsbnk</h1>

            <p class="about-company-main-text main-text">
                COINS. TSBNK - часть вашей счастливой истории! Интернет-магазин Coins.tsbnk создан командой
                профессиональных специалистов АКБ «Трансстройбанк» (АО), работающих на рынке драгоценных металлов более 8
                лет. Стремительное развитие инвестиционного рынка и мировых технологий позволило нам создать эффективный
                ресурс, предлагающий полный спектр услуг от выбора оригинального подарка до создания собственного
                инвестиционного портфеля из драгоценных металлов. В нашем магазине представлены популярные <a
                    href="">российские</a> и
                <a href="#">иностранные</a> монеты и редкие нумизматические экземпляры.
            </p>
        </div>
    </section>

    <section class="about-company-advantages">
        <div class="advantage-item">
            <div class="advantage-item-index">
                <span class="heading-1 advantage-item-number">01</span>
            </div>

            <div class="advantage-item-text main-text">
                Наши сотрудники проведут грамотную консультацию и помогут в выборе лучшего варианта, исходя из
                индивидуальных потребностей каждого клиента.
            </div>
        </div>

        <div class="advantage-item">
            <div class="advantage-item-index">
                <span class="heading-1 advantage-item-number">02</span>
            </div>

            <div class="advantage-item-text main-text">
                Качество и подлинность монет гарантируется строгим контролем при приемке и высоким профессиональным
                уровнем нашей команды.
            </div>
        </div>
    </section>

<!-- разрыв .content-container -->
</div>

<div class="dark-bg-wrapper">
    <div class="content-container">
        <section class="clients-terms">
            <div class="clients-up">
                <div class="clients-text heading-4">
                    Мы ценим время и сбережения своих клиентов, предлагая лучшие цены на рынке, расширяя ассортиментную
                    линейку и совершенствуя сервис доставки и заказа.<br><br>
                    Постоянным клиентам мы предлагаем гибкую систему скидок.
                </div>

                <img src="/images/about-company-percent-bag.png" alt="золотая сумка" class="clients-up__image"/>
            </div>

            <div class="clients-down-text heading-4">
                В разделах <a href="#">Энциклопедия</a> и <a href="#">Новости</a> Вас ждут интересные исторические
                факты,
                научные статьи, новинки в области рынка драгоценных металлов, различные аналитические материалы и
                обзоры.
                </p>
        </section>

        <? require $_SERVER["DOCUMENT_ROOT"]."/components/news-list/about-company-news/template.php"; ?>

        <? require $_SERVER["DOCUMENT_ROOT"]."/components/news-list/about-company-news/template.php"; ?>
    </div>
    <!-- end .content-container -->
</div>

<?php require $_SERVER["DOCUMENT_ROOT"] . "/footer.html";?>