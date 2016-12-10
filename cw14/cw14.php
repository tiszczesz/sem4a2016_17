<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
       
        <?php
        require_once 'baza.php';
        $conn = getConnection("localhost","pracownik"
                ,"pracownik","pracownicy_sem4a");
        $workers = getAllWorkers($conn);
        echo workersToHtmlTab($workers);
        $sum = getSum($conn);
        $avg = getAvg($conn);
        echo "<p>Całkowita pensja pracownków wynosi: {$sum} PLN</p>\n";
        echo "<p>Średnia pensja pracownków wynosi: {$avg}</p>\n";
        $conn->close();
        ?>
        
    </body>
</html>
