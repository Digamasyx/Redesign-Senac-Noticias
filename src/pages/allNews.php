<?php
require_once(dirname(__DIR__) . '/php/classes/NewsController.php');
require_once(dirname(__DIR__) . '/php/functions/getPath.php');
?>

<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
    <link rel="icon" href="assets/img/Logosemnome.svg">
    <link rel="stylesheet" href="/assets/css/allNews.css">
    <title>SENAC | Ver notícias</title>
</head>
<body>
    <!-- Header  -->
    <?php require_once(dirname(__DIR__) . '/php/components/header.html'); ?>

    <main>
        <!-- News List -->
        <?php require_once(dirname(__DIR__) . '/php/components/newsList.php'); ?>   
    </main>

    <!-- Footer -->
    <?php require_once(dirname(__DIR__) . '/php/components/footer.html'); ?>
</body>
</html>