<?php
require '9-2filmList.php';
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$filmlist = new Films();

if (isset($_GET["action"]) && $_GET["action"] == "new"){
    $add =$filmlist->createFilm($_POST["titel"], $_POST["duurtijd"]) ;
}


?>



<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Gegevens toevoegen</title>
    </head>
    <body>
        <h1>Alle films</h1>

        <?php
        $tab = $filmlist->getLijst();
        ?>
        <ul>
            <?php
            foreach ($tab as $film) {
                print("<li>" . $film . "</li>");
            }
            ?>
        </ul>

        <h1>Film toevoegen</h1>

        <form action="9-2films.php?action=new" method="post">

        Titel : <input type="text" name="titel" required="required" /><br /><br />
            Duurtijd : <input type="number" name="duurtijd" min="1" required="required" /> minuten<br />

            <input type="submit" value="Toevoegen" />
        </form>

    </body>
</html>
