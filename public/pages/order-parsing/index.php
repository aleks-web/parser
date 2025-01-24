<?php
    include_once __DIR__ . "/../../../core/bootstrap.php";
?>
<!doctype html>
<html lang="ru">
    <head>
        <?php include("../../include/head.php"); ?>
    </head>

    <body class="relative w-full overflow-hidden">
        <?php includeBlock('header'); ?>

        <?php includeBlock('form'); ?>

        <?php includeInc('footer'); ?>
    </body>
</html>