<?php
//overzicht.php
require_once("filmList2.php");
?>
<!DOCTYPE HTML>
<html>
<head>
    <meta charset=utf-8>
    <title>Modules</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link  href="../../../css/bootstrap.css" rel="stylesheet">
    <script src="../../../js/bootstrap.min.js" ></script>
</head>
<body>
<h1>Peliculas</h1>
<?php
$filmLijst = new FilmLijst();
$tab = $filmLijst->getLijst();
?>
<ul>
    <?php
    foreach ($tab as $film) {
        $filmTitle = $film->getTitel();
        $filmDuurtijd = $film->getDuurtijd();
        $filmId = $film->getId();
        print("<li>" . $filmTitle . ", " . $filmDuurtijd . "
(<a href=\"filmedit.php?id="
            . $filmId . "\">Bewerken</a>) </li>");
    }
    ?>
    asddsfsdfsd
</ul>
</body>
</html>