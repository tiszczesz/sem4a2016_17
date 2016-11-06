<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        function Potegowanie($podst,$wykl){
            if($wykl==1) return 1;
            if($wykl<0){
                $wykl=-$wykl;
                $podst = 1/$podst;
            }
            $wynik = 1;
            for($i=1;$i<=$wykl;$i++){
                $wynik *= $podst;
            }
            return $wynik;
        }
        if(isset($_POST['podstawa']) && isset($_POST['wykladnik'])){
            $podstawa = intval($_POST['podstawa']);
            $wykladnik = intval($_POST['wykladnik']);
           // if($wykladnik>0){
                echo "<p>{$podstawa}<sup>{$wykladnik}</sup>="
                .pow($podstawa, $wykladnik)."</p>\n";
                //.Potegowanie($podstawa, $wykladnik)."</p>\n";
           // }else{
            //    echo "<p>Błędny wykładnik</p>";
           // }
        }else{
            echo "<p>Błędne dane</p>";
        }
        
        ?>
        <div><a href="cw8.html">Powrót do formularza</a> </div>
    </body>
</html>
