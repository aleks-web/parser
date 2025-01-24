<div class="sm:container px-[0.5rem] mt-20">
    <h1 class="flex flex-col">
        <span class="title-blue">Стоимость парсинга сайтов</span>
        <span class="title-white">Складывается из многих составляющих</span>
    </h1>

    <ul class="flex flex-col 2xl:gap-5 mt-10">
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
    </ul>
</div>