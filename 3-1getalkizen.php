<?php
//getalkizen.php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<!DOCTYPE HTML>
<html>
    <head>
        <title>Getal Kizen</title>
    </head>
    <body>
        <?php
        $x = $_GET['getal1'];
        $y = $_GET['getal2'];
        $werk = $_GET['getal3'];
        switch ($werk) {
            case 1:
                $resultaat = $x + $y;
                break;
            case 2:
                $resultaat = $x - $y;
                break;
            case 3:
                $resultaat = $x * $y;
                break;

            default:
                $resultaat = $x / $y;
                break;
        }
        print "<h1>" . $resultaat . "</h1>";
        ?>
    </body>
</html>

