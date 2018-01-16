<?php
//overzicht.php
require_once("filmList.php");
?>
<!DOCTYPE HTML>
<html>
    <head>
        <meta charset=utf-8>
        <title>Modules</title>
    </head>
    <body>
        <h1>Modules</h1>
        <?php
        $filLijst = new FilmLijst();

        $tab = $filLijst->getLijst();
        ?>
        <ul>
            <?php
            foreach ($tab as $film) {
                $filmTitel = $film->getTitel();
                $filmId = $film->getId();
                print("<li>" . $filmTitel . "
(<a href=\"dbGegevensBewerken.php?id="
                        . $filmId . "\">Bewerken</a>) </li>");
            }
            ?>
        </ul>
    </body>
</html>