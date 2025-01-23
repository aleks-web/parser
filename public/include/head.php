<?php
        if(false === defined('ASSETS_URL')) {
            include_once __DIR__ . "/../../core/bootstrap.php";
        }
?>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

<script src="https://cdn.jsdelivr.net/npm/gsap@3.12.7/dist/gsap.min.js"></script>
<script src="<?= ASSETS_URL ?>/js/main.js"></script>

<link href="<?= ASSETS_URL ?>/fonts/Roboto/stylesheet.css" rel="stylesheet">
<link href="<?= ASSETS_URL ?>/css/main.css" rel="stylesheet">
<link href="<?= ASSETS_URL ?>/css/output.css" rel="stylesheet">

<title><?= getTitle() ?></title>

<meta name="description" content="<?= getDescription() ?>">