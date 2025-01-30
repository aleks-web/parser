<div class="main-banner truncate whitespace-normal page-banner">
    <div class="sm:container px-[0.5rem] relative z-10">

        <h1 class="flex flex-wrap">
            <span class="main-banner__title title-blue relative z-10">Профессионально</span>
            <span class="main-banner__title title-white">Парсим любые сайты</span>
        </h1>

        <div class="main-banner__desc flex flex-col gap-2 mt-6 text-lg md:gap-0 lg:text-xl text-gray-700">
            <span>
                Соберем <span class="text-[--main-clr] font-bold">любые</span> нужные вам данные <span class="text-[--main-clr] font-bold">и предоставим</span> в удобном формате.
            </span>

            <span>
                <span class="text-[--main-clr] font-bold">Разово</span> или <span class="text-[--main-clr] font-bold">периодически</span>.
            </span>
        </div>

        <div class="flex flex-wrap gap-4 mt-4 max-w-[600px] lg:my-8">
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

    <div class="main-banner__monitor hidden relative
                s:flex s:w-[100svw] s:-right-[60px] s:-top-[20px] s:max-w-max
                sm:max-w-[none] sm:min-w-[100%] sm:-right-[120px] sm:-top-[100px] sm:-mb-[130px] sm:aspect-square
                md:max-w-[none] md:min-w-[100%] md:-right-[120px] md:-top-[150px] md:-mb-[160px] md:aspect-square
                lg:absolute lg:top-[50px] lg:-right-[180px] lg:max-w-[50svw] lg:min-w-[auto]
                xl:-right-[50px] xl:-top-[50px]
                2xl:min-w-[900px] 2xl:max-w-[900px] 2xl:w-[900px] 2xl:-top-[10px] 2xl:right-0">

        <img class="w-full 2xl:min-w-[inherit] 2xl:max-w-[inherit] 2xl:w-[inherit]" src="<?= ASSETS_URL ?>/img/head-monitor.webp" alt="monitor" loading="lazy" decoding="async">
        <img class="absolute top-[39%] right-[28%] w-[5%]" src="<?= ASSETS_URL ?>/img/main-banner/sber.svg" alt="sber" loading="lazy" decoding="async">
        <img class="absolute top-[42%] right-[34%] w-[7%]" src="<?= ASSETS_URL ?>/img/main-banner/mvideo.svg" alt="mvideo" loading="lazy" decoding="async">
        <img class="absolute top-[33%] right-[29%] w-[35%]" src="<?= ASSETS_URL ?>/img/main-banner/yamarket.svg" alt="yamarket" loading="lazy" decoding="async">
        <img class="absolute top-[49%] right-[53%] w-[12%]" src="<?= ASSETS_URL ?>/img/main-banner/wb.svg" alt="wb" loading="lazy" decoding="async">
        <img class="absolute top-[38%] right-[50%] w-[47%]" src="<?= ASSETS_URL ?>/img/main-banner/avito.svg" alt="avito" loading="lazy" decoding="async">
        <img class="absolute top-[49%] right-[84%] w-[25%]" src="<?= ASSETS_URL ?>/img/main-banner/ozon.svg" alt="ozon" loading="lazy" decoding="async">
    </div>
</div>



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
