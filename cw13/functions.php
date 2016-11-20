<?php
function GetAll($filname){
    $dane = file($filname,FILE_IGNORE_NEW_LINES);
    $pracownicy = [];
    foreach ($dane as $row) {
        $pracownicy[] = explode('|', $row);
    }
    return $pracownicy;
}
function PracToHtmlTab(array $dane){
    $lp = 0;
    $html = "<table><tr><th>Lp</th><th>Imię</th>"
            . "<th>Nazwisko</th><th>Pensja</th></tr>\n";
    foreach ($dane as $row) {
        $lp++;
        $html .= "<tr><td>{$lp}</td><td>{$row[0]}</td>"
                . "<td>{$row[1]}</td><td>{$row[2]}</td></tr>\n";
    }
    $html .= "</table>\n";
    return $html;
}
function AddNewWorker($filename,$imie,$nazwisko,$pensja){
    $p = fopen($filename, 'a');
    $row = $imie.'|'.$nazwisko.'|'.$pensja.PHP_EOL;
    fwrite($p, $row);
    fclose($p);
}