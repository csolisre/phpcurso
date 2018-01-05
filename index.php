<?php

class Rekenmachine{
    public function getKwaad($getal){
        $kaad= $getal *$getal;
        return $kaad;
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
    <meta charset=utf-8>
    <title>Mi pprimer php</title>
</head>


<body>
    <?php
    $x = new Rekenmachine();
    print ($x->getKwaad(8));
    ?>
</body>


</html>

