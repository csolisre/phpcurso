<?php
//dbGegevensBewerken.php
require_once("films.php");
require_once("filmList.php");
$updated = false;
if (isset($_GET["action"]) && $_GET["action"] == "verwerk") {
    $film = new Film($_GET["id"], $_POST["title"], $_POST["duurtijd"]);
    $filLijst = new getLijst();
    $filLijst->updateFilm($film);
    $updated = true;
}
?>
<!DOCTYPE HTML>
<html>
    <head>
        <meta charset=utf-8>
        <title>Modules</title>
    </head>
    <body>
        <h1>Module bewerken</h1>
        <?php
        if ($updated) {
            print("Record bijgewerkt!");
        }
        $filLijst = new FilmLijst();
        $film = $filLijst->getFilmById($_GET["id"]);
        ?>
        <form action="dbGegevensBewerken.php?action=verwerk&id=
              <?php print($_GET["id"]); ?>" method="post">
            Naam: <input type="text" name="titel" value="
                         <?php print($film->getTitel()); ?>" /><br /><br />

            Prijs: <input type="text" name="duurtijd" value="
                          <?php print($film->getDuurtijd()); ?>" /> minuten<br />
            <input type="submit" value="Opslaan" />
        </form>
        <br />
        <a href="overzicht.php">Terug naar overzicht</a>
    </body>
</html>

