<div class="my-4 sm:my-6 xl:my-10">
    <div class="container">
        <div class="flex justify-between gap-4
                    md:gap-10
                    lg:gap-16">
            <div class="flex items-center justify-center">
                <img class="w-[12svw] items-center md:w-24 lg:w-32 aspect-square" src="/assets/img/logo.svg" alt="logo">
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

                    <a href="#" class="flex items-center gap-3 md:hidden">
                        <svg class="w-6 h-6"><use xlink:href="#svg-mobile-menu"></use></svg>
                    </a>
                </div>

                <div class="hidden md:flex">
                    <ul class="flex gap-4 font-bold text-sm uppercase -ml-2 -mb-3 lg:gap-16 xl:gap-32">
                        <?php $linkClass = 'block hover:text-gray-600 hover:border-gray-600 border border-transparent transition-all ease-in delay-100 text-gray-600 rounded-lg min-w-max p-2
                                            lg:text-lg lg:rounded-xl
                                            xl:text-xl'; ?>

                        <li><a href="#" class="<?= $linkClass ?>">Цены</a></li>
                        <li><a href="#" class="<?= $linkClass ?>">Заказать прайсинг</a></li>
                        <li><a href="#" class="<?= $linkClass ?>">О нас</a></li>
                        <li><a href="#" class="<?= $linkClass ?>">Кейсы и отзывы</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<?php function theContactLink($href, $text, $svgIconId) { ?>
    <a href="<?= $href ?>" class="flex items-center gap-3">
        <svg class="w-[8svw] aspect-square"><use xlink:href="#<?= $svgIconId ?>"></use></svg>
        <span class="hidden md:block"><?= $text ?></span>
    </a>
<?php } ?>