<div class="sm:container px-[0.5rem] py-12 relative z-20">
    <div class="flex flex-wrap mb-10">
        <span class="title-blue">Любые сценарии</span>
        <span class="title-white">для ваших задач</span>
    </div>

    <div class="grid grid-cols-1 gap-4 lg:grid-cols-2">

        <?php
            $item = "flex flex-col items-center bg-white rounded-[18px] gap-5 p-2.5 s:flex-row sm:p-4";
            $itemImg = "rounded-[18px] p-4 flex items-center justify-center aspect-square";
            $titleText = "text-base text-[16px] text-[#5A575F] font-bold uppercase leading-5 text-center s:text-left sm:text-[20px] sm:mb-[5px] lg:text-[22px] xl:text-[24px] 2xl:text-[28px]";
            $descText = "text-sm text-[14px] text-[#5A575F] leading-4 text-center s:text-left sm:text-[16px] sm:leading-5 lg:text-[18px] 2xl:leading-7 2xl:text-[20px]";
        ?>

        <div class="<?= $item ?>">
            <div class="bg-[#E6F7FF] <?= $itemImg ?>">
                <img src="<?= ASSETS_URL ?>/img/scene/scene-1.svg" alt="" class="min-w-12">
            </div>

            <div class="flex flex-col justify-center gap-1.5">
                <div class="<?= $titleText ?>">Однократный сбор</div>
                <div class="<?= $descText ?>">Разово спарсим нужные вам данные с одного либо нескольких сайтов</div>
            </div>
        </div>

        <div class="<?= $item ?>">
            <div class="bg-[#FFF1F0] <?= $itemImg ?>">
                <img src="<?= ASSETS_URL ?>/img/scene/scene-2.png" alt="" class="min-w-12">
            </div>

            <div class="flex flex-col justify-center gap-1.5">
                <div class="<?= $titleText ?>">Периодический сбор</div>
                <div class="<?= $descText ?>">Будем периодически собирать данные в нужное вам время</div>
            </div>
        </div>

        <div class="<?= $item ?>">
            <div class="bg-[#F6FFED] <?= $itemImg ?>">
                <img src="<?= ASSETS_URL ?>/img/scene/scene-3.svg" alt="" class="min-w-12">
            </div>

            <div class="flex flex-col justify-center gap-1.5">
                <div class="<?= $titleText ?>">Сопоставление данных</div>
                <div class="<?= $descText ?>">Сведём ваши товары с товарами на сайтах конкурентов. Найдём и соберём ссылки</div>
            </div>
        </div>

        <div class="<?= $item ?>">
            <div class="bg-[#EDEBF0] <?= $itemImg ?>">
                <img src="<?= ASSETS_URL ?>/img/scene/scene-4.svg" alt="" class="min-w-12">
            </div>

            <div class="flex flex-col justify-center gap-1.5">
                <div class="<?= $titleText ?>">Объединение данных</div>
                <div class="<?= $descText ?>">После парсинга можем объединять результаты из разных источников, сопоставлять таблицы, высчитывать изменения данных.</div>
            </div>
        </div>
    </div>
</div>


<div class="bg-white">
    <div class="container py-12">
        <div class="flex flex-wrap mb-10">
            <span class="title-blue">6 причин,</span>
            <span class="title-white">почему вы обратитесь к нам</span>
        </div>

        <div class="">
            <div class="flex flex-col items-start bg-[#F2F6FF] rounded-[30px] p-5.5 overflow-hidden relative">
                <div class="bg-[#1450D0] text-white rounded-[50px] w-[45px] h-[45px] p-2.5 flex justify-center items-center text-3xl font-extrabold">1</div>
                <img src="./assets/img/icon.svg" alt="" class="absolute top-0 right-0 w-[110px] h-[140px] z-0">
                <span class="text-2xl font-semibold text-[#5A575F] z-10">Оплата только после получения первых данных</span>
                <span class="text-sm font-normal text-[#5A575F] z-10">Мы парсим данные, предоставляем вам первые 20 строк, вы убеждаетесь в качестве нашей работы – и только после этого производите оплату</span>
            </div>
        </div>
    </div>
</div>