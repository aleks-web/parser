<div style="display: none;">
    <div class="container flex gap-x-36">
        <div>
            <img class="min-w-36" src="/assets/img/logo.svg" alt="logo">
        </div>

        <div class="flex justify-between flex-col w-full">
            <div class="flex gap-10">

                <a href="#" class="flex gap-4 items-center justify-center">
                    <img class="-mt-1" width="17" height="17" src="/assets/img/icons/phone.svg" alt="logo">
                    <span class="text-base font-bold text-gray-600">+7 (925) 511-01-94</span>
                </a>

                <a href="#"  class="flex gap-4 items-center justify-center">
                    <img class="-mt-1" width="17" height="17" src="/assets/img/icons/whatsapp.svg" alt="logo">
                    <span class="text-base font-bold text-gray-600">+7 (925) 511-01-94</span>
                </a>

                <a href="#"  class="flex gap-4 items-center justify-center">
                    <img class="-mt-1" width="17" height="17" src="/assets/img/icons/email.svg" alt="logo">
                    <span class="text-base font-bold text-gray-600">+7 (925) 511-01-94</span>
                </a>

            </div>

            <div class="flex">
                <ul class="flex gap-20 font-bold text-lg uppercase leading-normal">
                    <?php $linkClass = 'hover:text-gray-600 hover:border-gray-600 border border-transparent transition-all ease-in delay-100 text-gray-600 py-3 px-10 -ml-10 rounded-xl'; ?>
                    <li><a href="#" class="<?= $linkClass ?>">Цены</a></li>
                    <li><a href="#" class="<?= $linkClass ?>">Заказать прайсинг</a></li>
                    <li><a href="#" class="<?= $linkClass ?>">О нас</a></li>
                    <li><a href="#" class="<?= $linkClass ?>">Кейсы и отзывы</a></li>
                </ul>
            </div>
        </div>

    </div>
</div>

<div class="my-6">
    <div class="container">
        <div class="flex justify-between gap-4
                    md:gap-10
                    lg:gap-16">
            <div>
                <img class="w-14 items-center md:w-24 lg:w-32" src="/assets/img/logo.svg" alt="logo">
            </div>

            <div class="flex flex-col justify-center w-full
                        md:justify-between">

                <div class="flex justify-end items-center gap-6 w-full text-sm
                            md:justify-start md:text-md
                            lg:text-lg">
                    <a href="#" class="flex items-center gap-3">
                        <svg class="w-6 h-6"><use xlink:href="#svg-whatsapp"></use></svg>
                        <span class="hidden sm:block">Написать в WhatsApp</span>
                    </a>
                    <a href="#" class="flex items-center gap-3">
                        <svg class="w-6 h-6"><use xlink:href="#svg-phone"></use></svg>
                        <span class="hidden sm:block">+7 (925) 511-01-94</span>
                    </a>
                    <a href="#" class="flex items-center gap-3">
                        <svg class="w-6 h-6"><use xlink:href="#svg-email"></use></svg>
                        <span class="hidden md:block">ak@gmtorg.ru</span>
                    </a>

                    <a href="#" class="flex items-center gap-3 md:hidden">
                        <svg class="w-6 h-6"><use xlink:href="#svg-mobile-menu"></use></svg>
                    </a>
                </div>

                <div class="hidden md:flex">
                    <ul class="flex gap-4 font-bold text-sm uppercase -ml-2 -mb-3 lg:gap-16 xl:gap-20">
                        <?php $linkClass = 'block hover:text-gray-600 hover:border-gray-600 border border-transparent transition-all ease-in delay-100 text-gray-600 rounded-lg min-w-max p-2
                                            lg:text-lg lg:rounded-xl'; ?>

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

<?php ?>