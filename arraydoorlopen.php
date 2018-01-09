<?php

//arraysdoorlopen.php
class Kalender {
    public function getKalender() {
        $dagen = array();
        $dagen["January"] = 31;
        $dagen["Feb"] = 28;
        return $dagen;
    }
}
?>
<!DOCTYPE HTML>
<html>
    <head>
        <meta charset=utf-8>
        <title>Arrays</title>
    </head>
    <body>
        <ul>
            <?php
            $gg = new Kalender();
            $tabel = $gg->getKalender();
            foreach ($tabel as $key => $value) {
                print "<li>". $key. " "."bevqt ". $value."</li>";
            }
            ?>
        </ul>
    </body>
</html>
