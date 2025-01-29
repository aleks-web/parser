<?php
    include_once __DIR__ . "/../../../core/bootstrap.php";
?>
<!doctype html>
<html lang="ru">
    <head>
        <?php include("../../include/head.php"); ?>
    </head>

    <body class="relative w-full overflow-x-hidden pt-[15svw] md:pt-[12svw] lg:pt-[10svw] xl:pt-[150px] 2xl:pt-[200px]">
        <?php includeBlock('header'); ?>

        <?php includeBlock('form'); ?>

        <?php includeInc('footer'); ?>
    </body>
</html>