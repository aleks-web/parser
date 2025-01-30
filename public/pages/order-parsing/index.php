<?php
    include_once __DIR__ . "/../../../core/bootstrap.php";
?>
<!doctype html>
<html lang="ru">
    <head>
        <?php include("../../include/head.php"); ?>
    </head>

    <body class="relative w-full overflow-x-hidden pt-[10svw] 2xl:pt-[200px] xl:pt-[180px] lg:pt-[130px] md:pt-[100px] sm:pt-[85px] s:pt-[55px]">
        <?php includeBlock('monitor'); ?>
        <?php includeBlock('header'); ?>
        <?php includeBlock('form'); ?>
        <?php includeInc('footer'); ?>
    </body>
</html>