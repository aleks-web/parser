<div class="container mt-20">
    <h1 class="flex flex-col">
        <span class="bg-[--main-clr] max-w-max px-5 py-2 text-gray-50 text-[44px] italic font-bold uppercase rounded-[20px]">Стоимость парсинга сайтов</span>
        <span class="bg-gray-50 max-w-max px-5 py-2 text-gray-600 text-[44px] italic font-bold uppercase rounded-[20px]">Складывается из многих составляющих</span>
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