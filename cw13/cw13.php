<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Pracownicy</title>
        <link rel="stylesheet" href="cw13.css"/>
    </head>
    <body>
        <div id="wrapper">
            <div id="banner">Pracownicy</div>
            <div id="menu">
                <ul>
                    <li>
                        <a href="cw13.php">Strona główna</a>
                    </li>
                    <li>
                        <a href="dodaj.html">Dodaj pracownika</a>
                    </li>
                </ul>
            </div>
            <div id="content">
                <?php
                require_once 'functions.php';
                $pracownicy = GetAll("dane.txt");
                echo PracToHtmlTab($pracownicy);
                ?>
            </div>
            <div id="footer"> Kraków 2016</div>
        </div>  
    </body>
</html>
