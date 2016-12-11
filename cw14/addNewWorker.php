<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" href="cw14.css"/>
        <script type="text/javascript" src="cw14.js"></script>
    </head>
    <body>
        <h1>Dodawanie pracownika</h1>
        <form action="addWorker.php" method="post">
            <fieldset>
                <legend>Dane pracownika</legend>
                <div class="line">
                    <label>Imię:</label>
                    <input type="text" name="imie" id="imie"/>
                    <span class="error" id="imieerror"></span>
                </div>
                <div class="line">
                    <label>Nazwisko:</label>
                    <input type="text" name="nazwisko" id="nazwisko"/>
                    <span class="error" id="nazwiskoerror"></span>
                </div>
                <div class="line">
                    <label>Pensja:</label>
                    <input type="text" name="pensja" id="pensja"/>
                    <span class="error" id="pensjaerror"></span>
                </div>
                <div class="line">
                    <label>Wybór stanowiska:</label>
        <?php
        require_once 'baza.php';
        $conn = getConnection("localhost", "pracownik", 
                           "pracownik", "pracownicy_sem4a");
         echo stanowiskaToHtmlSelect($conn);
        ?>
                </div>
                <div class="line">
            <label></label> 
            <input type="submit" value="Dodaj pracownika"/>
                </div>
            </fieldset>
        </form>
    </body>
</html>
