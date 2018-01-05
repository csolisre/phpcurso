<?php

//analyse.php
class Oefening {

    public function getAnalyse($getal1, $getal2) {
        $antw = $getal1 > $getal2;
        if ($antw == true) {
            return "Het eerste getal is groter dan het tweede";
        }else{
            return "Het eerste getal is niet groter dan het tweede";
        }
    }

}
?>
<!DOCTYPE HTML>
<html>
    <head>
        <meta charset=utf-8>
        <title>Analyse</title>
    </head>
    <body>
        <h1>
            <?php
            $oef = new Oefening();
            print($oef->getAnalyse(7, 6));
            ?>
        </h1>
    </body
