<?php
    $arData = [
        [
            'name' => 'Наименование',
            'code' => 'name',
            'image' => 'content-0.webp'
        ],
        [
            'name' => 'Отзывы, рейтинги',
            'code' => 'rev',
            'image' => 'content-1.webp'
        ],
        [
            'name' => 'Изображения',
            'code' => 'image',
            'image' => 'content-2.webp'
        ],
        [
            'name' => 'Параметры доставки',
            'code' => 'delivery',
            'image' => 'content-3.webp'
        ],
        [
            'name' => 'Описание',
            'code' => 'desc',
            'image' => 'content-4.webp'
        ],
        [
            'name' => 'ФИО, Почта, Телефон',
            'code' => 'contacts',
            'image' => 'content-5.webp'
        ],
        [
            'name' => 'Характеристики',
            'code' => 'charect',
            'image' => 'content-6.webp'
        ],
        [
            'name' => 'Результаты поисковой выдачи',
            'code' => 'results',
            'image' => 'content-7.webp'
        ],
        [
            'name' => 'Цены, скидки',
            'code' => 'price',
            'image' => 'content-8.webp'
        ],
        [
            'name' => 'Весь каталог, по одной ссылке',
            'code' => 'catalog',
            'image' => 'content-9.webp'
        ],
        [
            'name' => 'Наличие остатки',
            'code' => 'cercle',
            'image' => 'content-10.webp'
        ],
        [
            'name' => 'Учитываем региональность',
            'code' => 'regionality',
            'image' => 'content-11.webp'
        ]
    ];
?>



<?php function getDataCollectTab($text, $icon, $key = null) { ?>
<div>
    <div data-id="<?= $key ?>"  class="what-data-collect-tab
                                       cursor-pointer flex items-center gap-3 uppercase font-bold text-gray-600 rounded-[16px] p-1 border border-transparent transition-all delay-100 ease-in
                                       2xl:p-2
                                       hover:border hover:border-[#D9D9D9]
                                       <?= !$key ? 'active' : ''; ?>">

        <img class="lg:h-[53px] 2xl:h-[63px] <?= !($key % 2) ? 'even' : ''; ?>" src="<?= ASSETS_URL ?>/img/what-data-collect/icons/<?= $icon ?>.svg" loading="lazy" decoding="async" />
        <?= $text ?>
    </div>
</div>
<?php } ?>

<?php function getDataImageTab($ar, $key = null) { ?>
    <li class="splide__slide">
        <img data-content-id="<?= $key ?>" class="what-data-collect-content w-full xl:mt-0" src="<?= ASSETS_URL ?>/img/what-data-collect/<?= $ar['image'] ?>" alt="<?= $ar['name'] ?>" loading="lazy" decoding="async">
    </li>
<?php } ?>

<div class="what-data-collect sm:container px-[0.5rem] my-10 relative z-10 gsap-block">
    <div class="flex flex-wrap">
        <span class="title-white">Какие</span> <span class="title-blue">данные</span> <span class="title-white">мы можем собрать</span>
    </div>

    <div class="rounded-2xl bg-[white] p-4 pb-10 mt-8 gap-10
                lg:p-6 lg:pb-10
                xl:grid xl:grid-cols-2 xl:p-6 xl:mt-10">
        <div class="grid gap-4 sm:grid-cols-2">
            <?php foreach ($arData as $key => $value) {
                getDataCollectTab($value['name'], $value['code'], $key);
            } ?>
        </div>

        <div class="what-data-collect-content-wrapper relative mt-6 xl:mt-0">
            <div class="splide splide-collect shadow-2xl rounded-[10px] overflow-hidden lg:rounded-[20px]">
                <div class="splide__track">
                    <ul class="splide__list">
                        <?php foreach ($arData as $key => $value) {
                            getDataImageTab($value, $key);
                        } ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    .what-data-collect-tab.active {
        position: relative !important;
        border: 1px solid #D9D9D9;
    }

    .splide-collect .splide__arrow--prev,
    .splide-collect .splide__arrow--next {
        transition: .2s;
    }

    .splide-collect .splide__arrow--prev {
        left: -3rem;
    }
    .splide-collect .splide__arrow--next {
        right: -3rem;
    }

    .splide-collect:hover .splide__arrow--next {
        right: 1rem;
    }
    .splide-collect:hover .splide__arrow--prev {
        left: 1rem;
    }
</style>