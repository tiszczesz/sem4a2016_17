<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
     
            <?php
            if(isset($_POST['imie']) ){
                $imie = trim($_POST['imie']);               
                if($imie==="" ){
                    header("Location: cw9.html");
                }               
                $pizza = $_POST['pizza'];
                if(isset($_POST['dod'])){
                    $dod = $_POST['dod'];
                }else{
                    $dod = [];
                }
              $cena = floatval($pizza);
              $cena_dodatki = 0;
              foreach ($dod as $item) {
                  $cena_dodatki += floatval($item);
              }
              $total = $cena_dodatki+$cena;
$html = <<<TEXT
 <p> Opłata za pizzę: </p>
 <p>{$imie} cena: pizza:{$cena}zł + dodatki {$cena_dodatki}zł = {$total}zł</p>
 
TEXT;
          echo $html;
            }else{
                echo "<p><a href='cw9.html'>Przejdź do formularza</a></p>\n";
            }
            ?>
        
    </body>
</html>
