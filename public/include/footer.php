<div class="footer py-16 bg-[#292929] text-[white] font-bold text-[20px] relative z-20">
    <div class="container">
        <ul class="flex flex-col uppercase gap-4 sm:grid sm:grid-cols-2 md:flex md:flex-row md:justify-center md:gap-20 lg:gap-32 xl:gap-44">
            <li><a href="/pages/price/index.php">Цены</a></li>
            <li>
                <a href="/pages/order-parsing/index.php" class="flex gap-6 justify-start items-center md:inline">
                    <span>Заказать парсинг</span>
                    <svg class="w-4 h-4 md:hidden"><use xlink:href="#svg-white-arrow"></use></svg>
                </a>
            </li>
            <li><a href="/pages/about-us/index.php">О нас</a></li>
            <li><a href="/pages/cases/index.php">Кейсы и отзывы</a></li>
        </ul>

        <div class="text-[#656565] mt-10 text-center">parsing-data.ru | 2019-<?= date('Y') ?></div>
    </div>
</div>

<?php includeInc('svg'); ?>
<?php includeInc('helper'); ?>