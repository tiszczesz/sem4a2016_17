<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Odczyt z pliku</title>
    </head>
    <body>
        <h1>Odczyt z pliku</h1>
        <pre>
        <?php
        $filename = "dane.txt";
        $teksty = file($filename,FILE_IGNORE_NEW_LINES);
        var_dump($teksty);
//        if (file_exists($filename)) {
//            $plik = fopen($filename, 'r');
//            if($plik){
//                while($line= fgets($plik)){
//                    echo "<p>{$line}</p>\n";
//                }
//                if(feof($plik)){
//                    echo "<p>koniec pliku</p>\n";
//                }
//                fclose($plik);
//            }
//        } else {
//            echo "<p>Plik o nazwie: {$filename} nie istnieje</p>";
//        }
        $dane = ["ala ma kota",
            "inne zdanie na temat...",
            "dfgfgdg dgd fg dfg dffgfgf"];
        $plik2 = fopen("wynik.txt", 'w');
        if($plik2){
            foreach ($dane as $line) {
                fwrite($plik2, $line.PHP_EOL);
            }
            fclose($plik2);
        }
        ?>
    </pre>
</body>
</html>
