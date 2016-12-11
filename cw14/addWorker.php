<?php
require_once 'baza.php';
if(isset($_POST['imie'])){
    $imie = $_POST['imie'];
    $nazwisko = $_POST['nazwisko'];
    if(is_numeric($_POST['pensja'])){
        $pensja = floatval($_POST['pensja']);
    }else{
        $pensja = 1000;
    }    
    $stanowiskoid = intval($_POST['stanowisko']);
    if(trim($imie)=="" || trim($nazwisko)==""){
        header("Location: addNewWorker.php");
    }else{
        $conn = getConnection("localhost", "pracownik", 
                "pracownik", "pracownicy_sem4a");
        insertToWorkers($conn,$imie,$nazwisko,$pensja,$stanowiskoid);
        header("Location: cw14.php");
    }
    
}

