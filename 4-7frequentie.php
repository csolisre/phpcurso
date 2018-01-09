<?php

//frequentie.php
class Getallen{
    public function getFrequentie() {
        $tab=array();
        for($i=0; $i<=40; $i++){
            $tab[$i]=0;
        }
        for($i=0; $i<100; $i++){
            $getal= rand(1, 40);
            $tab[$getal]++;
        }
        return $tab;
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
           $freq= new Getallen();
           $tab= $freq->getFrequentie();
           for ($i=1; $i<=40; $i++){
               print "nuero ". $i . "esta ". $tab[$i]." veces". "<br>";
           }
           
            ?>
        </ul>
    </body>
</html>