<?php
    include_once __DIR__ . "/../../../core/bootstrap.php";
?>
<!doctype html>
<html lang="ru">
    <head>
        <?php includeInc("head"); ?>
    </head>

    <body class="relative w-full overflow-x-hidden pt-[10svw] 2xl:pt-[200px] xl:pt-[180px] lg:pt-[130px] md:pt-[100px] sm:pt-[85px] s:pt-[55px]">
        <?php includeBlock('monitor'); ?>
        <?php includeBlock('header'); ?>
        <?php includeBlock('team'); ?>
        <?php includeBlock('map-utp'); ?>
        <?php includeBlock('details'); ?>
        <?php includeInc('footer'); ?>
    </body>
</html>