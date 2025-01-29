<?php
    include_once __DIR__ . "/../../../core/bootstrap.php";
?>
<!doctype html>
<html lang="ru">
    <head>
        <?php include("../../include/head.php"); ?>
    </head>

    <body class="relative w-full overflow-x-hidden">
        <?php includeBlock('header'); ?>
        <?php includeBlock('price-banner'); ?>
        <?php includeBlock('price-utp'); ?>
        <?php includeInc('footer'); ?>
    </body>
</html>