<div class="my-4 sm:my-6 xl:my-10">

    <div class="sm:container px-[0.5rem]">
        <div class="flex justify-between gap-4
                    md:gap-10
                    lg:gap-16">
            <div class="flex items-center justify-center">
                <a href="/">
                    <img class="w-[12svw] min-w-6 items-center aspect-square s:min-w-10 md:w-24 lg:w-32" src="/assets/img/logo.svg" alt="logo">
                </a>
            </div>

            <div class="flex flex-col justify-center w-full
                        md:justify-between">

                <div class="flex justify-end items-center gap-4 w-full text-sm
                            md:justify-start md:text-md
                            lg:text-lg
                            xl:gap-26">
                    <?php theContactLink('#', 'Написать в WhatsApp', 'svg-whatsapp') ?>
                    <?php theContactLink('#', '+7 (925) 511-01-94', 'svg-phone') ?>
                    <?php theContactLink('#', 'ak@gmtorg.ru', 'svg-email') ?>

                    <svg id="open-menu" class="w-[7svw] aspect-square cursor-pointer
                                s:w-7
                                md:hidden
                                "><use xlink:href="#svg-mobile-menu"></use></svg>
                </div>

                <div class="hidden md:flex">
                    <ul class="flex gap-4 font-bold text-sm uppercase -ml-2 -mb-3 lg:gap-16 xl:gap-32">
                        <?php $linkClass = 'block hover:text-gray-600 hover:border-gray-600 border border-transparent transition-all ease-in delay-100 text-gray-600 rounded-lg min-w-max p-2
                                            lg:text-lg lg:rounded-xl
                                            xl:text-xl
                                            '; ?>

                        <li><a href="/pages/price/index.php" class="<?= $linkClass ?> <?= getCurrenPage() === 'price' ? 'active' : ''; ?>">Цены</a></li>
                        <li><a href="/pages/order-parsing/index.php" class="<?= $linkClass ?> <?= getCurrenPage() === 'order-parsing' ? 'active' : ''; ?>">Заказать прайсинг</a></li>
                        <li><a href="/pages/about-us/index.php" class="<?= $linkClass ?> <?= getCurrenPage() === 'about-us' ? 'active' : ''; ?>">О нас</a></li>
                        <li><a href="/pages/cases/index.php" class="<?= $linkClass ?> <?= getCurrenPage() === 'cases' ? 'active' : ''; ?>">Кейсы и отзывы</a></li>
                    </ul>
                </div>
            </div>
        </div>

        <div id="mobile-menu" class="md:hidden h-0 overflow-hidden">
            <ul class="flex flex-col mt-10 gap-1 font-bold text-[14px] uppercase">
                <?php $linkClass2 = 'inline-block break-all border border-transparent transition-all ease-in delay-100 text-gray-600 rounded-lg p-2
                                     hover:text-gray-600 hover:border-gray-600
                                     s:text-lg'; ?>

                <li><a href="#" class="<?= $linkClass2 ?>">Цены</a></li>
                <li><a href="#" class="<?= $linkClass2 ?>">Заказать прайсинг</a></li>
                <li><a href="#" class="<?= $linkClass2 ?>">О нас</a></li>
                <li><a href="#" class="<?= $linkClass2 ?>">Кейсы и отзывы</a></li>
            </ul>
        </div>
    </div>

</div>

<?php function theContactLink($href, $text, $svgIconId) { ?>
    <a href="<?= $href ?>" class="flex items-center gap-2">
        <svg class="w-[7svw] aspect-square
                    s:w-7"><use xlink:href="#<?= $svgIconId ?>"></use></svg>
        <span class="hidden md:block"><?= $text ?></span>
    </a>
<?php } ?>