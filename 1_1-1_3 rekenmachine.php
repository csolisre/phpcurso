<?php

//rekenmachine.php
class Rekenmachine {

    public function getKwadraat($getal) {
        $kwad = $getal * $getal;
        return $kwad;
    }

    public function getSom($getal1, $getal2) {
        $resultaat = $getal1 + $getal2;
        return $resultaat;
    }
    public function getVermenig($getal1, $getal2) {
        $resultaat = $getal1 * $getal2;
        return $resultaat;
    }

}
?>
<!DOCTYPE HTML>
<html>
    <head>
        <meta charset=utf-8>
        <title>Rekenmachine</title>
    </head>
    <style>
        h1 {
            color: red;
        }
    </style>
    <body>
        <h1>
<?php
$reken = new Rekenmachine();
print($reken->getKwadraat(5));
?>
        </h1>
        <h1>
<?php
print($reken->getSom(34, 55));
?>
        </h1>
        <h1>
            <?php
            $reken = new Rekenmachine();
            print ($reken->getVermenig(25, 25));
                    ?>
        </h1>
    </body>
</html>