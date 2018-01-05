<?php

class Random {
    public function getRandom() {
        $resultaat = rand(10, 20);
        for ($teller=1; $teller <=$resultaat; $teller++){
            print $teller;
        }
    }
}
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>

<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="uft-8">
        <title>Random</title>
    </head>
    <body>
        <h1>Random </h1>
        
        <h5>
            <?php
            $x= new Random();
            print ($x->getRandom());
            ?>
        </h5>
        
        <h1>
            <?php
            print rand(10, 20);
            ?>
        </h1>
    </body>
</html>

