<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link href="cw5.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <?php
        require_once 'functions.php';

        $dane = GetUsers();
        echo ArrayToHtml($dane);
        $t2 = [];
        for ($i = 0; $i < 40; $i++) {
            $t2[] = rand(0, 50);
        }
        foreach ($t2 as $item) {
            echo $item . ' ';
        }
        echo '<br>';
        sort($t2);
        foreach ($t2 as $item) {
            echo $item . ' ';
        }
        echo '<br>';
        ?>
    </body>
</html>
