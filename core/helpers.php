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

define('PAGES_LIST', ['price', 'order-parsing', 'index', 'about-us', 'cases']);

function getCurrenPage() {
    foreach (PAGES_LIST as $key => $page) {
        $res = str_contains($_SERVER['DOCUMENT_URI'], $page);

        if ($res) { return $page; }
    }

    return 'index';
}
?>