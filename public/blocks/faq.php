<div class="sm:container px-[0.5rem] my-20">
    <h2>
        <span class="title-white">Часто задаваемые</span>
        <span class="title-blue">вопросы</span>
    </h2>


    <?php $i = 0; while ($i != 5) : $i++; ?>
        <div class="accordion group/accordion border-b py-5">
            <div class="accordion__title
                    flex justify-between items-center w-full text-[--main-clr] font-bold text-[22px] gap-3 leading-[22px] cursor-pointer transition-all delay-50
                    md:text-[25px] md:leading-[25px]
                    xl:text-[28px] xl:leading-[28px]
                    group-[.open]/accordion:mb-5
                    ">
                <span>Как работаете, как оплатить и нужна ли предоплата?</span>

                <svg class="min-w-4 max-w-4 p-3 rounded-full box-content aspect-square transition-all ease-in delay-100 -rotate-180 text-[#5A575F]
                        group-[.open]/accordion:bg-[--clr-2] group-[.open]/accordion:-rotate-0 group-[.open]/accordion:text-[--main-clr]
                        xl:min-w-6 xl:max-w-6">
                    <use xlink:href="#svg-blue-accordion-arrow"></use>
                </svg>
            </div>

            <div class="accordion__content
                    text-[#6F6F6F] text-[16px] leading-[20px] h-0 overflow-hidden
                    sm:text-[17px] sm:leading-[22px]
                    md:text-[18px] md:leading-[25px]
                    ">
                <p class="mb-2">Сперва мы определяемся с тем, какие именно задачи вам нужно выполнить. Лучше всего, если вы опишете нам подробности на странице «Заказать парсинг». Наши специалисты оперативно оценят стоимость работы и свяжутся с вами для согласования подробностей.</p>
                <p>Сперва мы делаем первичный парсинг и отдаём вам таблицу с 20 строками данных. Если вас всё устраивает, то уже тогда вы производите полную оплату, а мы делаем полный парсинг исходя из вашего заказа. Если работа будет большая либо вам будет нужен периодический парсинг, оплату можно будет разделить на несколько частей.</p>
            </div>
        </div>
    <?php endwhile; ?>
</div>