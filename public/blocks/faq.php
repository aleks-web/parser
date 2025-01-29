<?php
    $accordionHeader = "accordion__title flex justify-between items-center w-full text-[--main-clr] font-bold text-[22px] gap-3 leading-[22px] cursor-pointer transition-all delay-50 md:text-[25px] md:leading-[25px] xl:text-[28px] xl:leading-[28px] group-[.open]/accordion:mb-5";
    $accordionSvg = "min-w-4 max-w-4 p-3 rounded-full box-content aspect-square transition-all ease-in delay-100 -rotate-180 text-[#5A575F] group-[.open]/accordion:bg-[--clr-2] group-[.open]/accordion:-rotate-0 group-[.open]/accordion:text-[--main-clr] xl:min-w-6 xl:max-w-6";
    $accordionDesc = "accordion__content text-[#6F6F6F] text-[16px] leading-[20px] h-0 overflow-hidden sm:text-[17px] sm:leading-[22px] md:text-[18px] md:leading-[25px]";
?>

<div class="gsap-block sm:container px-[0.5rem] pb-16 sm:pb-20 lg:pb-28">
    <h2>
        <span class="title-white sm:pl-0">Часто задаваемые</span>
        <span class="title-blue">вопросы</span>
    </h2>


    <div class="accordion group/accordion border-b pb-5 pt-8">
        <div class="<?= $accordionHeader; ?>">
            <span>Как работаете, как оплатить и нужна ли предоплата?</span>

            <svg class="<?= $accordionSvg; ?>">
                <use xlink:href="#svg-blue-accordion-arrow"></use>
            </svg>
        </div>

        <div class="<?= $accordionDesc; ?>">
            <p class="mb-4">Сперва мы определяемся с тем, какие именно задачи вам нужно выполнить. Лучше всего, если вы опишете нам подробности на странице «<a href="<?= getPageUrl('order-parsing'); ?>">Заказать парсинг</a>».  Наши специалисты оперативно оценят стоимость работы и свяжутся с вами для согласования подробностей.</p>
            <p>Сперва мы делаем первичный парсинг и отдаём вам таблицу с 20 строками данных. Если вас всё устраивает, то уже тогда вы производите полную оплату, а мы делаем полный парсинг исходя из вашего заказа. Если работа будет большая либо вам будет нужен периодический парсинг, оплату можно будет разделить на несколько частей.</p>
        </div>
    </div>

    <div class="accordion group/accordion border-b pb-5 pt-8">
        <div class="<?= $accordionHeader; ?>">
            <span>Сколько стоит парсинг?</span>

            <svg class="<?= $accordionSvg; ?>">
                <use xlink:href="#svg-blue-accordion-arrow"></use>
            </svg>
        </div>

        <div class="<?= $accordionDesc; ?>">
            <p class="mb-4">На итоговую стоимость сбора данных влияет множество факторов:</p>
            <ul class="flex flex-col mb-4 pl-6">
                <li class="list-disc">Объём данных: где-то это интернет-магазин на 500 товаров, а где-то большой каталог с более чем 300 тысячами товаров</li>
                <li class="list-disc">Наличие защитных механизмов, которые будут затруднять получение данных</li>
                <li class="list-disc">Объём данных, которые требуется получить. В одном случае достаточно спарсить цены, в другом случае нужно собрать характеристики, фото, описания, названия и многое другое.</li>
            </ul>
            <p>На нашем сайте есть страница «<a href="<?= getPageUrl('order-parsing'); ?>">Заказать парсинг</a>».  Рекомендуем вам заполнить все данные, отправить нам заявку – а наши специалисты оперативно оценят объём предстоящей работы и быстро сориентируют вас по стоимости.</p>
        </div>
    </div>

    <div class="accordion group/accordion border-b pb-5 pt-8">
        <div class="<?= $accordionHeader; ?>">
            <span>Как быстро я получу результаты?</span>

            <svg class="<?= $accordionSvg; ?>">
                <use xlink:href="#svg-blue-accordion-arrow"></use>
            </svg>
        </div>

        <div class="<?= $accordionDesc; ?>">
            <p class="mb-4">От 1 часа до 5 дней – как правило, мы укладываемся именно в таких временные рамки. Всё будет зависеть от сложности задачи.</p>
        </div>
    </div>

    <div class="accordion group/accordion border-b pb-5 pt-8">
        <div class="<?= $accordionHeader; ?>">
            <span>Как скачать результаты парсинга?</span>

            <svg class="<?= $accordionSvg; ?>">
                <use xlink:href="#svg-blue-accordion-arrow"></use>
            </svg>
        </div>

        <div class="<?= $accordionDesc; ?>">
            <p class="mb-4">Чаще всего мы предоставляем данные в виде таблиц Excel. Однако можем выводить данные в формате CSV, PDF, JSON, отдавать по API.</p>
            <p>Если вам необходим периодический парсинг, то мы можем загружать файлы в облачное хранилище автоматически, а вы будете заходить и скачивать файлы самостоятельно в любое удобное время.</p>
        </div>
    </div>

    <div class="accordion group/accordion border-b pb-5 pt-8">
        <div class="<?= $accordionHeader; ?>">
            <span>Насколько парсинг законен?</span>

            <svg class="<?= $accordionSvg; ?>">
                <use xlink:href="#svg-blue-accordion-arrow"></use>
            </svg>
        </div>

        <div class="<?= $accordionDesc; ?>">
            <p>Мы собираем только информацию, представленную на сайтах в открытом доступе. И НЕ собираем персональные данные физических лиц либо какие-то другие данные, сбор которых является незаконным. Мы также НЕ устраиваем DDOS-атаки на сайты организаций.</p>
        </div>
    </div>


</div>