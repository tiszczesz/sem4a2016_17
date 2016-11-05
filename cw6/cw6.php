<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <pre>
        <?php
        require_once '../cw5/functions.php';
        $tt = ['jeden'=>34, 
            2=>'laalalala','ostatni'=>9999];
        print_r($tt);
        foreach ($tt as $k => $v) {
            echo 'klucz: '.$k.' wartość: '.$v.'<br>';
        }
        $keys = array_keys($tt);
        $values = array_values($tt);
        print_r($keys);
        print_r($values);
        asort($tt);
        print_r($tt);
        ?>
        </pre>
        <?php
        $workers = GetWorkers();
        echo ArrayToSelect($workers);
        echo '<pre>';
        print_r(GetStatFromWorkers($workers));
        echo '</pre>';
        ?>
    </body>
</html>
