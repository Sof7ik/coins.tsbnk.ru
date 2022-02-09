<?php require($_SERVER["DOCUMENT_ROOT"]."/header.html"); ?>
<link rel="stylesheet" href="/encyclopedia-detail/style.css">

<? require $_SERVER["DOCUMENT_ROOT"]."/components/breadcrumbs/breadcrumbs-blue/breadcrumbs.html";?>

<?
    $arResult = [
    "NAME" => "Шесть памятных монет выпущенных банком России получили награды XV международного конкурса памятных монет \"Монетное созвездие - 2021\"",
    "DATE" => "04.10.2021",
    "DETAIL_TEXT" => "«Монетное созвездие» — один из самых авторитетных в мире и единственный конкурс памятных монет, который проходит на территории нашей страны. В составе жюри — специалисты крупнейших музеев, аукционных домов, нумизматических обществ, банков и специализированных изданий о монетах разных стран.<br><br>
    В этом году на конкурс было представлено 220 монет от 31 участника из 22 стран мира.<br><br>
    В номинации «Монета года» лучшей признана памятная монета, посвященная самоотверженному труду медицинских работников.
    Монета «75-летие Победы советского народа в Великой Отечественной войне 1941–1945 гг.» выиграла в номинации «Серебряная монета года».<br><br>
    Монете «Полярный волк» серии «Сохрани наш мир» было присуждено 2-е место в номинации «Золотая монета года».<br><br>
    Монета «175-летие Русского географического общества» заняла 2-е место в номинации «Монетная классика».<br><br>
    Монете «200-летие открытия Антарктиды русскими мореплавателями Ф. Ф. Беллинсгаузеном и М. П. Лазаревым» присвоили 3-е место в номинации «Лучшее художественное решение».<br><br>
    Монета «Создатель русского фарфора Д. И. Виноградов, к 300-летию со дня рождения (1720)» серии «Выдающиеся личности России» получила 3-е место в номинации «Оригинальная технология».<br><br>
    Банк России является постоянным участником конкурса. Его памятные монеты ранее также были отмечены наградами «Монетного созвездия»",
    "DETAIL_PICTURE" => ["SRC" => "/images/encyclopedia/detail.jpg"],
    "PREVIEW_PICTURE" => ["SRC" => "/images/encyclopedia/preview.jpg"],
    "PROPERTIES" => [
        "linked_coins" => [
            
        ],
        "linked_news" => [

        ]
    ]
]
?>

<div class="content-container">
    <h1 class="heading-1 detail-page-title"><?=$arResult["NAME"]?></h1>

    <section class="detail-image-and-text">
        <div class="detail-text-and-date">
            <p class="detail-page__date"><?=$arResult["DATE"]?></p>

            <p class="detail-text main-text"><?=$arResult["DETAIL_TEXT"]?></p>
        </div>

        <?
            if ($arResult["DETAIL_PICTURE"]["SRC"] != "")
            {
                $imageSrc = $arResult["DETAIL_PICTURE"]["SRC"];
            }
            else if ($arResult["PREVIEW_PICTURE"]["SRC"] != "")
            {
                $imageSrc = $arResult["PREVIEW_PICTURE"]["SRC"];
            }
            else
            {
                $imageSrc = "";
            }


            if ($imageSrc != "")
            {?>
                <img src="<?=$imageSrc?>" alt="" class="detail-picture">
            <?}
        ?>
    </section>

    <?
        // linked coins
        // if (count($linked_coins) > 0)
        if(true)
        {?>
            <? require $_SERVER["DOCUMENT_ROOT"]."/components/news-list/coins-slider/template.php"; ?>
        <?}
    ?>

    <?
        // linked news
        if(true)
        {?>
            <!-- end .content-container -->
            </div>

            <div class="dark-wrapper">
                <? require $_SERVER["DOCUMENT_ROOT"]."/components/news-list/linked-news-4-row/template.php"; ?>
            </div>
        <?}
    ?>
</div>

<?php require($_SERVER["DOCUMENT_ROOT"]."/footer.html");?>