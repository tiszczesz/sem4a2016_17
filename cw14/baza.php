<?php
function getConnection($srv,$user,$pswd,$db){
    $conn = new mysqli($srv, $user, $pswd, $db);
    if($conn->connect_errno>0){
        die("Błąd połączenia: ".$conn->connect_error);
    }
    $conn->query("SET NAMES utf8");
    return $conn;
}
function getAllWorkers($conn){
    if($conn){
       $sql = "SELECT imie,nazwisko,pensja,nazwa FROM pracownicy as p"
               . " INNER JOIN stanowiska as s ON p.stanowiskoid=s.id "
               . "ORDER BY nazwisko";
       $result = $conn->query($sql);
       $dane = [];
       if(!$result){return [];}
       while ($row=$result->fetch_assoc()){
           $dane[] = $row;
       }
       return $dane;
    }else{
        return [];
    }
}
function workersToHtmlTab(array $dane){
    $html = "<table>\n<tr><th>Lp</th><th>Imię</th>"
            . "<th>Nazwisko</th><th>Pensja</th><th>Stanowisko</th></tr>\n";
    $i=0;
    foreach ($dane as $row) {
        $i++;
        $html .= "<tr><td>{$i}</td>"
                . "<td>{$row['imie']}</td>"
                . "<td>{$row['nazwisko']}</td>"
                . "<td>{$row['pensja']}</td>"
                . "<td>{$row['nazwa']}</td></tr>\n";
    }
    $html .="</table>\n";
    return $html;
}

