<?php
//dbGegevensBewerken.php
require_once("films2.php");
require_once("filmList2.php");
$updated= false;
if (isset($_GET["action"]) && $_GET["action"] == "verwerk") {
    $film = new Film($_GET["id"], $_POST["titel"], $_POST["duurtijd"]);
    $filmLijst = new FilmLijst ();
    $filmLijst->updateFilm($film);
    $updated = true;
}
?>
<!DOCTYPE HTML>
<html>
<head>
    <meta charset=utf-8>
    <title>films</title>
</head>
<body>
<h1>film bewerken</h1>
<?php
if ($updated) {
    print("Record bijgewerkt!");
}
$filmLijst = new FilmLijst();
$film = $filmLijst->getFilmById($_GET["id"]);
?>
<form action="filmedit.php?action=verwerk&id=
<?php print($_GET["id"]);?>" method="post">
    Naam: <input type="text" name="titel" value="
<?php print($film->getTitel()); ?>" /><br /><br />

    Prijs: <input type="text" name="duurtijd" value="
<?php print($film->getDuurtijd()); ?>" /> euro<br />
    <input type="submit" value="Opslaan" />
</form>
<br />
<a href="filmsvista.php">Terug naar overzicht</a>
dfsfs
</body>
</html>