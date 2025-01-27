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
                            md:justify-start md:text-md md:gap-8
                            lg:text-lg lg:gap-12
                            xl:gap-26
                            2xl:gap-28">
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
                        <?php $linkClass = 'peer block hover:text-gray-600 hover:border-gray-600 border border-transparent transition-all ease-in delay-100 text-gray-600 rounded-lg min-w-max p-2
                                            lg:text-lg lg:rounded-xl
                                            xl:text-xl
                                            has-[.active]:border-[--main-clr] has-[.active]:text-[--main-clr]'; ?>

                        <li><a href="/pages/price/index.php" class="<?= $linkClass ?>"><span class="<?= getCurrenPage() === 'price' ? 'active' : ''; ?>">Цены</span></a></li>
                        <li><a href="/pages/order-parsing/index.php" class="<?= $linkClass ?>"><span class="<?= getCurrenPage() === 'order-parsing' ? 'active' : ''; ?>">Заказать прайсинг</span></a></li>
                        <li><a href="/pages/about-us/index.php" class="<?= $linkClass ?>"><span class="<?= getCurrenPage() === 'about-us' ? 'active' : ''; ?>">О нас</span></a></li>
                        <li><a href="/pages/cases/index.php" class="<?= $linkClass ?>"><span class="<?= getCurrenPage() === 'cases' ? 'active' : ''; ?>">Кейсы и отзывы</span></a></li>
                    </ul>
                </div>
            </div>
        </div>

        <div id="mobile-menu" class="md:hidden h-0 overflow-hidden">
            <ul class="flex flex-col mt-10 gap-1 font-bold text-[14px] uppercase">
                <?php $linkClass2 = 'block break-all border border-transparent transition-all ease-in delay-100 text-gray-600 rounded-lg p-2
                                     hover:text-gray-600 hover:border-gray-600
                                     s:text-lg
                                     has-[.active]:border-[--main-clr] has-[.active]:text-[--main-clr]'; ?>

                <li><a href="/pages/price/index.php" class="<?= $linkClass2 ?>"><span class="<?= getCurrenPage() === 'price' ? 'active' : ''; ?>">Цены</span></a></li>
                <li><a href="/pages/order-parsing/index.php" class="<?= $linkClass2 ?>"><span class="<?= getCurrenPage() === 'order-parsing' ? 'active' : ''; ?> flex items-center justify-start gap-4">Заказать прайсинг<svg class="w-5 aspect-square"><use xlink:href="#svg-right-arrow"></use></svg></span></a></li>
                <li><a href="/pages/about-us/index.php" class="<?= $linkClass2 ?>"><span class="<?= getCurrenPage() === 'about-us' ? 'active' : ''; ?>">О нас</span></a></li>
                <li><a href="/pages/cases/index.php" class="<?= $linkClass2 ?>"><span class="<?= getCurrenPage() === 'cases' ? 'active' : ''; ?>">Кейсы и отзывы</span></a></li>
            </ul>
        </div>
    </div>

</div>

<?php function theContactLink($href, $text, $svgIconId) { ?>
    <a href="<?= $href ?>" class="flex items-center gap-2">
        <svg class="w-[7svw] aspect-square text-[#5A575F]
                    s:w-7
                    md:w-5
                    lg:w-6"><use xlink:href="#<?= $svgIconId ?>"></use></svg>
        <span class="hidden md:block"><?= $text ?></span>
    </a>
<?php } ?>