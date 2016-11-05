<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form method="GET" >
            <input type="text" name="a"/>
            <input type="submit" value="zatwierdź"/>
        </form>
        <pre>
        <?php
        echo "GET<br>";
        var_dump($_GET);
        echo "POST <br>";
        var_dump($_POST);
        ?>
        </pre>
    </body>
</html>
