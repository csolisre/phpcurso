<?php

//geheim.php
class Geheim {

    public function getResultaat() {
        $val = 22;
        $val = 50;
        $val = $val * 2;
        return $val;
    }

}
?>
<!DOCTYPE HTML>
<html>
    <head>
        <meta charset=utf-8>
        <title>Geheim</title>
    </head>
    <body>
        <h1>
            <?php
            $getal1 = 20;
            $getal2 = 30;
            $tmp=$getal1;
            $getal1=$getal2;
            $getal2=$tmp;

            print("Getal 1: " . $getal1 . "<br>");
            print("Getal 2: " . $getal2);
            ?>
        </h1>
        qsdsdq
    </body>
</html>

