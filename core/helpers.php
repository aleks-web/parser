<?php

/*
 * Подключает блоки
 * */
function includeBlock($blockFileName) {
    include SITE_PATH . "/blocks/" . $blockFileName . ".php";
}

/*
 * Подключает файлы из include папки
 * */
function includeInc($incFileName) {
    include SITE_PATH . "/include/" . $incFileName . ".php";
}

define('PAGES_LIST', ['price', 'order-parsing', 'main', 'about-us', 'cases']);

function getCurrenPage() {
    foreach (PAGES_LIST as $key => $page) {
        $res = str_contains($_SERVER['DOCUMENT_URI'], $page);

        if ($res) { return $page; }
    }

    return 'main';
}

function getTitle() {
    switch (getCurrenPage()) {
        case 'main':
            return 'Парсинг';
            break;
        case 'price':
            return 'Цены';
            break;
        case 'order-parsing':
            return 'Заказ парсинга';
            break;
        case 'about-us':
            return 'О нас';
            break;
        case 'cases':
            return 'Кейсы и отзывы';
            break;
    }
}

function getDescription() {
    switch (getCurrenPage()) {
        case 'main':
            return 'Парсинг';
            break;
        case 'price':
            return 'Цены';
            break;
        case 'order-parsing':
            return 'Заказ парсинга';
            break;
        case 'about-us':
            return 'О нас';
            break;
        case 'cases':
            return 'Кейсы и отзывы';
            break;
    }
}
?>