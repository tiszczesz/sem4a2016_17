<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Tablice w php</title>
    </head>
    <body>
        <h1>Tablice w php</h1>
        <pre>
        <?php
        $t1 = array(34,45,78,"ala ma kota",array(23,6,7));
        var_dump($t1);
        print_r($t1);
        $t2 = [12,67,34,"ererere"];
        echo "Rozmiar tablicy ".count($t2);
        print_r($t2);
        $t2[] = "dodany element";
        print_r($t2);
        $t2[2] = "drugi";
        $t2[9] = "ggggggg";
        unset($t2[3]);
        print_r($t2);
        foreach ($t2 as $item) {
            echo $item.' ';
        }
        echo "<br>";
        for($i=0;$i<count($t2);$i++){
            echo $t2[$i].' ';
        }
        
        
        ?>
      </pre>
    </body>
</html>
