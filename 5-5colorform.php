<?php
//kleur.php

$achtergrondkleur = "white";
if (isset($_POST["kleur"])) {
    setcookie("achtergrondkleur", $_POST["kleur"], time()+ 10);
    $achtergrondkleur = $_POST["kleur"];
} elseif (isset($_COOKIE["achtergrondkleur"])) {
    $achtergrondkleur = $_COOKIE["achtergrondkleur"];
}
?>


<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Kleur</title>
    </head>
    <body style="background-color: <?php print($achtergrondkleur); ?>">
        
        <form action="5-5colorform.php" method="post">
            <label>Kies uw favoriete achtergrondkleur:
            <select name="kleur">
                <option value="#ef6a6a">Rood</option>
                <option value="#6aefed">Blauw</option>
                <option value="#6aef6d">Groen</option>
                <option value="#e7ef6a">Geel</option>
                <option value="white">Wit</option>
            </select></label>
            
            <input type="submit" value="OK" />
        </form>
        
        <a href="5-5colorform.php">Pagina vernieuwen</a>
    </body>
</html>