<div class="md:relative sm:container px-[0.5rem] page-banner">


        <img src="<?= ASSETS_URL ?>/img/head-monitor.webp" loading="lazy" decoding="async" class="hidden absolute -z-10
                md:block md:-right-[250px] md:-top-[10px] md:w-[500px]
                lg:-right-[280px] lg:-top-[40px] lg:w-[600px]
                xl:-right-[370px] xl:-top-[150px] xl:w-[850px]
                2xl:-right-[370px] 2xl:-top-[220px] 2xl:w-[1000px]">

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