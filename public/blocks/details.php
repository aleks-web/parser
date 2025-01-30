<?php
    $folderImg = ASSETS_URL . "/img/file.svg";
?>

<div class="gsap-block sm:container px-[0.5rem]">
    <?php $detailWhiteTitle = "title-white xl:rounded-20"; ?>

    <div class="my-10 flex flex-wrap">
        <span class="title-blue">Заказывайте и вы</span>
        <span class="<?= $detailWhiteTitle ?>">профессиональный,</span>
        <span class="<?= $detailWhiteTitle ?>">быстрый и точный парсинг</span>
        <span class="<?= $detailWhiteTitle ?>">любых данных с любых сайтов</span>
        <span class="<?= $detailWhiteTitle ?>">в компании <span class="text-[#1450D0]">Parsing-Data!</span></span>
    </div>

    <div class="text-[#5A575F] flex items-center gap-4 mb-10 xl:text-2xl">
        <svg class="w-9 aspect-square"><use xlink:href="#svg-blue-info-cirlce"></use></svg>
        <span>Реквизиты</span>
    </div>

    <div class="grid gap-4 mb-10 xl:grid-cols-2">
        <div class="bg-white rounded-[15px] flex items-center p-3 gap-3 w-full xl:rounded-[40px] xl:p-5 xl:gap-5">
            <img src="<?= $folderImg ?>" alt="folder" class="bg-[#E6F7FF] rounded-[20px] py-[25px] px-[20px]" loading="lazy">

            <div class="flex flex-col justify-center">
                <span class="text-[#5A575F] text-xs xl:text-lg xl:leading-6">ООО</span>
                <span class="text-[#5A575F] text-sm font-bold sm:text-lg xl:text-2xl xl:leading-6">«Перспективные решения»</span>
            </div>
        </div>

        <div class="bg-white rounded-[15px] flex items-center p-3 gap-3 w-full xl:rounded-[40px] xl:p-5 xl:gap-5">
            <img src="<?= $folderImg ?>" alt="folder" class="bg-[#E6F7FF] rounded-[20px] py-[25px] px-[20px]" loading="lazy">

            <div class="flex flex-col justify-center">
                <span class="text-[#5A575F] text-xs xl:text-lg xl:leading-6">ИНН</span>
                <span class="text-[#5A575F] text-sm font-bold sm:text-lg xl:text-2xl xl:leading-6">6678089470</span>
            </div>
        </div>

        <div class="bg-white rounded-[15px] flex items-center p-3 gap-3 w-full xl:rounded-[40px] xl:p-5 xl:gap-5">
            <img src="<?= $folderImg ?>" alt="folder" class="bg-[#E6F7FF] rounded-[20px] py-[25px] px-[20px]" loading="lazy">

            <div class="flex flex-col justify-center">
                <span class="text-[#5A575F] text-xs xl:text-lg xl:leading-6">КПП</span>
                <span class="text-[#5A575F] text-sm font-bold sm:text-lg xl:text-2xl xl:leading-6">665801001</span>
            </div>
        </div>

        <div class="bg-white rounded-[15px] flex items-center p-3 gap-3 w-full xl:rounded-[40px] xl:p-5 xl:gap-5">
            <img src="<?= $folderImg ?>" alt="folder" class="bg-[#E6F7FF] rounded-[20px] py-[25px] px-[20px]" loading="lazy">

            <div class="flex flex-col justify-center">
                <span class="text-[#5A575F] text-xs xl:text-lg xl:leading-6">ОГРН</span>
                <span class="text-[#5A575F] text-sm font-bold sm:text-lg xl:text-2xl xl:leading-6">1186658000550</span>
            </div>
        </div>

        <div class="bg-white rounded-[15px] flex items-center p-3 gap-3 w-full xl:rounded-[40px] xl:p-5 xl:gap-5">
            <img src="<?= $folderImg ?>" alt="folder" class="bg-[#E6F7FF] rounded-[20px] py-[25px] px-[20px]" loading="lazy">

            <div class="flex flex-col justify-center">
                <span class="text-[#5A575F] text-xs xl:text-lg xl:leading-6">ТЕЛЕФОН</span>
                <span class="text-[#5A575F] text-sm font-bold sm:text-lg xl:text-2xl xl:leading-6"><?= $_ENV['PHONE']; ?></span>
            </div>
        </div>

        <div class="bg-white rounded-[15px] flex items-center p-3 gap-3 w-full xl:rounded-[40px] xl:p-5 xl:gap-5">
            <img src="<?= $folderImg ?>" alt="folder" class="bg-[#E6F7FF] rounded-[20px] py-[25px] px-[20px]" loading="lazy">

            <div class="flex flex-col justify-center">
                <span class="text-[#5A575F] text-xs xl:text-lg xl:leading-6">ПОЧТА</span>
                <span class="text-[#5A575F] text-sm font-bold sm:text-lg xl:text-2xl xl:leading-6"><?= $_ENV['EMAIL']; ?></span>
            </div>
        </div>

    </div>
</div>