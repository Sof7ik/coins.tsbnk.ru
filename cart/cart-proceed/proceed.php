<?php require($_SERVER["DOCUMENT_ROOT"]."/header.html"); ?>
<link rel="stylesheet" href="/cart/cart-proceed/proceed.css">

<?php require $_SERVER["DOCUMENT_ROOT"] . "/components/breadcrumbs/breadcrumbs-blue/breadcrumbs.html"; ?>

<?
    $coins = [
        [
            "name" => 'Российская монета "Сезоны русского языка и литературы во Французской Республике и французского языка и литературы в Российской Федерации" 2012 из серебро 31.1 гр.',
            'image' => "/images/coins/coin-1.png",
            'artikul' => "4353461",
            "quantity" => "2",
            "price-per-item" => "100500"
        ],
        [
            "name" => 'Российская монета "Сезоны русского языка и литературы во Французской Республике и французского языка и литературы в Российской Федерации" 2012 из серебро 31.1 гр.',
            'image' => "/images/coins/coin-1.png",
            'artikul' => "4353461",
            "quantity" => "5",
            "price-per-item" => "24000"
        ],
        [
            "name" => 'Российская монета "Сезоны русского языка и литературы во Французской Республике и французского языка и литературы в Российской Федерации" 2012 из серебро 31.1 гр.',
            'image' => "/images/coins/coin-1.png",
            'artikul' => "4353461",
            "quantity" => "1",
            "price-per-item" => "24312"
        ],
    ]
?>

