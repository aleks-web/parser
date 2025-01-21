<div class="relative truncate whitespace-normal">
    <div class="container mt-10">

        <h1 class="flex flex-wrap">
            <span class="title-blue">Профессионально</span>
            <span class="title-white">Парсим любые сайты</span>
        </h1>

        <div class="flex flex-col gap-2 mt-6 text-lg md:gap-0 lg:text-xl text-gray-700">
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

        <div class="hidden lg:block text-xl text-gray-700">
            эти и <span class="font-bold text-[--main-clr]">боллее 54 000 других сайтов</span> мы уже<br>спарсили для наших клиентов
        </div>

    </div>

    <div class="hidden relative -right-24 sm:-top-24 max-w-max">
        <img class="" src="/assets/img/main-banner/head-monitor.webp" alt="monitor">
    </div>
</div>


<?php function theServicewBtn($icon, $text) { ?>
    <div class="min-h-10 max-h-10 flex items-center gap-2 border border-gray-500 rounded-lg max-w-max p-2
                sm:rounded-[50px] sm:px-4">
        <img width="25" height="25" src="/assets/img/icons/services/<?= $icon ?>" />
        <span class="text-[14px] font-bold text-gray-600 sm:sm:text-lg"><?= $text ?></span>
    </div>
<?php } ?>

<?php function theServicewBtnIcon($icon) { ?>
    <div class="min-h-10 max-h-10 flex items-center gap-2 border border-gray-500 rounded-lg max-w-max p-2 <?= ($icon === 'allinstruments.png') ? 'bg-[#DA2127] border-0' : ''; ?>
                sm:rounded-[50px] sm:px-4">
        <img class="<?= ($icon === 'mvideo.png') ? 'max-h-4' : 'max-h-6'; ?> min-w-max" src="/assets/img/icons/services/<?= $icon ?>" />
    </div>
<?php } ?>





<!--ul class="flex flex-col 2xl:gap-5 mt-10">
    <?php $classLi = 'flex items-center gap-3 border-2 border-[var(--main-clr)] rounded-[50px] leading-normal p-5 max-w-max text-[--main-clr] font-medium text-[20px]';?>
    <li class="<?= $classLi ?>">
        <svg width="14" height="10"><use xlink:href="#svg-blue-check-mark"></use></svg>
        <span>какое количество страниц нужно спарсить</span>
    </li>
    <li class="<?= $classLi ?>">
        <svg width="14" height="10"><use xlink:href="#svg-blue-check-mark"></use></svg>
        <span>какие именно данные нужно собрать с каждой страницы</span>
    </li>
    <li class="<?= $classLi ?>">
        <svg width="14" height="10"><use xlink:href="#svg-blue-check-mark"></use></svg>
        <span>нужно ли делать подбор товаров (матчинг), сопоставлять данные</span>
    </li>
</ul-->