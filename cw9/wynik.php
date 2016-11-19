<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
     
            <?php
            if(isset($_POST['imie']) && isset($_POST['nazwisko'])){
                $imie = trim($_POST['imie']);
                $nazwisko = trim($_POST['nazwisko']);
                if($imie==="" || $nazwisko===""){
                    header("Location: cw9.html");
                }
                $plec = $_POST['plec'];
                $semestr = $_POST['semestr'];
                if(isset($_POST['zaint'])){
                    $zaint = $_POST['zaint'];
                }else{
                    $zaint = [];
                }
              $p = $plec==='k' ? "Pani" : "Pan";  
              $z = "Twoje zainteresowania: ";
              foreach ($zaint as $item) {
                  $z .= $item." ";
              }
$html = <<<TEXT
 <p> Dane z formularza </p>
 <p>{$p} {$imie} {$nazwisko} {$semestr}</p>
 <p>{$z}</p>
TEXT;
          echo $html;
            }else{
                echo "<p><a href='cw9.html'>Przejdź do formularza</a></p>\n";
            }
            ?>
        
    </body>
</html>
