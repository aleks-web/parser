<?php
    include_once __DIR__ . "/../../../core/bootstrap.php";
?>
<!doctype html>
<html lang="ru">
    <head>
        <?php includeInc("head"); ?>
    </head>

    <body>
        <?php includeBlock('header'); ?>
        <?php includeBlock('cases'); ?>
        <?php includeInc('footer'); ?>
    </body>
</html>