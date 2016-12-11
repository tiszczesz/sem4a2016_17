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
function getSum($conn){
    if($conn){
       $sql = "SELECT SUM(pensja) FROM pracownicy";
       $result = $conn->query($sql);
       return $result->fetch_row()[0];
    }else{
        return 0;
    }
}
function getAvg($conn){
        if($conn){
       $sql = "SELECT AVG(pensja) FROM pracownicy";
       $result = $conn->query($sql);
       return $result->fetch_row()[0];
    }else{
        return 0;
    }
}
function stanowiskaToHtmlSelect($conn){
    if($conn){
        $sql = "SELECT id, nazwa FROM stanowiska ORDER BY nazwa";
        $result = $conn->query($sql);
        $html = "<select name='stanowisko'>";
        while ($row = $result->fetch_assoc()){
            $html .= "<option value='{$row['id']}'>{$row['nazwa']}</option>\n";
        }
        $html .= "</select>\n";
        return $html;
    }else{
        return "";
    }
}
function insertToWorkers($conn,$imie,$nazwisko,$pensja,$stanowiskoid){
    if($conn){
        $sql = "INSERT INTO pracownicy(imie,nazwisko,pensja,stanowiskoid)"
                . " values('{$imie}','{$nazwisko}',{$pensja},{$stanowiskoid})";
        $result = $conn->query($sql);
        return $result;
    }
    return NULL;
}
function workerToSelect($conn){
    if($conn){
        $sql =  "SELECT id, imie, nazwisko FROM pracownicy "
               . "ORDER BY nazwisko";
        $result = $conn->query($sql);
        $html = "<form action='delete.php' method='post'>";
        $html .= "<select name='pracownik'>";
        while($row = $result->fetch_assoc()){
            $html .= "<option value='{$row['id']}'>{$row['nazwisko']}"
                      . " {$row['imie']}</option>\n";
        }
        $html .= "</select><input type='submit' value='Usuń'/></form>\n";
        return $html;
    }else{
        return " Błąd  ";
    }
}

function deleteWorker($conn,$id){
    if($conn){
        $result = $conn->query("DELETE FROM pracownicy where id={$id}");
        return $result;
    }
    return NULL;
}