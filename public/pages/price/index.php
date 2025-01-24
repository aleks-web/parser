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

        <!--div class="hidden absolute z-10 aspect-square
            md:block md:-right-[10px] md:-top-[100px] md:h-[50%]
            ">
            <img src="<?= ASSETS_URL ?>/img/head-monitor.webp">
        </div-->

        <?php includeBlock('price-banner'); ?>
        <?php includeBlock('price-utp'); ?>

        <?php includeInc('footer'); ?>
    </body>
</html>