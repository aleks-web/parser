<?php
    $num = "z-10 relative block rounded-[50px] w-[45px] h-[45px] p-2 flex justify-center items-center text-[28px] font-extrabold";
    $item = "flex flex-col items-start justify-between rounded-[30px] p-4 overflow-hidden relative";
    $img = "absolute top-0 right-0 z-0";
    $title = "z-10 relative text-[24px] font-semibold text-[#5A575F] z-10 leading-[24px] mb-2 sm:mb-4 sm:leading-[28px] md:text-[28px]";
    $desc = "z-10 relative text-[14px] text-[#5A575F] font-normal z-10 sm:text-[16px] md:text-[18px]";
?>

<div class="gsap-block py-12
            sm:pb-20 sm:pt-20
            lg:pb-28 lg:pt-20
            xl:pt-20
            2xl:pb-32 2xl:pt-24">

    <div class="sm:container px-[0.5rem]">
        <div class="flex flex-wrap mb-10">
            <span class="title-blue">6 причин,</span>
            <span class="title-white">почему вы обратитесь к нам</span>
        </div>

        <div class="grid-reasons grid gap-4">

            <div class="<?= $item ?> bg-[#F2F6FF]">
                <img src="<?= ASSETS_URL ?>/img/reasons/1.svg" alt="num-1" class="<?= $img ?>">
                <span class="<?= $num ?> bg-[#1450D0] text-white">1</span>

                <div class="mt-24 xl:mt-0">
                    <div class="<?= $title ?> xl:text-[48px] xl:leading-[48px]">Оплата только после получения первых данных</div>
                    <div class="<?= $desc ?>">Мы парсим данные, предоставляем вам первые 20 строк, вы убеждаетесь в качестве нашей работы – и только после этого производите оплату</div>
                </div>
            </div>


            <div class="<?= $item ?> bg-[#EDEBF0]">
                <span class="<?= $num ?> bg-white text-[#5A575F]">2</span>
                <img src="<?= ASSETS_URL ?>/img/reasons/2.svg" alt="num-2" class="<?= $img ?>">

                <div class="mt-20">
                    <div class="<?= $title ?>">Результат в нужном вам формате</div>
                    <div class="<?= $desc ?>">Чаще всего мы предоставляем данные в виде таблиц Excel. Однако можем выводить данные в формате CSV, PDF, JSON, отдавать по API</div>
                </div>
            </div>

            <div class="<?= $item ?> bg-[#F7F7F7]">

                <div class="flex flex-wrap gap-5 items-center justify-center w-full relative z-10 s:justify-between">
                    <span class="<?= $num ?> bg-[#5A575F] text-white">3</span>
                    <div class="flex flex-wrap items-center justify-center gap-5">
                        <img src="<?= ASSETS_URL ?>/img/reasons/pay/MasterCard.svg" alt="MasterCard">
                        <img src="<?= ASSETS_URL ?>/img/reasons/pay/Visa.svg" alt="Visa">
                        <img src="<?= ASSETS_URL ?>/img/reasons/pay/Mir.svg" alt="Mir">
                        <img src="<?= ASSETS_URL ?>/img/reasons/pay/sberpay.svg" alt="sberpay">
                        <img src="<?= ASSETS_URL ?>/img/reasons/pay/sbp.svg" alt="sbp">
                    </div>
                </div>

                <div class="mt-6">
                    <div class="<?= $title ?>">Удобные варианты оплаты</div>
                    <div class="<?= $desc ?>">Онлайн оплата картой либо по СБП. Также работаем с юридическими лицами по безналичному расчёту (без НДС)</div>
                </div>
            </div>

            <div class="<?= $item ?> bg-[#FFEFC3]">
                <span class="<?= $num ?> bg-[#FBC42E] text-[#5A575F]">4</span>
                <img src="<?= ASSETS_URL ?>/img/reasons/3.svg" alt="num-4" class="<?= $img ?>">

                <div class="mt-24">
                    <div class="<?= $title ?>">Работа по договору</div>
                    <div class="<?= $desc ?>">Мы работаем официально, при необходимости заключаем договор. Есть возможность обмена документами по ЭДО</div>
                </div>
            </div>

            <div class="<?= $item ?> bg-[#E0FFED]">
                <span class="<?= $num ?> bg-[#64D795] text-[#5A575F]">5</span>
                <img src="<?= ASSETS_URL ?>/img/reasons/4.svg" alt="num-5" class="<?= $img ?>">

                <div class="mt-16">
                    <div class="<?= $title ?>">Работаем быстро, точно, с любыми сайтами</div>
                    <div class="<?= $desc ?>">Используем передовые технологии сбора данных, а программисты с опытом 6+ лет легко подстраивают их под любые задачи</div>
                </div>
            </div>

            <div class="<?= $item ?> bg-[#FFEBF2]">
                <span class="<?= $num ?> bg-[#F890B7] text-[#5A575F]">5</span>
                <img src="<?= ASSETS_URL ?>/img/reasons/5.webp" alt="num-5" class="<?= $img ?> w-24 h-24 top-4 right-4">

                <div class="mt-16">
                    <div class="<?= $title ?>">Работаем быстро, точно, с любыми сайтами</div>
                    <div class="<?= $desc ?>">Используем передовые технологии сбора данных, а программисты с опытом 6+ лет легко подстраивают их под любые задачи</div>
                </div>
            </div>

            <div class="<?= $item ?> border-2 border-[#286CFD] flex items-center justify-center">
                <img src="<?= ASSETS_URL ?>/img/reasons/empty-logo.png" class="w-[200px]" alt="empty-logo">
            </div>

        </div>


    </div>
</div>

<style>
    .grid-reasons {
        grid-template-areas:
                "card1"
                "card2"
                "card3"
                "card4"
                "card5"
                "card6"
                "card7";
    }

    .grid-reasons > div:nth-child(1) {
        grid-area: card1;
    }
    .grid-reasons > div:nth-child(2) {
        grid-area: card2;
    }
    .grid-reasons > div:nth-child(3) {
        grid-area: card3;
    }
    .grid-reasons > div:nth-child(4) {
        grid-area: card4;
    }
    .grid-reasons > div:nth-child(5) {
        grid-area: card5;
    }
    .grid-reasons > div:nth-child(6) {
        grid-area: card6;
    }
    .grid-reasons > div:nth-child(7) {
        grid-area: card7;
    }

    @media (min-width: 1024px) {
        .grid-reasons {
            grid-template-areas:
                "card1 card2"
                "card3 card3"
                "card4 card5"
                "card6 card7";
        }
    }

    @media (min-width: 1536px) {
        .grid-reasons {
            grid-template-areas:
                "card1 card1 card2 card2"
                "card1 card1 card4 card5"
                "card3 card3 card4 card5"
                "card6 card6 card6 card7";
        }
    }

</style>