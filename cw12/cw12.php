<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Licznik</title>
    </head>
    <body>
        <h1>Licznik</h1>
        <?php
        $filename = "licznik.txt";
        if(file_exists($filename)){
            $p = fopen($filename, 'r');
            $licznik = fgets($p);            
            fclose($p);   
        }else{
            $licznik=1;           
        }
        $p = fopen($filename, 'w');
        fwrite($p, ($licznik+1));
        echo "<div>Ilość odwiedzin na stronie: {$licznik}</div>\n";
        ?>
    </body>
</html>
