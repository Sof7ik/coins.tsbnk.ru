<?php require($_SERVER["DOCUMENT_ROOT"]."/header.html"); ?>
<link rel="stylesheet" href="/encyclopedia/encyclopedia.css">
<script src="/encyclopedia/encyclopedia.js" defer></script>

<? require $_SERVER["DOCUMENT_ROOT"]."/components/breadcrumbs/breadcrumbs-gold/breadcrumbs.html" ?>

<div class="content-container">
    <h1 class="heading-1 gold encyclopedia__title">Энциклопедия</h1>

    <div class="filter-tabs-wrapper">
        <div class="filter-tabs">
            <button class="filter-tabs__button">Все монеты</button>
            <button class="filter-tabs__button active">Российские монеты</button>
            <button class="filter-tabs__button">Иностранные монеты</button>
            <button class="filter-tabs__button">Юбилейные монеты и банкноты</button>
        </div>
    </div>

    <div class="encyclopedia-list-wrapper">
        <?php require $_SERVER["DOCUMENT_ROOT"]."/components/news/encyclopedia-page/template.php"?>
    </div>

    <?php require $_SERVER["DOCUMENT_ROOT"]."/components/pagination/template.php"?>
</div>

<?php require($_SERVER["DOCUMENT_ROOT"]."/footer.html");?>