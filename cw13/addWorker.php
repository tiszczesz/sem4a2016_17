<?php

if(isset($_POST['imie']) && isset($_POST['nazwisko'])){
    $imie = trim($_POST['imie']);
    $nazwisko = trim($_POST['nazwisko']);
    if(is_numeric($_POST['pensja'])){
        $pensja = intval($_POST['pensja']);
    }else{
        header("Location: dodaj.html");
    }
    if($imie==="" || $nazwisko===""){
        header("Location: dodaj.html");
    }
    require_once 'functions.php';
    AddNewWorker("dane.txt",$imie,$nazwisko,$pensja);
    header("Location: cw13.php");
}

