<div class="main-banner whitespace-normal page-banner">

    <div class="sm:container px-[0.5rem] relative flex flex-col lg:flex-row lg:justify-start">

        <div class="relative z-20">

            <h1 class="flex flex-wrap">
                <span class="main-banner__title title-blue relative z-10">Профессионально</span>
                <span class="main-banner__title title-white">Парсим любые сайты</span>
            </h1>

            <div class="main-banner__desc flex flex-col gap-2 mt-6 text-lg md:gap-0 lg:text-xl text-gray-700 2xl:mt-12">
                <span>
                    Соберем <span class="text-[--main-clr] font-bold">любые</span> нужные вам данные <span class="text-[--main-clr] font-bold">и предоставим</span> в удобном формате.
                </span>

                <span>
                    <span class="text-[--main-clr] font-bold">Разово</span> или <span class="text-[--main-clr] font-bold">периодически</span>.
                </span>
            </div>

            <div class="flex flex-wrap gap-4 mt-4 max-w-[600px] lg:my-8 2xl:my-12">
                <?php theServicewBtn('avito.png', 'Авито'); ?>
                <?php theServicewBtn('ozon.png', 'Ozon'); ?>
                <?php theServicewBtn('wb.png', 'Wildberries'); ?>

                <?php theServicewBtnIcon('yamarket.png'); ?>
                <?php theServicewBtnIcon('sber.png'); ?>
                <?php theServicewBtnIcon('mvideo.png'); ?>
                <?php theServicewBtnIcon('allinstruments.png'); ?>
            </div>

            <div class="main-banner__desc2 hidden lg:block text-xl text-gray-700">эти и <span class="font-bold text-[--main-clr] text-2xl">боллее 54 000 других сайтов</span> мы уже<br>спарсили для наших клиентов</div>

        </div>

        <?php getMonitorBg() ?>
    </div>
</div>

<?php function getMonitorBg() { ?>
    <div class="main-banner__monitor hidden z-0
                s:block s:relative s:mt-14 s:w-full s:-right-[30%]
                sm:-right-[35%]
                lg:absolute lg:w-[50svw] lg:-top-[5svw] lg:-right-[30svw]
                xl:w-[60svw] xl:-top-[10svw]
                2xl:w-[1180px] 2xl:-top-[220px] 2xl:-right-[450px]">

        <img class="w-full relative -right-0" src="<?= ASSETS_URL ?>/img/head-monitor.webp" alt="monitor" loading="lazy" decoding="async">
        <img class="absolute top-[30%] right-[60%] w-[5%]" src="<?= ASSETS_URL ?>/img/main-banner/sber.svg" alt="sber" loading="lazy" decoding="async">
        <img class="absolute top-[29%] right-[64%] w-[8%]" src="<?= ASSETS_URL ?>/img/main-banner/mvideo.svg" alt="mvideo" loading="lazy" decoding="async">
        <img class="absolute top-[16%] right-[57%] w-[35%]" src="<?= ASSETS_URL ?>/img/main-banner/yamarket.svg" alt="yamarket" loading="lazy" decoding="async">
        <img class="absolute top-[33%] right-[78%] w-[12%]" src="<?= ASSETS_URL ?>/img/main-banner/wb.svg" alt="wb" loading="lazy" decoding="async">
        <img class="absolute top-[18%] right-[73%] w-[47%]" src="<?= ASSETS_URL ?>/img/main-banner/avito.svg" alt="avito" loading="lazy" decoding="async">
        <img class="absolute top-[32%] right-[104%] w-[20%]" src="<?= ASSETS_URL ?>/img/main-banner/ozon.svg" alt="ozon" loading="lazy" decoding="async">
    </div>
<?php } ?>


<?php function theServicewBtn($icon, $text) { ?>
    <div class="main-banner__service-btn min-h-10 max-h-10 flex items-center gap-2 border border-gray-500 rounded-lg max-w-max p-2 bg-[--clr-3]
                sm:rounded-[50px] sm:px-4">
        <img width="25" height="25" src="/assets/img/icons/services/<?= $icon ?>" loading="lazy" decoding="async" />
        <span class="text-[14px] font-bold text-gray-600 sm:sm:text-lg"><?= $text ?></span>
    </div>
<?php } ?>

<?php function theServicewBtnIcon($icon) { ?>
    <div class="main-banner__service-btn min-h-10 max-h-10 flex items-center gap-2 border border-gray-500 rounded-lg max-w-max p-2 <?= ($icon === 'allinstruments.png') ? 'bg-[#DA2127] border-0' : 'bg-[--clr-3]'; ?>
                sm:rounded-[50px] sm:px-4">
        <img class="<?= ($icon === 'mvideo.png') ? 'max-h-4' : 'max-h-6'; ?> min-w-max" src="/assets/img/icons/services/<?= $icon ?>" loading="lazy" decoding="async" />
    </div>
<?php } ?>