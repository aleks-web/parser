<div class="sm:container mt-8 mb-20 mx-[0.5rem] z-20 relative
            lg:mb-28
            xl:mt-10">
    <div class="bg-white p-3 rounded-2xl">
        <div class="flex flex-col text-center gap-4 text-[16px] text-[#5A575F] items-center max-w-[1200px] mb-2
                    s:flex-row s:text-left
                    sm:text-[18px] sm:gap-6 p-4
                    md:mb-6
                    xl:text-[20px]
                    2xl:text-[24px] 2xl:mb-8">
            <svg class="min-w-8 w-8 h-8"><use xlink:href="#svg-blue-info-cirlce"></use></svg>
            <p>На данной странице мы указали ориентировочные цены, <span class="text-[#1450D0] font-bold">точную стоимость</span> мы оперативно рассчитаемся после того, как обсудим с вами <span class="text-[#1450D0] font-bold">все детали заказа<span>.</p>
        </div>

        <div class="grid text-[#5F5C63] leading-[17px] gap-2
                    sm:grid-cols-2
                    lg:grid-cols-3
                    xl:grid-cols-5">

            <?php $wrap = "flex flex-col justify-center border-2 rounded-2xl p-3 text-center py-8 text-[14px]
                           s:py-5 s:text-[16px]
                           xl:text-[18px]
                           2xl:text-[20px] 2xl:leading-6"; ?>
            <?php $title = "block mb-3 text-[18px] font-bold italic uppercase text-[#1450D0] break-all leading-[26px]
                             s:text-[24px] s:mb-1
                             sm:text-[25px]
                             lg:text-[28px]
                             2xl:text-[34px]"; ?>
            <?php $title2 = "block mb-3 text-[20px] font-bold italic uppercase text-[#5F5C63]
                             s:text-[18px]
                             sm:text-[20px]
                             lg:text-[22px] lg:leading-6
                             2xl:text-[24px]"; ?>

            <div class="<?= $wrap ?>">
                <span class="block mb-3">от <span class="text-[28px] font-bold italic uppercase text-[#1450D0] md:text-[35px] lg:text-[40px] xl:text-[45px] 2xl:text-[52px]">5000</span> рублей</span>
                <span>минимальная<br>стоимость парсинга</span>
            </div>

            <div class="<?= $wrap ?>">
                <span class="block mb-3">от <span class="text-[28px] font-bold italic uppercase text-[#1450D0] md:text-[35px] lg:text-[40px] xl:text-[45px] 2xl:text-[52px]">10</span> копеек</span>
                <span>стоимость парсинга<br>данных по одной ссылке</span>
            </div>

            <div class="<?= $wrap ?>">
                <span class="<?= $title ?>">Неограниченное</span>
                <span>количество<br>конкурентов</span>
            </div>

            <div class="<?= $wrap ?>">
                <span class="<?= $title ?>">Бесплатный</span>
                <span class="<?= $title2 ?>">Обход защиты</span>
                <span>обойдем защиту<br>любого сайта от парсинга</span>
            </div>

            <div class="<?= $wrap ?> sm:col-span-2 xl:col-span-1">
                <span class="<?= $title ?>">Бесплатные</span>
                <span class="<?= $title2 ?>">Очистка и вывод данных</span>
                <span>очистим<br>данные и предоставим<br>их в удобном виде</span>
            </div>
        </div>
    </div>
</div>