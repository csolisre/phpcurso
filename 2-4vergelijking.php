<?php

class Vergelijking{
    public function getSomIsPositief($getal1, $getal2, $getal3){
        $antw =(($getal1 + $getal2+$getal3)>0);{
            if ($antw == TRUE){
                return "JA";
            }else{
                return "Nee";
            }
    }
    }
}
?>


<!DOCTYPE HTML>
<html>
    <head>
        <title>vergelijking</title>
    </head>
    <body>
        <h1>Vergelijking</h1>
        
        <?php
        $resultaat = new Vergelijking();
        print ($resultaat->getSomIsPositief(10, -10, 2));
        ?>
    </body>
</html>
