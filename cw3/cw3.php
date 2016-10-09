<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Funkcje w php</title>
        <link href="cw3.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <h1>Funkcje w php</h1>
        <?php
        require_once 'functions.php';
        echo Wiztowka('Jan', 'Kowalski', 'kierowca');
        echo Wiztowka('Anna', 'Małecka', 'sekretarka');
        echo GenerHtmlTab(6, 8);
        ?>
    </body>
</html>
