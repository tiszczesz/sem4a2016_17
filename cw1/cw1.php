<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <pre>
            <?php
            $a = [2, 4, 5, 6,"ererere",[3,3,6,6]]; 
            var_dump($a);

            class User {
                
            }
            $user = new User();
            var_dump($user);
            ?>
        </pre>
        <h3>Operatory arytmetyczne</h3>
        <?php
        $a = 34;
        $b = 0;
        echo 'a = ' . $a . '<br>';
        echo "a = {$a}<br>";
        echo "<p>{$a} + {$b} = " . ($a + $b) . "</p>\n";
        echo "<p>{$a} - {$b} = " . ($a - $b) . "</p>\n";
        echo "<p>{$a} * {$b} = " . ($a * $b) . "</p>\n";
        if ($b !== 0) {
            echo "<p>{$a} / {$b} = " . round($a / $b, 2) . "</p>\n";
        } else {
            echo "<p>{$a} / {$b} = dzielenie przez zero</p>\n";
        }
        echo "<p>Inna wersja z operatorem warunkowym</p>\n";
        $wynik = $b!=0 ? round($a / $b, 2) :"dzielenie przez zero" ;
        echo "<p>{$a} / {$b} = {$wynik}</p>\n";
        $wiek = 13;
        if($wiek<0){
            echo "<p>Osoba przed urodzeniem</p>\n";
        }else if($wiek<18){
            echo "<p>Osoba niepełnoletnia</p>\n";
        }else if($wiek<120){
            echo "<p>Osoba pełnoletnia</p>\n";
        }else{
            echo "<p>Osoba nieżyjąca</p>\n";
        }
        $a=34; $b=34;
        echo 'a++: '.$a++.'<br>';
        echo '++b: '.++$b;
        echo "<p>a = {$a} b = {$b}</p>\n";
        if($a--<35){
            echo "gggggggg";
        }
        $a+=10; //$a = $a+10;
        $a-=10; //$a = $a-10;
        $a*=4;  //$a = $a * 4;
        $a/=5;  //$a = $a / 5;        
        ?>
        <h3>Rzutowania (konwersja typów)</h3>
        <pre>
        <?php
        $b = 0;
        $zmienna = "ala ma kota".$b;
        $zmienna2 = "ala ma kota"+$b;
        var_dump($zmienna);
        var_dump($zmienna2);
        $c = FALSE;
        $napis = " ";
        var_dump(!!$napis);        
        var_dump($c);
        var_dump(!!$b);
        if(0){
            
        }
        ?>
        </pre>
    </body>
</html>
