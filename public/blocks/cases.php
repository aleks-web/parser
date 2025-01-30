<?php
    $varContentSaceX = "mx-2";
    $varRounded = "rounded-[30px] xl:rounded-[20px]";

    $title = "bg-[#FAFAFA] text-[#1450D0] text-[18px] text-center font-medium py-4 py-[8px] {$varRounded} sm:text-[20px] sm:py-[10px]";
    $title2 = $title . " xl:hidden";
    $card = "bg-white even:bg-[#F2F6FF] {$varRounded} xl:flex xl:gap-5";

    $spanWrap = "flex flex-col mb-6 mt-4 {$varContentSaceX} sm:mt-8 xl:mt-3";
    $spanWrap2 = "flex flex-col mb-6 mt-4 {$varContentSaceX} sm:mt-8 xl:mt-3";
    $spanName = "block text-[#1450D0] text-xl font-semibold uppercase sm:text-2xl xl:pb-5 xl:{$varContentSaceX}";
    $spanDesc = "text-md xl:text-justify sm:text-lg";

    $content = "flex flex-col xl:w-1/3";

    $splideTrack = "{$varRounded} overflow-hidden";
?>

<div class="gsap-block sm:container px-[0.5rem] page-banner relative z-20">

        <div class="bg-white rounded-[30px] p-2 pb-6 xl:p-8 relative z-20">
            <div class="flex justify-center items-center flex-wrap gap-[30px] s:gap-[40px] sm:gap-[70px] md:gap-[90px]">

                <div class="<?= $card ?>">
                    <div class="<?= $content; ?>">
                        <span class="<?= $title ?>">Описание</span>

                        <div class="<?= $spanWrap ?>">
                            <span class="<?= $spanName ?>">Louis Vuitton</span>

                            <span class="<?= $spanDesc ?>">Спарсили более 35 000 товаров с Яндекс.Маркет</span>
                        </div>
                    </div>

                    <div class="<?= $content; ?>">
                        <span class="<?= $title ?>">Детали</span>


                        <div class="<?= $spanWrap2 ?>">
                            <span class="<?= $spanDesc ?>">Заказчику требовалось спарсить название, описание, ссылки на фото, основные характеристики с сайта Яндекс.Маркет. Выполнили данную работу за 5 рабочих дней, предоставили заказчику более 35 000 товаров в виде удобной таблицы для дальнейшей обработки.</span>
                        </div>
                    </div>

                    <div class="<?= $content; ?>">
                        <span class="<?= $title ?>">Изображения</span>

                        <div class="<?= $spanWrap2 ?>">

                            <div class="splide splide-case">
                                <div class="splide__track <?= $splideTrack ?>">
                                    <ul class="splide__list">
                                        <li class="splide__slide">
                                            <img src="<?= ASSETS_URL ?>/img/photo/photo-1.jpg" class="w-full aspect-[2/1] xl:aspect-square object-cover" alt="photo-1" loading="lazy" decoding="async" />
                                        </li>
                                        <li class="splide__slide">
                                            <img src="<?= ASSETS_URL ?>/img/photo/photo-1.jpg" class="w-full aspect-[2/1] xl:aspect-square object-cover" alt="photo-2" loading="lazy" decoding="async" />
                                        </li>
                                        <li class="splide__slide">
                                            <img src="<?= ASSETS_URL ?>/img/photo/photo-1.jpg" class="w-full aspect-[2/1] xl:aspect-square object-cover" alt="photo-3" loading="lazy" decoding="async" />
                                        </li>
                                    </ul>
                                </div>

                                <div class="splide__arrows splide-case__arrows flex justify-between mt-4 overflow-hidden">
                                    <button class="splide__arrow splide__arrow--prev splide-case__arrow--prev static w-full rounded-none h-auto translate-y-0 p-2 py-4 flex items-center justify-center bg-[unset] border border-[#5a575f] rounded-l-[20px]"><img src="<?= ASSETS_URL ?>/img/arrow-right.svg" alt="arrow" class="-rotate-180 w-[20px] aspect-square"></button>
                                    <button class="splide__arrow splide__arrow--next splide-case__arrow--next static w-full rounded-none h-auto translate-y-0 p-2 py-4 flex items-center justify-center bg-[unset] border border-[#5a575f] rounded-r-[20px]"><img src="<?= ASSETS_URL ?>/img/arrow-right.svg" alt="arrow" class="w-[20px] aspect-square"></button>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="<?= $card ?>">
                    <div class="<?= $content; ?>">
                        <span class="<?= $title2 ?>">Описание</span>

                        <div class="<?= $spanWrap ?>">
                            <span class="<?= $spanName ?>">McDonald's</span>

                            <span class="<?= $spanDesc ?>">Спарсили более 35 000 товаров с Яндекс.Маркет</span>
                        </div>
                    </div>

                    <div class="<?= $content; ?>">
                        <span class="<?= $title2 ?>">Детали</span>


                        <div class="<?= $spanWrap2 ?>">
                            <span class="<?= $spanDesc ?>">Заказчику требовалось спарсить название, описание, ссылки на фото, основные характеристики с сайта Яндекс.Маркет. Выполнили данную работу за 5 рабочих дней, предоставили заказчику более 35 000 товаров в виде удобной таблицы для дальнейшей обработки.</span>
                        </div>
                    </div>

                    <div class="<?= $content; ?>">
                        <span class="<?= $title2 ?>">Изображения</span>

                        <div class="<?= $spanWrap2 ?>">

                            <div class="splide splide-case">
                                <div class="splide__track <?= $splideTrack ?>">
                                    <ul class="splide__list">
                                        <li class="splide__slide">
                                            <img src="<?= ASSETS_URL ?>/img/photo/photo-1.jpg" class="w-full aspect-[2/1] xl:aspect-square object-cover" alt="photo-1" loading="lazy" decoding="async" />
                                        </li>
                                        <li class="splide__slide">
                                            <img src="<?= ASSETS_URL ?>/img/photo/photo-1.jpg" class="w-full aspect-[2/1] xl:aspect-square object-cover" alt="photo-2" loading="lazy" decoding="async" />
                                        </li>
                                        <li class="splide__slide">
                                            <img src="<?= ASSETS_URL ?>/img/photo/photo-1.jpg" class="w-full aspect-[2/1] xl:aspect-square object-cover" alt="photo-3" loading="lazy" decoding="async" />
                                        </li>
                                    </ul>
                                </div>

                                <div class="splide__arrows splide-case__arrows flex justify-between mt-4 overflow-hidden">
                                    <button class="splide__arrow splide__arrow--prev splide-case__arrow--prev static w-full rounded-none h-auto translate-y-0 p-2 py-4 flex items-center justify-center bg-[unset] border border-[#5a575f] rounded-l-[20px]"><img src="<?= ASSETS_URL ?>/img/arrow-right.svg" alt="arrow" class="-rotate-180 w-[20px] aspect-square"></button>
                                    <button class="splide__arrow splide__arrow--next splide-case__arrow--next static w-full rounded-none h-auto translate-y-0 p-2 py-4 flex items-center justify-center bg-[unset] border border-[#5a575f] rounded-r-[20px]"><img src="<?= ASSETS_URL ?>/img/arrow-right.svg" alt="arrow" class="w-[20px] aspect-square"></button>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

            </div>

            <div class="mt-[45px] cursor-pointer text-center flex flex-col items-center gap-2 px-6 py-2 border border-[#5A575F] <?= $varRounded ?> w-full flex justify-center s:flex-row s:gap-5 s:w-max s:mx-auto xl:px-32">
                <span class="text-[#5A575F] text-xl font-medium uppercase">Показать ещё</span>

                <img src="<?= ASSETS_URL ?>/img/arrow-right.svg" alt="arrow" class="rotate-90 w-[20px] aspect-square">
            </div>
        </div>

    </div>


<style>
    .splide__arrow {
        border: 1px solid !important;
    }
</style>