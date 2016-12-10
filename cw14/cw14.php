<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <pre>
        <?php
        require_once 'baza.php';
        $conn = getConnection("localhost","pracownik"
                ,"pracownik","pracownicy_sem4a");
        $workers = getAllWorkers($conn);
        echo workersToHtmlTab($workers);
        ?>
        </pre>
    </body>
</html>
