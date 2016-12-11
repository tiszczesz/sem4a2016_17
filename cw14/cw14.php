<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link href="cw14.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
       
        <?php
        require_once 'baza.php';
        $conn = getConnection("localhost","pracownik"
                ,"pracownik","pracownicy_sem4a");
        $workers = getAllWorkers($conn);
        echo workersToHtmlTab($workers);
        $sum = getSum($conn);
        $avg = round(getAvg($conn),2);
        echo "<p>Całkowita pensja pracownków wynosi: {$sum} PLN</p>\n";
        echo "<p>Średnia pensja pracownków wynosi: {$avg} PLN</p>\n";
        $conn->close();
        ?>
        <div>
            <a href="addNewWorker.php">Dodaj nowego pracownika</a>
        </div>
    </body>
</html>
