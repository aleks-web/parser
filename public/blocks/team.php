<?php
    $item = "bg-white flex flex-col gap-2 rounded-[20px] p-2.5 h-full sm:p-4 md:rounded-[30px] xl:max-w-[300px] xl:rounded-[45px]";
    $title = "text-[#5A575F] uppercase font-medium italic text-[16px] sm:text-[20px] md:text-[25px] xl:text-[30px] xl:leading-7";
    $desc = "text-[#5A575F] text-[13px] sm:text-[14px] md:text-[15px]";
    $num = "text-[#2264F0] text-[40px] font-black italic sm:text-[50px] md:text-[60px] xl:text-[80px] xl:leading-[60px] xl:mt-2 xl:mb-10";
?>

<div class="gsap-block">

    <img src="<?= ASSETS_URL ?>/img/head-monitor.webp" class="hidden absolute -z-10 aspect-square md:h-auto
                    md:block md:-right-[180px] md:top-[95px] md:h-[800px]
                    lg:block lg:-right-[70px] lg:top-[100px] lg:h-[1000px]
                    xl:block xl:-right-[70px] xl:top-[100px] xl:h-[900px]
                    2xl:block 2xl:-right-[100px] 2xl:top-[20px] 2xl:h-[45svw] 2xl:z-20
                    ">

    <div class="sm:container px-[0.5rem] relative page-banner lg:static">

        <div class="flex flex-wrap">
            <span class="title-blue">Parsing</span>
            <span class="title-white">Data</span>
            <span class="flex items-center bg-white text-[#1450D0] text-[12px] py-[6px] px-[20px] border border-solid border-[#1450D0] rounded-[20px] max-w-[485px]
                         md:text-[13px] lg:max-w-[600px] lg:text-[15px]
                         xl:text-[20px] xl:max-w-[780px]"><span><span class="uppercase font-semibold">международная компания</span>, которая с 2019 года предоставляет услуги по профессиональному сбору данных и парсингу любых сайтов.</span></span>
        </div>


        <div class="my-5 text-[#5A575F] text-[16px] s:my-6 sm:my-8 sm:text-[18px] md:text-[20px] md:my-10 lg:text-[22px] lg:my-12 xl:text-[24px]">
            <span>Наша команда <span class="text-[#1450D0] font-semibold">включает</span></span>
        </div>


        <div class="grid gap-4 md:grid-cols-2 xl:flex z-20 relative">
            <div class="<?= $item ?>">
                <span class="<?= $num ?>">5</span>

                <span class="<?= $title ?>">программистов</span>
                <span class="<?= $desc ?>">которые постоянно <span class="font-bold">улучшают алгоритмы парсинга</span> и расширяют базу, которая на сегодняшний день включает более 54 000 сайтов, доступных для сбора данных</span>
            </div>

            <div class="<?= $item ?>">
                <span class="<?= $num ?>">12</span>

                <span class="<?= $title ?>">контент-менеджеров</span>

                <span class="<?= $desc ?>">которые помогают <span class="font-bold">анализировать и систематизировать</span> получаемые данные. Также наши контент-менеджеры занимаются подбором и сопоставлением товаров (матчингом) на сайтах конкурентов</span>
            </div>

            <div class="<?= $item ?>">
                <span class="<?= $num ?>">2</span>

                <span class="<?= $title ?>">SEO специалистов</span>

                <span class="<?= $desc ?>">которые помогают проводить <span class="font-bold">комплексные SEO-анализы</span> сайтов. Парсинг данных позволяет в том числе собрать битые ссылки сайта, увидеть некорректно заполненные мета-теги на страницах</span>
            </div>


            <div class="<?= $item ?>">
                <span class="<?= $num ?>">9</span>

                <span class="<?= $title ?>">менеджеров</span>

                <span class="<?= $desc ?>">которые <span class="font-bold">оперативно отвечают на звонки</span>, предоставляют грамотные консультации и позволяют быстро решать любые возникающие вопросы</span>
            </div>
        </div>


    </div>
</div>