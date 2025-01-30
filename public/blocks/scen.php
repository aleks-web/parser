<div class="gsap-block sm:container px-[0.5rem] relative z-20 py-12 sm:py-20 lg:py-28 2xl:py-32">
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
                <img src="<?= ASSETS_URL ?>/img/scene/scene-1.svg" alt="scene-1" class="min-w-12" loading="lazy">
            </div>

            <div class="flex flex-col justify-center gap-1.5">
                <div class="<?= $titleText ?>">Однократный сбор</div>
                <div class="<?= $descText ?>">Разово спарсим нужные вам данные с одного либо нескольких сайтов</div>
            </div>
        </div>

        <div class="<?= $item ?>">
            <div class="bg-[#FFF1F0] <?= $itemImg ?>">
                <img src="<?= ASSETS_URL ?>/img/scene/scene-2.png" alt="scene-2" class="min-w-12" loading="lazy">
            </div>

            <div class="flex flex-col justify-center gap-1.5">
                <div class="<?= $titleText ?>">Периодический сбор</div>
                <div class="<?= $descText ?>">Будем периодически собирать данные в нужное вам время</div>
            </div>
        </div>

        <div class="<?= $item ?>">
            <div class="bg-[#F6FFED] <?= $itemImg ?>">
                <img src="<?= ASSETS_URL ?>/img/scene/scene-3.svg" alt="scene-3" class="min-w-12" loading="lazy">
            </div>

            <div class="flex flex-col justify-center gap-1.5">
                <div class="<?= $titleText ?>">Сопоставление данных</div>
                <div class="<?= $descText ?>">Сведём ваши товары с товарами на сайтах конкурентов. Найдём и соберём ссылки</div>
            </div>
        </div>

        <div class="<?= $item ?>">
            <div class="bg-[#EDEBF0] <?= $itemImg ?>">
                <img src="<?= ASSETS_URL ?>/img/scene/scene-4.svg" alt="scene-4" class="min-w-12" loading="lazy">
            </div>

            <div class="flex flex-col justify-center gap-1.5">
                <div class="<?= $titleText ?>">Объединение данных</div>
                <div class="<?= $descText ?>">После парсинга можем объединять результаты из разных источников, сопоставлять таблицы, высчитывать изменения данных.</div>
            </div>
        </div>
    </div>
</div>