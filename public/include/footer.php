<div class="grid text-white pt-14
            lg:grid-cols-2">

    <div class="bg-[--main-clr] rounded-[40px] p-4 sm:flex sm:items-center sm:justify-center md:py-10 md:gap-10 lg:flex-col lg:rounded-bl-[0] lg:rounded-tl-[0]">
        <div class="flex flex-col items-center
                    sm:min-w-max
                    lg:flex-col lg:items-start">
            <span class="title-blue
                         sm:text-[20px]
                         md:text-[25px]
                         xl:text-[30px]">Доверьте ваш парсинг</span>
            <span class="title-white ml-[auto] text-[--main-clr] flex items-center justify-between gap-4
                         sm:text-[20px]
                         md:ml-[unset] md:text-[25px]
                         lg:ml-[70px] xl:text-[30px]"><span>Профессионалам</span><svg class="aspect-square w-8"><use xlink:href="#svg-footer-logo"></use></svg></span>
        </div>

        <div class="text-center text-[#C6D8FF] flex flex-col items-center mt-10 sm:mt-0 sm:items-start sm:ml-[20px]">
            <span class="uppercase font-bold mb-4 block text-[16px] md:text-[20px]">Звоните или пишите нам:</span>

            <div class="flex flex-col items-start gap-3">
                <div class="flex items-center gap-3 text-[16px] md:text-[18px] hover:text-white transition-all">
                    <svg class="aspect-square w-5"><use xlink:href="#svg-phone"></use></svg>
                    <a target="_blank" href="tel:79255110194">+7 (925) 511-01-94</a>
                </div>

                <div class="flex items-center gap-3 text-[16px] md:text-[18px] hover:text-white transition-all">
                    <svg class="aspect-square w-5"><use xlink:href="#svg-email"></use></svg>
                    <a target="_blank" href="mailto:ak@gmtorg.ru">ak@gmtorg.ru</a>
                </div>

                <div class="flex items-center gap-3 text-[16px] md:text-[18px] hover:text-white transition-all">
                    <svg class="aspect-square w-5"><use xlink:href="#svg-whatsapp"></use></svg>
                    <a target="_blank" href="https://wa.me/79255110194">Написать в WhatsApp</a>
                </div>
            </div>
        </div>
    </div>


    <div class="bg-[#5A575F] text-[#EDEBF0] rounded-t-[40px] p-4 lg:rounded-br-[0] lg:rounded-tr-[0] lg:rounded-bl-[40px] lg:flex lg:items-center lg:justify-center xl:justify-start xl:pl-[50px]">
        <div class="flex flex-col gap-4 items-center max-w-max md:flex-row lg:flex-col lg:justify-center lg:max-w-[500px] xl:max-w-[600px]">
            <div class="text-center text-[18px] md:text-left lg:text-center xl:text-[22px]">Или заполните форму, а мы оперативно рассчитаем стоимость и свяжемся с вами для уточнения подробностей</div>
            <button class="uppercase bg-white text-[--main-clr] font-bold py-2 px-4 rounded-full flex items-center gap-3 min-w-max sm:text-[20px] lg:min-w-full lg:justify-center xl:py-3 xl:text-[22px] hover:bg-[--main-clr] hover:text-white transition-all">Заполнить форму <svg class="aspect-square w-[15px] -mt-1"><use xlink:href="#svg-arrow-up"></use></svg></button>
        </div>
    </div>

</div>

<div class="footer py-16 bg-[#292929] text-[white] font-bold text-[20px] relative z-20">
    <div class="container">
        <ul class="flex flex-col uppercase gap-4 sm:grid sm:grid-cols-2 md:flex md:flex-row md:justify-center md:gap-20 lg:gap-32 xl:gap-44">
            <li><a class="hover:text-[#E6F7FF] transition-all" href="/pages/price/index.php">Цены</a></li>
            <li>
                <a class="hover:text-[#E6F7FF] transition-all" href="/pages/order-parsing/index.php" class="flex gap-6 justify-start items-center md:inline">
                    <span>Заказать парсинг</span>
                    <svg class="w-4 h-4 md:hidden"><use xlink:href="#svg-right-arrow"></use></svg>
                </a>
            </li>
            <li><a class="hover:text-[#E6F7FF] transition-all" href="/pages/about-us/index.php">О нас</a></li>
            <li><a class="hover:text-[#E6F7FF] transition-all" href="/pages/cases/index.php">Кейсы и отзывы</a></li>
        </ul>

        <div class="text-[#656565] mt-10 text-center">parsing-data.ru | 2019-<?= date('Y') ?></div>
    </div>
</div>

<?php includeInc('svg'); ?>
<?php includeInc('helper'); ?>