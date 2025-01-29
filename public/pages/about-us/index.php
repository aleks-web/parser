<?php
    include_once __DIR__ . "/../../../core/bootstrap.php";
?>
<!doctype html>
<html lang="ru">
    <head>
        <?php includeInc("head"); ?>
    </head>

    <body class="relative w-full overflow-x-hidden pt-[15svw] md:pt-[12svw] lg:pt-[10svw] xl:pt-[150px] 2xl:pt-[160px]">
        <?php includeBlock('header'); ?>
        <?php includeBlock('team'); ?>
        <?php includeBlock('map-utp'); ?>
        <?php includeBlock('details'); ?>

        <?php includeInc('footer'); ?>
    </body>
</html>