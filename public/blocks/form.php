<div class="sm:container my-10 s:px-[0.5rem] md:relative lg:my-16 xl:max-w-[1536px] 2xl:static 2xl:my-20 2xl:mb-32">

    <img src="<?= ASSETS_URL ?>/img/head-monitor.webp" class="hidden absolute z-10 aspect-square
                lg:block lg:-right-[260px] lg:-top-[200px] lg:h-[700px]
                xl:-right-[260px] xl:-top-[30px] xl:h-[700px]
                2xl:right-0 2xl:top-[120px] 2xl:h-[900px]
                ">

    <div class="bg-white p-3 rounded-xl relative z-20 sm:p-6 xl:p-10">
        <div class="mb-5 text-center text-[18px] uppercase text-[#1450D0] font-bold italic break-all
                    s:text-[22px]
                    sm:text-[28px]
                    md:text-[32px]
                    lg:text-[36px]
                    xl:text-[40px]
                    2xl:text-[44px]">Заполните форму</div>

        <form method="POST">
            <?php
                $label = "text-[#1450D0] font-bold text-[14px] mb-[5px] block sm:text-[16px] xl:text-[18px]";
                $input = "border border-[#D9D9D9] outline-none py-1 pl-4 rounded-[20px] text-[14px] w-full text-[#1450D0]
                          s:text-[16px]
                          md:py-2
                          lg:pl-6
                          xl:text-[20px]";
            ?>

            <div class="flex flex-col gap-4 mb-4
                        lg:flex-row">
                <div class="w-full">
                    <span class="<?= $label ?>">Введите имя*</span>
                    <input class="<?= $input ?>" type="text" name="username" placeholder="Ваше имя">
                </div>

                <div class="w-full">
                    <span class="<?= $label ?>">Введите телефон*</span>
                    <input class="<?= $input ?>" type="text" name="phone" placeholder="+7 (___) - ___ - __ - __">
                </div>

                <div class="w-full">
                    <span class="<?= $label ?>">Введите E-mail*</span>
                    <input class="<?= $input ?>" type="text" name="email" placeholder="E-mail">
                </div>
            </div>

            <div class="flex flex-col">
                <span class="<?= $label ?>">Сбор данных*</span>
                <div class="flex flex-col gap-2">
                    <?php getCheck('period', 'Периодический', true); ?>
                    <?php getCheck('raz', 'Разовый'); ?>
                </div>
            </div>

            <div class="flex flex-col-reverse gap-6 mt-3">
                <div>
                    <span class="<?= $label ?>">Какие данные нужно собирать?*</span>
                    <textarea class="<?= $input ?> pl-2 rounded-lg text-[13px] s:text-[16px] s:rounded-[16px] lg:rounded-[20px]" rows="5" placeholder="Например: текст, изображения, описание товаров, характеристики"></textarea>
                </div>

                <div class="mt-6 bg-[#F2F6FF] rounded-lg p-4 text-center break-all flex flex-col items-center s:rounded-[16px] md:p-6 lg:rounded-[20px]">

                    <div class="flex flex-col items-center justify-center gap-2 s:flex-row">
                        <svg class="min-w-[20px] w-[20px] aspect-square"><use xlink:href="#svg-blue-info-triangle"></use></svg>
                        <div class="text-[16px] text-[#1450D0] font-bold lg:text-[20px]">Распишите подробности</div>
                    </div>

                    <ul class="flex flex-col items-center gap-2 text-[#5A575F] text-[14px] text-left mt-2 s:text-[15px] lg:text-[16px]">
                        <?php $svgInList = "aspect-square w-3 p-1 box-content bg-white rounded-full"; ?>
                        <li class="flex items-center gap-2">
                            <svg class="<?= $svgInList ?>"><use xlink:href="#svg-blue-check-mark"></use></svg>
                            <span>ссылки на сайты, которые вам нужно парсить</span>
                        </li>
                        <li class="flex items-center gap-2">
                            <svg class="<?= $svgInList ?>"><use xlink:href="#svg-blue-check-mark"></use></svg>
                            <span>ссылки на сайты, которые вам нужно парсить</span>
                        </li>
                        <li class="flex items-center gap-2">
                            <svg class="<?= $svgInList ?>"><use xlink:href="#svg-blue-check-mark"></use></svg>
                            <span>ссылки на сайты, которые вам нужно парсить</span>
                        </li>
                    </ul>

                    <div class="bg-white font-bold text-[14px] text-[#5A575F] p-2 rounded-lg mt-4 text-left break-keep max-w-[500px] xl:text-[16px]">
                        Чем больше подробностей, тем лучше. После отправки формы наши специалисты сразу же проанализируют вашу заявку, рассчитают стоимость – и мы свяжемся с вами с полностью готовым просчёто.
                    </div>

                </div>
            </div>

            <button type="submit" class="m-auto bg-[#1450D0] text-[#C6D8FF] text-[clamp(10px,_8svw,_24px)] max-text-size py-2 px-10 rounded-full font-bold uppercase flex items-center gap-3 w-full justify-center mt-2
                                         s:w-auto
                                         sm:mt-[20px]
                                         lg:text-[28px] lg:py-4 lg:px-14 lg:mt-[30px]
                                         xl:mt-[40px]">
                <span>Отправить</span>
                <svg class="aspect-square min-w-[10px] max-w-[20px] w-[7svw]"><use xlink:href="#svg-arrow-up"></use></svg>
            </button>
        </form>

    </div>
</div>

<?php function getCheck($name, $title = null, $checked = false) { ?>
    <div class="flex items-center gap-3 text-[#5A575F] break-all">
        <div class="relative flex items-center justify-start min-w-10 w-10 bg-[#5A575F] rounded-[20px] p-[4px] transition-all delay-100 ease-in
                       xl:min-w-12 xl:w-12 xl:p-[6px]
                    has-[input:checked]:bg-[#1450D0] has-[input:checked]:justify-end">
            <input class="absolute w-full h-full left-0 right-0 opacity-0 cursor-pointer" type="checkbox" name="<?= $name; ?>" <?= $checked ? 'checked' : '' ?>>
            <div class="aspect-square w-[14px] bg-white rounded-full xl:w-[16px]"></div>
        </div>

        <?php if ($title) : ?>
        <span class="text-[14px] s:text-[16px] xl:text-[20px]"><?= $title ?></span>
        <?php endif; ?>
    </div>
<?php } ?>