<?php
//schattenjacht.php

session_start();

if (isset($_GET["reset"]) && $_GET["reset"] == 1) {
    unset($_SESSION["puertas"]);
    unset($_SESSION["puertaDeCofre"]);
    unset($_SESSION["intentos"]);     // EXTRA
}

if (!isset($_SESSION["puertas"])) {
    $_SESSION["intentos"] = 0;    // EXTRA
    $_SESSION["puertas"] = array();

    for ($i = 1; $i <= 7; $i++) {
        $_SESSION["puertas"][$i] = 0;
    }
    $_SESSION["puertaDeCofre"] = rand(1, 7);
}

if (isset($_GET["selecion"])) {
    $_SESSION["intentos"] +=1;     // EXTRA

    $gekozenDeurNr = $_GET["selecion"];
    if ($gekozenDeurNr == $_SESSION["puertaDeCofre"]) {
        $_SESSION["puertas"][$gekozenDeurNr] = 2;
        $msg= "Geraden in " . $_SESSION["intentos"] . " beurt(en)!";     // EXTRA

    } else {
        $_SESSION["puertas"][$gekozenDeurNr] = 1;
    }
}
?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Schattenjacht</title>
    <style>
        img { border-width: 0px;}
        .inactief {pointer-events: none;} /* EXTRA */
    </style>
</head>
<body>
<h1>Kies een deur</h1>

<?php
for ($i = 1; $i <= 7; $i++) {
    ?>
    <a href="schatt.php?selecion=<?php print($i);?>"
        <?php if(isset($msg)) {print('class="inactief"');} ?> > <!-- EXTRA -->
        <?php
        if ($_SESSION["puertas"][$i] == 0) {
            ?>
            <img src="../img/doorclosed.png" alt="gesloten deur"/>
            <?php
        } elseif ($_SESSION["puertas"][$i] == 1) {
            ?>
            <img src="../img/dooropen.png" alt="open deur" />
            <?php
        } elseif ($_SESSION["puertas"][$i] == 2) {
            ?>
            <img src="../img/doortreasure.png" alt="deur met schat" />
            <?php
        }
        ?>
    </a>
    <?php
}
?>
<br />
<!--EXTRA-->
<p>
    <?php if(isset($msg)) {echo $msg;} ?>
</p>
<p>
    Klik <a href="schatt.php?reset=1">hier</a> om een nieuw spel te beginnen.
</p>
</body>
</html>
