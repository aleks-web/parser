<?php
    include_once __DIR__ . "/../core/bootstrap.php";
?>
<!doctype html>
<html lang="ru">
    <head>
        <?php includeInc("head"); ?>
    </head>

    <body class="relative w-full overflow-x-hidden pt-[10svw] 2xl:pt-[200px] xl:pt-[180px] lg:pt-[130px] md:pt-[100px] sm:pt-[85px] s:pt-[45px]">
        <?php  includeBlock('header'); ?>
        <?php includeBlock('main-banner'); ?>
        <?php includeBlock('what-data-collect'); ?>
        <?php includeBlock('scen'); ?>


        <div class="bg-white">
            <?php includeBlock('parser-data-can'); ?>
            <?php includeBlock('reasons'); ?>
            <?php includeBlock('faq'); ?>
            <?php includeInc('footer'); ?>
        </div>
    </body>
</html>