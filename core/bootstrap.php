<?php
    include __DIR__ . "/../vendor/autoload.php";

    /*
     * Urls
     * */
    define('SITE_URL', $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST']);
    define('ASSETS_URL', SITE_URL . '/assets/');

    /*
     * Pathes
     * */
    define('CORE_PATH', __DIR__);
    define('SITE_PATH', dirname(__DIR__) . '/public');

    include __DIR__ . "/helpers.php";

?>