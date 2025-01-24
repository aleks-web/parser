<?php
    include_once __DIR__ . "/../../../core/bootstrap.php";
?>
<!doctype html>
<html lang="ru">
    <head>
        <?php include("../../include/head.php"); ?>
    </head>

    <body>

        <?php includeBlock('header'); ?>

        <?php includeBlock('price-banner'); ?>
        <?php includeBlock('price-utp'); ?>

        <?php includeInc('footer'); ?>
    </body>
</html>