<link rel="stylesheet" href="/components/news/encyclopedia-page/style.css">

<?
    $items = [
        [
            "DATE" => "21.10.2021",
            "PREVIEW_IMAGE" => [ "SRC" => "/images/encyclopedia/preview.jpg"],
            "PREVIEW_TEXT" => "Что подарить мужчине? Идеи подарка для мужчин по случаю праздника",
            "DETAIL_PAGE_URL" => "/encyclopedia-detail/detail.php"
        ],
        [
            "DATE" => "21.10.2021",
            "PREVIEW_IMAGE" => [ "SRC" => "/images/encyclopedia/preview-1.jpg"],
            "PREVIEW_TEXT" => "Что подарить мужчине? Идеи подарка для мужчин по случаю праздника",
            "DETAIL_PAGE_URL" => "/encyclopedia-detail/detail.php"
        ],
        [
            "DATE" => "21.10.2021",
            "PREVIEW_IMAGE" => [ "SRC" => "/images/encyclopedia/detail.jpg"],
            "PREVIEW_TEXT" => "Что подарить мужчине? Идеи подарка для мужчин по случаю праздника",
            "DETAIL_PAGE_URL" => "/encyclopedia-detail/detail.php"
        ],
        [
            "DATE" => "21.10.2021",
            "PREVIEW_IMAGE" => [ "SRC" => "/images/encyclopedia/preview.jpg"],
            "PREVIEW_TEXT" => "Что подарить мужчине? Идеи подарка для мужчин по случаю праздника",
            "DETAIL_PAGE_URL" => "/encyclopedia-detail/detail.php"
        ],
        [
            "DATE" => "21.10.2021",
            "PREVIEW_IMAGE" => [ "SRC" => "/images/encyclopedia/preview.jpg"],
            "PREVIEW_TEXT" => "Что подарить мужчине? Идеи подарка для мужчин по случаю праздника",
            "DETAIL_PAGE_URL" => "/encyclopedia-detail/detail.php"
        ],
        [
            "DATE" => "21.10.2021",
            "PREVIEW_IMAGE" => [ "SRC" => "/images/encyclopedia/preview.jpg"],
            "PREVIEW_TEXT" => "Что подарить мужчине? Идеи подарка для мужчин по случаю праздника",
            "DETAIL_PAGE_URL" => "/encyclopedia-detail/detail.php"
        ],
        [
            "DATE" => "21.10.2021",
            "PREVIEW_IMAGE" => [ "SRC" => "/images/encyclopedia/preview.jpg"],
            "PREVIEW_TEXT" => "Что подарить мужчине? Идеи подарка для мужчин по случаю праздника",
            "DETAIL_PAGE_URL" => "/encyclopedia-detail/detail.php"
        ],
        [
            "DATE" => "21.10.2021",
            "PREVIEW_IMAGE" => [ "SRC" => "/images/encyclopedia/preview.jpg"],
            "PREVIEW_TEXT" => "Что подарить мужчине? Идеи подарка для мужчин по случаю праздника",
            "DETAIL_PAGE_URL" => "/encyclopedia-detail/detail.php"
        ],
        [
            "DATE" => "21.10.2021",
            "PREVIEW_IMAGE" => [ "SRC" => "/images/encyclopedia/preview.jpg"],
            "PREVIEW_TEXT" => "Что подарить мужчине? Идеи подарка для мужчин по случаю праздника",
            "DETAIL_PAGE_URL" => "/encyclopedia-detail/detail.php"
        ],
        [
            "DATE" => "21.10.2021",
            "PREVIEW_IMAGE" => [ "SRC" => "/images/encyclopedia/preview.jpg"],
            "PREVIEW_TEXT" => "Что подарить мужчине? Идеи подарка для мужчин по случаю праздника",
            "DETAIL_PAGE_URL" => "/encyclopedia-detail/detail.php"
        ],
        [
            "DATE" => "21.10.2021",
            "PREVIEW_IMAGE" => [ "SRC" => "/images/encyclopedia/preview.jpg"],
            "PREVIEW_TEXT" => "Что подарить мужчине? Идеи подарка для мужчин по случаю праздника",
            "DETAIL_PAGE_URL" => "/encyclopedia-detail/detail.php"
        ],
        [
            "DATE" => "21.10.2021",
            "PREVIEW_IMAGE" => [ "SRC" => "/images/encyclopedia/preview.jpg"],
            "PREVIEW_TEXT" => "Что подарить мужчине? Идеи подарка для мужчин по случаю праздника",
            "DETAIL_PAGE_URL" => "/encyclopedia-detail/detail.php"
        ],
        [
            "DATE" => "21.10.2021",
            "PREVIEW_IMAGE" => [ "SRC" => "/images/encyclopedia/preview.jpg"],
            "PREVIEW_TEXT" => "Что подарить мужчине? Идеи подарка для мужчин по случаю праздника",
            "DETAIL_PAGE_URL" => "/encyclopedia-detail/detail.php"
        ],
    ];
?>

<div class="encyclopedia-list-items">
    <?
        foreach($items as $encyclopediaItem)
        {?>
            <a class="encyclopedia-item" href="<?=$encyclopediaItem["DETAIL_PAGE_URL"]?>">
                <p class="description-text encyclopedia-item__date"><?=$encyclopediaItem["DATE"]?></p>

                <img src="<?=$encyclopediaItem["PREVIEW_IMAGE"]["SRC"]?>" alt="" class="encyclopedia-item__preview-image">

                <p class="heading-4 encyclopedia-item__preview-text">
                    <?=$encyclopediaItem["PREVIEW_TEXT"]?>
                </p>
            </a>
        <?}
    ?>
</div>