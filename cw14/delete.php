<?php
if(isset($_POST['pracownik'])){
    require_once 'baza.php';
    $id = intval($_POST['pracownik']);
    $conn = getConnection("localhost", "pracownik", 
            "pracownik", "pracownicy_sem4a");
    deleteWorker($conn,$id);
    header("Location: cw14.php");
}
