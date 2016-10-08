<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h1>Pętle w php</h1>
        <h3>Pętla for(...;...;...){...}</h3>
        <?php
        
        for ($i = 1; $i <= 6; $i++) {
            echo "<h{$i}>Nagłówek {$i}</h{$i}>\n";
        }
        echo "<ol>\n";
        for ($i = 1; $i <= 6; $i++) {
            echo "<li>Element listy  nr {$i}</li>\n";
        }
        echo "</ol>\n";
        ?>
        <h3>Pętla while(...){...}</h3>
        <?php
        $i = 0;
        while ($i < 10) {
            echo ($i++) . " ";
        }
        echo "<p>Losowanie liczb aż trafimy na zero"
        . "(strażnik zbioru)</p>";
        $licznik = 0;
        $suma = 0;
        $min = PHP_INT_MAX;
        $max = -PHP_INT_MAX;
        while (($liczba = rand(0, 20)) != 0) {
            $licznik++;
            $suma+=$liczba;
            echo $liczba . " ";
            if($liczba<$min) {
                $min = $liczba;
            }
             if($liczba>$max) {
                $max = $liczba;
            }
        }
        if ($licznik === 0) {
            echo "<p>Zbiór pusty</p>\n";
        } else {
            
            echo "<p>Ilość wylosowanych liczb: {$licznik}</p>\n";
            echo "<p>Suma wylosowanych liczb: {$suma}</p>\n";
            $srednia = round($suma / $licznik, 2);
            echo "<p>Średnia wylosowanych liczb: {$srednia}</p>\n";
            echo "<p>Max wylosowanych liczb: {$max}</p>\n";
            echo "<p>Mni wylosowanych liczb: {$min}</p>\n";
        }
        ?>
        <h3>Pętla do{...}while(...)</h3>
        <?php
        $i=0;
          do{
              echo $i++." ";
          }while($i<10);      
        ?>
    </body>
</html>
