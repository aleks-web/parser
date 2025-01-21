<?php include "svg.php"; ?>


<div class="footer py-16 bg-[#292929] text-[white] font-bold text-[20px]">
    <div class="container">
        <ul class="flex flex-col uppercase gap-4 sm:grid sm:grid-cols-2 md:flex md:flex-row md:justify-center md:gap-20 lg:gap-32 xl:gap-44">
            <li><a href="#">Цены</a></li>
            <li>
                <a href="#" class="flex gap-6 justify-start items-center md:inline">
                    <span>Заказать парсинг</span>
                    <svg class="w-4 h-4 md:hidden"><use xlink:href="#svg-white-arrow"></use></svg>
                </a>
            </li>
            <li><a href="#">О нас</a></li>
            <li><a href="#">Кейсы и отзывы</a></li>
        </ul>

        <div class="text-[#656565] mt-10 text-center">parsing-data.ru | 2019-2025</div>
    </div>
</div>


<!-- Start Удалить по окончанию  -->
<div class="verstka"></div>
<style>
    .verstka {
        position:fixed;
        top: 0;
        right: 0;
        width: 25px;
        height: 25px;
        opacity: 0.4;
        display: flex;
        align-items: center;
        justify-content: center;
    }
    .verstka:before {
        content: '';
        width: 100%;
        height: 100%;
        font-size: 14px;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    @media (min-width: 0) {
        .verstka:before {
            content: 'def';
            background: black;
            color: white;
        }
    }
    @media (min-width: 576px) {
        .verstka:before {
            content: 'sm';
            background-color: #558000;
        }
    }
    @media (min-width: 768px) {
        .verstka:before {
            content: 'md';
            color: black;
            background-color: yellow;
        }
    }
    @media (min-width: 1024px) {
        .verstka:before {
            content: 'lg';
            color: white;
            background-color: darkred;
        }
    }
    @media (min-width: 1536px) {
        .verstka:before {
            content: 'xl';
            color: white;
            background-color: blue;
        }
    }
    @media (min-width: 1920px) {
        .verstka:before {
            content: '2xl';
            color: white;
            background-color: var(--main-clr);
        }
    }
</style>
<!-- End -->