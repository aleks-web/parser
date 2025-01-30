<?php
    $card = "flex flex-col justify-between gap-5 rounded-[20px] p-5 border-solid border-2 border-[#D9D9D9] w-full relative z-10 overflow-hidden";

    $data = [
        [
            'img' => '1.svg',
            'title' => 'Следить за конкурентами или дилерами',
            'desc' => 'выявлять факты демпинга, нарушения ценовой политики'
        ],
        [
            'img' => '2.svg',
            'title' => 'Удобно выставлять на сайте конкурентные цены',
        ],
        [
            'img' => '3.svg',
            'title' => 'Быстро добавлять на сайт тысячи товаров',
            'desc' => 'используя информацию из карточек на сайте конкурентов или поставщиков'
        ],
        [
            'img' => '4.svg',
            'title' => 'Собирать контактные данные, создавать клиентские базы',
            'desc' => 'а затем использовать эту информацию для маркетинговых и продажных целей'
        ],
        [
            'img' => '5.svg',
            'title' => 'Мониторить отзывы и комментарии, проводить анализ репутации',
        ],
        [
            'img' => '6.svg',
            'title' => 'Проводить сложные анализы рынка',
            'desc' => 'и принимать максимально грамотные решения, используя большие объёмы данных'
        ],
        [
            'img' => '7.svg',
            'title' => 'Улучшить SEO-продвижение вашего сайта',
            'desc' => 'Мы поможем собрать битые ссылки, укажем на некорректные мета-теги на страницах вашего сайта. Наш штатный SEO-специалист также может выполнить комплексный анализ вашего сайта'
        ]
    ];
?>
<div class="gsap-block sm:container px-[0.5rem] pt-6 sm:pt-10 md:pt-12 lg:pt-14 2xl:pt-16">
    <div class="flex flex-wrap mb-10">
        <span class="title-white">Благодаря парсингу данных</span>
        <span class="title-blue">ВЫ СМОЖЕТЕ</span>
    </div>

    <div class="grid grid-thanks rounded-[30px] p-[10px] gap-5 xl:p-5 xl:gap-y-0">

        <?php foreach ($data as $key => $item) : ?>
            <div class="<?= $card ?>">
                <span class="block w-full h-full bg-[#27272799] absolute top-0 left-0 -z-10 blur-2xl"></span>
                <img src="<?= ASSETS_URL ?>/img/parser-data-can/<?= $item['img'] ?>" alt="<?= isset($item['title']) && !empty($item['title']) ? $item['title'] : 'image-' . $key ?>" class="h-[40px] w-[40px]" loading="lazy" decoding="async">

                <?php if (isset($item['title']) && !empty($item['title'])) : ?>
                    <span class="font-semibold text-[22px] text-[#ffffff] leading-5"><?= $item['title'] ?></span>
                <?php endif; ?>

                <?php if (isset($item['desc']) && !empty($item['desc'])) : ?>
                    <span class="font-normal text-[22px] text-[#C1C1C1] leading-5"><?= $item['desc'] ?></span>
                <?php endif; ?>
            </div>
        <?php endforeach; ?>

    </div>
</div>


<style>
    .grid-thanks {
        grid-template-areas:
                "card1"
                "card2"
                "card3"
                "card4"
                "card5"
                "card6"
                "card7";
        background-image: url("<?= ASSETS_URL ?>/img/parser-data-can/bg.webp");
        background-repeat: no-repeat;
        background-size: cover;
        background-position: 40% 50%;
    }

    .grid-thanks > div:nth-child(1) {
        grid-area: card1;
    }
    .grid-thanks > div:nth-child(2) {
        grid-area: card2;
    }
    .grid-thanks > div:nth-child(3) {
        grid-area: card3;
    }
    .grid-thanks > div:nth-child(4) {
        grid-area: card4;
    }
    .grid-thanks > div:nth-child(5) {
        grid-area: card5;
    }
    .grid-thanks > div:nth-child(6) {
        grid-area: card6;
    }
    .grid-thanks > div:nth-child(7) {
        grid-area: card7;
    }

    @media (min-width: 1536px) {
        .grid-thanks {
            grid-template-columns: repeat(3, 1fr);
            grid-template-rows: repeat(29, 20px);

            grid-template-areas:
                "card1 card4 card7"
                "card1 card4 card7"
                "card1 card4 card7"
                "card1 card4 card7"
                "card1 card4 card7"
                "card1 card4 card7"
                "card1 card4 card7"
                "card1 card4 card7"
                "card1 card4 card7"
                "card1 card4 card7"
                ". card4 card7"
                "card2 . card7"
                "card2 card5 card7"
                "card2 card5 card7"
                "card2 card5 ."
                "card2 card5 card6"
                "card2 card5 card6"
                "card2 card5 card6"
                ". card5 card6"
                "card3 card5 card6"
                "card3 . card6"
                "card3 . card6"
                "card3 . card6"
                "card3 . card6"
                "card3 . card6"
                "card3 . ."
                "card3 . ."
                "card3 . ."
                "card3 . .";
        }
    }

</style>