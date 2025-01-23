<?php
    $arData = [
        [
            'name' => 'Наименование',
            'code' => 'name',
        ],
        [
            'name' => 'Отзывы, рейтинги',
            'code' => 'rev',
        ],
        [
            'name' => 'Изображения',
            'code' => 'image',
        ],
        [
            'name' => 'Параметры доставки',
            'code' => 'delivery',
        ],
        [
            'name' => 'Описание',
            'code' => 'desc',
        ],
        [
            'name' => 'ФИО, Почта, Телефон',
            'code' => 'contacts',
        ],
        [
            'name' => 'Характеристики',
            'code' => 'charect',
        ],
        [
            'name' => 'Результаты поисковой выдачи',
            'code' => 'results',
        ],
        [
            'name' => 'Цены, скидки',
            'code' => 'price',
        ],
        [
            'name' => 'Весь каталог, по одной ссылке',
            'code' => 'catalog',
        ],
        [
            'name' => 'Наличие остатки',
            'code' => 'cercle',
        ],
        [
            'name' => 'Учитываем региональность',
            'code' => 'regionality',
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

        <img class="lg:h-[53px] 2xl:h-[63px] <?= !($key % 2) ? 'even' : ''; ?>" src="./assets/img/what-data-collect/icons/<?= $icon ?>.svg" />
        <?= $text ?>
    </div>
</div>
<?php } ?>

<?php function getDataImageTab($text, $icon, $key = null) { ?>
    <img data-content-id="<?= $key ?>" class="what-data-collect-content <?= !$key ? 'active' : ''; ?>
                                              absolute top-0
                                              hidden shadow-2xl mt-6 w-full rounded-[10px]
                                              lg:rounded-[20px]
                xl:mt-0" src="./assets/img/what-data-collect/content-<?= $key ?>.webp" alt="<?= $text ?>">
<?php } ?>

<div class="what-data-collect sm:container px-[0.5rem] my-10">
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

        <div class="what-data-collect-content-wrapper relative">
            <?php foreach ($arData as $key => $value) {
                getDataImageTab($value['name'], $value['code'], $key);
            } ?>
        </div>
    </div>
</div>

<style>
    .what-data-collect-tab.active {
        position: relative !important;
        border: 1px solid #D9D9D9;
    }
    .what-data-collect-content.active {
        display: block;
        position: relative;
    }
</style>