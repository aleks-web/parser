<?php
    include_once __DIR__ . "/../core/bootstrap.php";
?>
<!doctype html>
<html lang="ru">
    <head>
        <?php include("./include/head.php"); ?>
    </head>

    <body>
        <?php includeBlock('header'); ?>
        <?php includeBlock('main-banner'); ?>
        <?php includeBlock('what-data-collect'); ?>
        <?php includeBlock('faq'); ?>

        <?php includeInc('footer'); ?>
    </body>
</html>