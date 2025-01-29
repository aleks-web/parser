<div class="md:relative 2xl:static sm:container px-[0.5rem] page-banner">


        <img src="<?= ASSETS_URL ?>/img/head-monitor.webp" class="hidden absolute -z-10 aspect-square
                md:block md:-right-[120px] md:-top-[148px] md:h-[185%]
                lg:-right-[260px] lg:-top-[150px] lg:h-[280%]
                xl:-right-[150px] xl:-top-[275px] xl:h-[225%]
                2xl:right-0 2xl:-top-[40px] 2xl:h-[70%]
                ">

    <h1 class="flex flex-col relative z-20">
        <span class="title-blue">Стоимость парсинга сайтов</span>
        <span class="title-white">Складывается из многих составляющих</span>
    </h1>

    <ul class="flex flex-col gap-2 mt-6 xl:mt-10">
        <?php

            $classLi = 'flex flex-col text-center items-center gap-2 border-2 border-[var(--main-clr)] rounded-2xl p-2 px-4 text-[--main-clr] font-medium text-[15px] w-full bg-[--clr-3]
                        s:flex-row s:text-left
                        sm:max-w-max sm:rounded-full
                        md:text-[16px]
                        lg:text-[18px]
                        xl:text-[20px]
                        2xl:text-[24px]';
            $classSvg = 'min-w-6 w-6 aspect-square s:min-w-4 s:w-4';

        ?>

        <li class="<?= $classLi ?>">
            <svg class="<?= $classSvg ?>"><use xlink:href="#svg-blue-check-mark"></use></svg>
            <span>какое количество страниц нужно спарсить</span>
        </li>
        <li class="<?= $classLi ?>">
            <svg class="<?= $classSvg ?>"><use xlink:href="#svg-blue-check-mark"></use></svg>
            <span>какие именно данные нужно собрать с каждой страницы</span>
        </li>
        <li class="<?= $classLi ?>">
            <svg class="<?= $classSvg ?>"><use xlink:href="#svg-blue-check-mark"></use></svg>
            <span>нужно ли делать подбор товаров (матчинг), сопоставлять данные</span>
        </li>
    </ul>
</div>