<div class="content-container">
    <h1 class="heading-1 cart-proceed-title">Оформление заказа</h1>

    <div class="cart-proceed-content-wrapper">
        <div class="cart-proceed-left-wrapper">
            <section class="cart-coins cart-proceed__left-block">
                <h2 class="heading-3 cart-coins__title">1. Товары в корзине</h2>

                <div class="cart-coins__list">
                    <?foreach($coins as $key => $coin) {?>
                        <div class="cart-coin-item">
                            <div class="cart-coin-item__left">
                                <img src="<?=$coin["image"]?>" alt="" class="cart-coin-item__avatar">

                                <p class="cart-coin-item__name"><?=$coin["name"]?></p>
                            </div>

                            <div class="cart-coin-item__right">
                                <div class="cart-coin__artikul-wrapper">
                                    <p class="cart-coin__artikul-name">Артикул</p>
                                    <p class="cart-coin__artikul-value"><?=$coin["artikul"]?></p>
                                </div>

                                <div class="cart-coin__quantity-wrapper">
                                    <p class="cart-coin__quantity-name">Количество</p>
                                    <p class="cart-coin__quantity-value"><?=$coin["quantity"]?></p>
                                </div>
                                
                                <div class="cart-coin__total-sum-wrapper">
                                    <p class="cart-coin__total-sum-name">Cумма</p>
                                    <p class="cart-coin__total-sum-value">
                                        <?= (int)$coin["quantity"] * (int)$coin["price-per-item"]?> &#8381;
                                    </p>
                                </div>
                            </div>
                        </div>
                    <?}?>
                </div>
            </section>

            <section class="delivery-region cart-proceed__left-block">
                <h2 class="heading-3 delivery-region__title">2. Регион доставки</h2>

                <div class="delivery-region__form">
                    <div class="delivery-region__city-choose">
                        <div class="delivery-region__input-wrapper">
                            <label for="description-text delivery-region__city">Город*</label>

                            <input 
                                type="text"
                                name="city" 
                                autocomplete="address-level2" 
                                placeholder="Введите название"
                                id="delivery-region__city">
                        </div>

                        <div class="delivery-region__input-wrapper">
                            <label for="description-text delivery-region__city-2">Город*</label>

                            <input 
                                type="text"
                                name="city" 
                                autocomplete="address-level2" 
                                placeholder="Введите название"
                                id="delivery-region__city-2">
                        </div>
                    </div>

                    <div class="delivery-region__input-wrapper post-code-input">
                            <label for="description-text delivery-region__postal">Индекс*</label>

                            <input 
                                type="text"
                                name="postal" 
                                autocomplete="postal-code" 
                                placeholder="105005"
                                id="delivery-region__postal">
                        </div>
                </div>

                <p class="desctription-text regular delivery-form__description">
                    Выберите свой город в списке. Если вы не нашли свой город, выберите "другое местоположение", а город впишите в поле "Город"
                </p>
            </section>

            <section class="delivery-variants cart-proceed__left-block">
                <h2 class="heading-3 delivery-variants__title">3. Доставка</h2>

                <div class="delivery-variants__list-summary-wrapper">
                    <div class="delivery-variants__list">
                        <div class="delivery-variants__item" role="button">
                            <div class="delivery-variant__icon-cost">
                                <svg width="42" height="40" viewBox="0 0 42 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_2_5685)">
                                        <path d="M41.0922 11.0958V11.0635C41.0922 11.0471 41.0838 11.031 41.0838 11.0148C41.0838 11.0066 41.0753 10.9905 41.0753 10.9826C41.0753 10.9661 41.0672 10.9582 41.0672 10.9421C41.0672 10.9256 41.0588 10.9177 41.0506 10.9016C41.0484 10.8892 41.0425 10.8778 41.0338 10.869C41.0256 10.8529 41.0256 10.8367 41.0172 10.8285C41.0091 10.8206 41.0091 10.8124 41.0006 10.7962C40.9942 10.7817 40.9857 10.7681 40.9757 10.7557C40.9757 10.7475 40.9675 10.7475 40.9675 10.7396L36.6956 4.01762C36.5437 3.78003 36.2765 3.63609 35.9892 3.63672H5.97909C5.71743 3.63672 5.47103 3.75694 5.31423 3.96067L0.203087 10.6747C0.203087 10.6827 0.194646 10.6827 0.194646 10.6909C0.186206 10.707 0.17809 10.7152 0.169649 10.7314C0.159585 10.7393 0.153417 10.751 0.153092 10.7636C0.144652 10.7801 0.136536 10.788 0.128095 10.8041C0.119979 10.8124 0.119979 10.8285 0.111538 10.8367C0.103098 10.8529 0.103098 10.8611 0.0949818 10.8772C0.0865412 10.8851 0.0865412 10.9016 0.0784252 10.9177C0.0784252 10.9338 0.0699845 10.9421 0.0699845 10.9582C0.0699845 10.9743 0.0615439 10.9826 0.0615439 10.9987C0.0615439 11.0066 0.0534278 11.0231 0.0534278 11.031C0.05148 11.0446 0.0485583 11.0582 0.0449872 11.0715V13.6792C0.038819 14.7447 0.469617 15.7681 1.24194 16.522C1.82954 17.1003 2.5879 17.4853 3.41086 17.6236V35.6999C3.41216 36.1466 3.78355 36.5086 4.24194 36.5098H36.8952C37.3536 36.5086 37.725 36.1466 37.7263 35.6999V17.6153C39.6846 17.2759 41.1065 15.6096 41.0922 13.6713V11.0958ZM38.7733 10.3508H34.2024L31.4267 5.24857H35.5405L38.7733 10.3508ZM17.2318 5.24857L15.5946 10.3508H8.95409L12.3034 5.24857H17.2318ZM22.1601 5.24857L23.7973 10.3508H17.3399L18.977 5.24857H22.1601ZM29.5402 5.24857L32.3159 10.3508H25.5426L23.9054 5.24857H29.5402ZM17.0324 11.9705H24.0966V14.4002C24.0966 16.3012 22.515 17.8422 20.5645 17.8422C18.6138 17.8422 17.0324 16.3012 17.0324 14.4002V11.9705ZM8.31423 11.9705H15.3784V14.4002C15.3784 16.3012 13.7971 17.8422 11.8463 17.8422C9.89555 17.8422 8.31423 16.3012 8.31423 14.4002V11.9705ZM11.0568 19.4053C11.3152 19.4445 11.5765 19.4635 11.8382 19.4619C13.6013 19.4606 15.244 18.5888 16.2014 17.1455C17.162 18.5967 18.816 19.4701 20.5882 19.4619C22.3604 19.4537 24.0057 18.565 24.9524 17.105C25.9032 18.5723 27.5599 19.4619 29.3405 19.4619C29.5879 19.4622 29.8353 19.4458 30.0804 19.4132V28.176H11.0568V19.4053ZM29.3324 17.8422C27.3833 17.838 25.8046 16.2993 25.8003 14.4002V11.9705H32.8645V14.4002C32.8632 16.3005 31.2825 17.8409 29.3324 17.8422ZM6.39463 5.24857H10.3173L6.96794 10.3508H2.52167L6.39463 5.24857ZM1.69903 13.6713V11.9705H6.6024V13.6713C6.61571 14.8554 5.72749 15.8665 4.5247 16.0361C4.4312 16.0035 4.33284 15.987 4.23382 15.9873C4.11955 15.988 4.00657 16.0098 3.90139 16.0522C2.64471 15.9348 1.68897 14.9013 1.69903 13.6713ZM5.07302 34.8901V17.5831C5.8304 17.423 6.52351 17.0516 7.06761 16.5138L7.10916 16.4733C7.58444 17.4954 8.39019 18.3373 9.40307 18.8706V28.9859C9.40437 29.4329 9.77576 29.7945 10.2342 29.7957H30.9115C31.3699 29.7945 31.7413 29.4329 31.7426 28.9859V18.8868C32.7671 18.366 33.5855 17.5286 34.0696 16.5059L34.0777 16.5138C34.6244 17.0484 35.3165 17.4195 36.0723 17.5831V34.8901H5.07302ZM39.43 13.6713C39.4391 14.9038 38.4788 15.9383 37.2192 16.0522C37.1137 16.0098 37.0008 15.988 36.8868 15.9873C36.7878 15.987 36.6894 16.0035 36.5959 16.0361C35.3935 15.8662 34.5052 14.8554 34.5182 13.6713V11.9705H39.4216V13.6713H39.43Z"/>
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_2_5685">
                                            <rect width="41.0472" height="40" fill="white" transform="translate(0.0449219)"/>
                                        </clipPath>
                                    </defs>
                                </svg>
    
                                <span class="delivery-variant__cost">0 &#8381;</span>
                            </div>
    
                            <p class="delivery-variant__name">Самовывоз</p>
                        </div>
    
                        <div class="delivery-variants__item" role="button">
                            <div class="delivery-variant__icon-cost">
                                <svg width="41" height="40" viewBox="0 0 41 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_2_5680)">
                                        <path d="M38.4078 17.0799L33.4512 12.4978C32.3671 11.4958 30.9443 10.9392 29.4675 10.9398H26.9348V10.4287C26.9339 8.11589 25.057 6.24122 22.7415 6.24023H4.43353C2.11805 6.24122 0.241217 8.11589 0.240234 10.4287V29.1846C0.241545 29.6469 0.616321 30.021 1.07889 30.0223H3.69545C4.05745 32.1649 5.91495 33.7333 8.09022 33.7333C10.2652 33.7333 12.1227 32.1649 12.4847 30.0223H28.1004C28.4624 32.1649 30.3199 33.7333 32.4952 33.7333C34.6702 33.7333 36.5277 32.1649 36.8897 30.0223H39.4476C39.9101 30.021 40.2849 29.6469 40.2862 29.1846V21.3858C40.2918 19.751 39.6104 18.1888 38.4078 17.0799ZM37.2671 18.3116H32.3023V13.7209L32.3104 13.7291L37.2671 18.3116ZM4.43353 7.91562H22.7415C24.1293 7.91955 25.2533 9.04259 25.2575 10.4287V20.1375H1.91755V10.4287C1.92148 9.04259 3.04581 7.91955 4.43353 7.91562ZM8.09022 32.0579C6.55704 32.0579 5.31413 30.8164 5.31413 29.2854C5.31413 27.754 6.55704 26.5125 8.09022 26.5125C9.62307 26.5125 10.866 27.754 10.866 29.2854C10.8643 30.8158 9.62241 32.0563 8.09022 32.0579ZM8.09022 24.8286C5.98898 24.8315 4.17407 26.2962 3.72919 28.3469H1.91755V21.8129H25.2575V28.3469H12.4513C12.0087 26.2945 10.1921 24.8289 8.09022 24.8286ZM32.4952 32.0579C30.962 32.0579 29.7191 30.8164 29.7191 29.2854C29.7191 27.754 30.962 26.5125 32.4952 26.5125C34.0281 26.5125 35.271 27.754 35.271 29.2854C35.2693 30.8158 34.0274 32.0563 32.4952 32.0579ZM38.6174 28.3469H36.8562C36.414 26.2945 34.5971 24.8286 32.4952 24.8286C30.393 24.8286 28.5761 26.2945 28.1342 28.3469H26.9348V12.6152H29.4675C29.8587 12.6169 30.2479 12.6705 30.6249 12.7743V18.3116C30.6276 19.2356 31.3771 19.984 32.3023 19.9869H38.374C38.5355 20.4356 38.6178 20.9091 38.6174 21.3858V28.3469Z"/>
    
                                        <path d="M8.08902 26.8984C6.77337 26.8984 5.70703 27.9636 5.70703 29.2774C5.70703 30.5912 6.77337 31.6563 8.08902 31.6563C9.40434 31.6563 10.4707 30.5912 10.4707 29.2774C10.4687 27.9642 9.40336 26.9004 8.08902 26.8984ZM8.08902 29.9894C7.69983 29.9894 7.38435 29.6743 7.38435 29.2859C7.38435 28.8971 7.69983 28.582 8.08902 28.582C8.47789 28.582 8.79337 28.8971 8.79337 29.2859C8.79107 29.6733 8.4769 29.9871 8.08902 29.9894Z"/>
    
                                        <path d="M32.4972 26.8984C31.1816 26.8984 30.1152 27.9636 30.1152 29.2774C30.1152 30.5912 31.1816 31.6563 32.4972 31.6563C33.8125 31.6563 34.8789 30.5912 34.8789 29.2774C34.8769 27.9642 33.8115 26.9004 32.4972 26.8984ZM32.4972 29.9894C32.108 29.9894 31.7925 29.6743 31.7925 29.2859C31.7925 28.8971 32.108 28.582 32.4972 28.582C32.8861 28.582 33.2016 28.8971 33.2016 29.2859C33.1993 29.6733 32.8851 29.9871 32.4972 29.9894Z"/>
    
                                        <path d="M11.821 16.3353C11.9776 16.4953 12.1922 16.5857 12.4163 16.5866C12.6387 16.585 12.852 16.498 13.0118 16.3438L17.0456 12.3144C17.3722 11.9881 17.3722 11.4594 17.0456 11.1331C16.7193 10.8072 16.1899 10.8072 15.8633 11.1331L12.4248 14.5677L10.7557 12.8674C10.4317 12.5389 9.90225 12.5349 9.57334 12.8589C9.24443 13.1828 9.24082 13.7116 9.56482 14.0402L11.821 16.3353Z" />
                                    </g>
    
                                    <defs>
                                        <clipPath id="clip0_2_5680">
                                            <rect width="40.046" height="40" fill="white" transform="translate(0.240234)"/>
                                        </clipPath>
                                    </defs>
                                </svg>
    
                                <span class="delivery-variant__cost">1 239 &#8381;</span>
                            </div>
    
                            <p class="delivery-variant__name">Доставка за МКАД и регионы России</p>
                        </div>
    
                        <div class="delivery-variants__item active" role="button">
                            <div class="delivery-variant__icon-cost">
                                <svg width="41" height="40" viewBox="0 0 41 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_2_5687)">
                                        <path d="M40.4538 11.5204C40.4538 11.4936 40.4447 11.4758 40.4447 11.4491C40.4447 11.44 40.4357 11.4313 40.4357 11.4223C40.427 11.3955 40.427 11.3778 40.4179 11.351C40.4179 11.3423 40.4092 11.3333 40.4092 11.3242C40.4001 11.3065 40.3911 11.2797 40.3824 11.262C40.3824 11.2533 40.3824 11.2533 40.3733 11.2442L35.4803 1.32681C35.3281 1.02287 35.0183 0.829864 34.6781 0.828125H6.21011C5.87031 0.829864 5.5601 1.02287 5.40795 1.32681L0.51491 11.2442C0.51491 11.2533 0.51491 11.2533 0.505858 11.262C0.497154 11.2797 0.488102 11.3065 0.479398 11.3242C0.479398 11.3333 0.470346 11.3423 0.470346 11.351C0.459205 11.3733 0.453286 11.3976 0.45259 11.4223C0.45259 11.4313 0.443537 11.44 0.443537 11.4491C0.436226 11.472 0.433093 11.496 0.434833 11.5204V11.5468C0.434833 11.5826 0.425781 11.6094 0.425781 11.6449V38.2193C0.427174 38.7103 0.825469 39.1082 1.31707 39.1096H39.5802C40.0718 39.1082 40.4701 38.7103 40.4715 38.2193V11.6358C40.4729 11.6031 40.4698 11.5701 40.4625 11.5381C40.4618 11.5311 40.4586 11.5249 40.4538 11.5204ZM38.1451 10.7455H26.5406L25.07 2.60866H34.1256L38.1451 10.7455ZM15.9878 12.5261H24.9007V21.6513L24.6866 21.4287C24.5199 21.2528 24.2876 21.153 24.045 21.153C23.804 21.1537 23.5736 21.2496 23.4033 21.42L22.2356 22.6129L21.086 21.4287C20.9161 21.258 20.6852 21.1617 20.4443 21.1617C20.203 21.1617 19.9722 21.258 19.8023 21.4287L18.6527 22.6129L17.4849 21.42C17.315 21.2496 17.0842 21.1537 16.8433 21.153C16.6006 21.153 16.3684 21.2528 16.2016 21.4287L15.9878 21.6513V12.5261ZM23.2606 2.60866L24.7312 10.7455H16.1661L17.6277 2.60866H23.2606ZM6.76299 2.60866H15.8183L14.3477 10.7455H2.74314L6.76299 2.60866ZM2.20836 37.329V12.5261H14.2053V23.886C14.2056 24.2512 14.4284 24.5791 14.7679 24.7144C15.1073 24.8497 15.4952 24.7648 15.7469 24.5002L16.861 23.3251L18.0197 24.5092C18.19 24.6792 18.4208 24.7756 18.6617 24.7763C18.9002 24.777 19.1286 24.6806 19.2943 24.5092L20.4443 23.3251L21.5939 24.5092C21.7617 24.6779 21.9887 24.7735 22.2269 24.7763C22.4654 24.777 22.6938 24.6806 22.8595 24.5092L24.0182 23.3251L25.1323 24.5002C25.3029 24.6768 25.5375 24.7763 25.783 24.7763C25.8958 24.7773 26.0079 24.7561 26.1127 24.714C26.4522 24.5791 26.6746 24.2508 26.6743 23.886V12.5261H38.6799V37.329H2.20836Z"/>
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_2_5687">
                                            <rect width="40.046" height="40" fill="white" transform="translate(0.425781)"/>
                                        </clipPath>
                                    </defs>
                                </svg>
    
                                <span class="delivery-variant__cost">500 &#8381;</span>
                            </div>
    
                            <p class="delivery-variant__name">Доставка в пределах МКАД</p>
                        </div>
                    </div>
    
                    <div class="delivery-variants__summary">
                        <p class="delivery-type__summary">
                            Ваш выбор: <span id="delivery-type__summary-span">Доставка в пределах МКАД</span>
                        </p>

                        <p class="description-text regular summary-delivery-cost">
                            Стоимость: <span id="delivery-cost__summary-span">500</span> &#8381;
                        </p>
                    </div>
                </div>
            </section>

            <section class="pickup-points cart-proceed__left-block">
                <h2 class="heading-3 pickup-points__title">4. Доставка</h2>

                <div class="ymaps-wrapper">

                </div>

                <div class="pickup-points-list">
                    <h3 class="heading-4 pickup-points-list__title">Пункты самовывоза</h3>

                    <div class="heading-office-wrapper">
                        <div class="heading-oofice__left">
                            <address class="heading-4 heading-office__address">
                                г. Москва, Дубининская, 94
                            </address>
                            <p class="heading-office__description">
                                Головной офис
                            </p>

                            <div class="heading-office__bottom-description">
                                <div class="heading-office__bottom-description-left">
                                    <p class="description-text bottom-description__address">г. Москва, Дубининская, 94</p>
                                    <p class="bottom-description__opened-time">пн-пт с 9-30 до 17-30</p>

                                    <button class="mint-btn blue choose-pickup-point">Выбрать</button>
                                </div>

                                <div class="heading-office__bottom-description-right">
                                    <a href="tel:+7 800 505 37 73">8 800 505 37 73</a>

                                    <p class="bottom-description__text">
                                        Описание: Здесь вы найдете популярные российские и иностранные монеты и редкие нумизматические экземпляры.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <img 
                            src="/images/cart/proceed/heading-office.jpg" 
                            alt="головной офис" 
                            class="heading-office-avatar">
                    </div>

                    <div class="offices-list-wrapper">
                        <div class="office-item">
                            <p class="description-text office-item__name">г. Нижний Новгород, ул. Студеная, д. 5</p>
                            <button class="mint-btn blue choose-pickup-point">Выбрать</button> 
                        </div>

                        <div class="office-item">
                            <p class="description-text office-item__name">
                                196070, г. Санкт-Петербург, проспект Московский, дом 167, лит. А
                            </p>
                            <button class="mint-btn blue choose-pickup-point">Выбрать</button> 
                        </div>

                        <div class="office-item">
                            <p class="description-text office-item__name">
                                196070, г. Санкт-Петербург, проспект Московский, дом 167, лит. А
                            </p>
                            <button class="mint-btn blue choose-pickup-point">Выбрать</button> 
                        </div>

                        <? require $_SERVER["DOCUMENT_ROOT"]."/components/pagination/pagination-white/template.php"; ?>
                    </div>
                </div>
            </section>

            <section class="payments cart-proceed__left-block">
                <h2 class="heading-3 payments__title">5. Оплата</h2>

                <div class="payment-types-summary-wrapper">
                    <div class="payment-types">
                        <div class="payment-type active" role="button">
                            <div class="paymnet-type__icon-wrapper">
                                <svg class="payment-type__icon" width="41" height="40" viewBox="0 0 41 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_2_5773)">
                                        <path d="M36.7292 6.66602H4.27081C1.91675 6.66602 0 8.53602 0 10.8327V29.1661C0 31.4627 1.91675 33.3327 4.27081 33.3327H36.7291C39.0832 33.3327 40.9999 31.4627 40.9999 29.1661V10.8327C41 8.53602 39.0832 6.66602 36.7292 6.66602ZM39.2917 29.166C39.2917 30.5444 38.142 31.666 36.7292 31.666H4.27081C2.85799 31.666 1.70831 30.5444 1.70831 29.166V10.8327C1.70831 9.45437 2.85799 8.33273 4.27081 8.33273H36.7291C38.1419 8.33273 39.2916 9.45437 39.2916 10.8327V29.166H39.2917Z" />
                                        <path d="M40.1458 11.666H0.854193C0.382693 11.666 0 12.0394 0 12.4994V17.4994C0 17.9594 0.382693 18.3327 0.854193 18.3327H40.1459C40.6174 18.3327 41.0001 17.9594 41.0001 17.4994V12.4994C41 12.0394 40.6173 11.666 40.1458 11.666ZM39.2917 16.666H1.70831V13.3327H39.2916V16.666H39.2917Z" />
                                        <path d="M16.2292 23.334H5.97919C5.50769 23.334 5.125 23.7073 5.125 24.1673C5.125 24.6273 5.50769 25.0006 5.97919 25.0006H16.2292C16.7007 25.0006 17.0834 24.6273 17.0834 24.1673C17.0834 23.7073 16.7007 23.334 16.2292 23.334Z" />
                                        <path d="M16.2292 26.666H5.97919C5.50769 26.666 5.125 27.0394 5.125 27.4994C5.125 27.9594 5.50769 28.3327 5.97919 28.3327H16.2292C16.7007 28.3327 17.0834 27.9594 17.0834 27.4994C17.0833 27.0394 16.7007 26.666 16.2292 26.666Z" />
                                        <path d="M33.3118 21.666H31.6035C30.1907 21.666 29.041 22.7877 29.041 24.166V25.8327C29.041 27.211 30.1907 28.3327 31.6035 28.3327H33.3118C34.7246 28.3327 35.8743 27.211 35.8743 25.8327V24.166C35.8743 22.7877 34.7246 21.666 33.3118 21.666ZM34.166 25.8327C34.166 26.2927 33.7833 26.6661 33.3118 26.6661H31.6035C31.132 26.6661 30.7493 26.2927 30.7493 25.8327V24.1661C30.7493 23.7061 31.132 23.3327 31.6035 23.3327H33.3118C33.7833 23.3327 34.166 23.7061 34.166 24.1661V25.8327Z"/>
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_2_5773">
                                            <rect width="41" height="40" fill="white"/>
                                        </clipPath>
                                    </defs>
                                </svg>
                            </div>
    
                            <p class="payment-type__name">
                                Онлайн-оплата на сайте через платежную систему банка
                            </p>
                        </div>

                        <div class="payment-type" role="button">
                            <div class="paymnet-type__icon-wrapper">
                                <svg class="payment-type__icon" width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_2_5769)">
                                        <path d="M19.9964 16.2591C20.7703 16.2604 21.3975 16.8876 21.3988 17.6615C21.3988 18.1253 21.7748 18.5013 22.2386 18.5013C22.7025 18.5013 23.0784 18.1253 23.0784 17.6615C23.0768 16.2837 22.1615 15.0738 20.8362 14.6972V14.1933C20.8362 13.7295 20.46 13.3535 19.9964 13.3535C19.5326 13.3535 19.1566 13.7295 19.1566 14.1933V14.6972C17.6765 15.1161 16.732 16.5625 16.9436 18.086C17.1552 19.6097 18.4582 20.7438 19.9964 20.7438C20.7709 20.7438 21.3988 21.3717 21.3988 22.1462C21.3988 22.9208 20.7709 23.5486 19.9964 23.5486C19.2216 23.5486 18.5937 22.9208 18.5937 22.1462C18.5937 21.6824 18.2177 21.3064 17.7539 21.3064C17.2903 21.3064 16.9141 21.6824 16.9141 22.1462C16.916 23.524 17.831 24.7339 19.1566 25.1108V25.7909C19.1566 26.2547 19.5326 26.6307 19.9964 26.6307C20.46 26.6307 20.8362 26.2547 20.8362 25.7909V25.1108C22.3161 24.6916 23.2605 23.2452 23.0489 21.7217C22.8373 20.1983 21.5346 19.0639 19.9964 19.0642C19.2216 19.0642 18.5937 18.4363 18.5937 17.6615C18.5937 16.8869 19.2216 16.2591 19.9964 16.2591Z" />
                                        <path d="M35.7925 7.66797H4.19903C1.88038 7.66895 0.000984153 9.54835 0 11.867V28.1091C0.000984153 30.4277 1.88038 32.3071 4.19903 32.3081H35.801C38.1197 32.3071 39.9991 30.4277 40.0001 28.1091V11.867C39.9922 9.54802 38.1118 7.67125 35.7925 7.66797ZM38.3119 28.1091C38.308 29.4987 37.1824 30.6242 35.7925 30.6285H4.19903C2.80942 30.6242 1.68355 29.4987 1.67961 28.1091V11.867C1.68355 10.4774 2.80942 9.35185 4.19903 9.34758H35.801C37.1906 9.35185 38.3162 10.4774 38.3204 11.867L38.3119 28.1091Z" />
                                        <path d="M33.055 11.3116C32.8962 11.1414 32.6745 11.0443 32.4419 11.043H7.60033C7.36905 11.0426 7.14795 11.1368 6.9872 11.3031L3.56073 14.9228C3.41278 15.079 3.33142 15.2869 3.33405 15.5021V24.4714C3.33536 24.6859 3.41606 24.8926 3.56073 25.0507L6.9872 28.6704C7.14696 28.8384 7.36873 28.9325 7.60033 28.9309H32.3999C32.6312 28.9309 32.8523 28.8367 33.013 28.6704L36.4392 25.0507C36.5874 24.8945 36.6688 24.6866 36.6662 24.4714V15.5021C36.6649 15.2902 36.5838 15.0862 36.4392 14.931L33.055 11.3116ZM34.9866 24.1354L32.0387 27.2512H7.96151L5.01366 24.1354V15.8381L7.96151 12.7226H32.0807L34.9866 15.8381V24.1354Z"/>
                                    </g>

                                    <defs>
                                        <clipPath id="clip0_2_5769">
                                        <rect width="40" height="40" fill="white"/>
                                        </clipPath>
                                    </defs>
                                </svg>
                            </div>
    
                            <p class="payment-type__name">
                                Наличными в кассе банка
                            </p>
                        </div>
                    </div>

                    <div class="payment-type-summary">
                        <p class="payment-type-summary__text">
                            Ваш выбор: <span id="payment-type-summary__choise">Онлайн-оплата на сайте через платежную систему банка</span>
                        </p>
                    </div>
                </div>
            </section>

            <section class="customer-info cart-proceed__left-block">
                <h2 class="heading-3 customer-info__title">6. Покупатель</h2>

                <div class="customer-info-form">
                    <div class="form-input-wrapper">
                        <label for="customer-info__name">ФИО*</label>
                    
                        <input 
                            type="text"
                            placeholder="Пушкин Александр Сергеевич"
                            id="customer-info__name"
                            name="name"
                            autocomplete="name"
                            >
                    </div>

                    <div class="two-inputs-row">
                        <div class="form-input-wrapper">
                            <label for="customer-info__email">Электронная почта*</label>
                        
                            <input 
                                type="email"
                                placeholder="email@gmail.com"
                                id="customer-info__email"
                                name="email"
                                autocomplete="email"
                                >
                        </div>

                        <div class="form-input-wrapper">
                            <label for="customer-info__phone">Телефон*</label>
                        
                            <input 
                                type="tel"
                                placeholder="+7 ___ _________"
                                id="customer-info__phone"
                                name="phone"
                                autocomplete="tel"
                                >
                        </div>
                    </div>

                    <div class="attach-documents">
                        <p class="heading-4 attach-document__title">Прикрепить документы</p>

                        <p class="description-text regular attach-documents__description">
                            Действующее законодательство (ФЗ №115) требует проводить все операции с драгоценными металлами по предъявлению паспорта. Также вы обязаны его показать сотрудникам службы доставки ФГУП Спецсвязь.
                        </p>

                        
                    </div>
                </div>
            </section>

            <button class="mint-btn filled big">Оформить заказ</button>
        </div>

        <div class="cart-proceed-summary">
            <div class="proceed-summary__delivery">
                <p class="proceed-summary__delivery-name">Доставка</p>
                <p class="proceed-summary__delivery-value">Самовывоз</p>
            </div>

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

<?php require($_SERVER["DOCUMENT_ROOT"]."/footer.html"); ?>