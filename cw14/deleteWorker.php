<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h1>Usuwanie pracownika</h1>
        <?php
        require_once 'baza.php';
        $conn = getConnection("localhost", "pracownik", 
                                "pracownik", "pracownicy_sem4a");
        echo workerToSelect($conn);
        ?>
    </body>
</html>
