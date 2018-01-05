<?php

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
        <title>Geheim</title>
    </head>
    <body>
        <h1>
            <?php
            $mijgok=$_GET['mijgok'];
            $gok= rand(1, 10);
            print "tu dijiste ". $mijgok . "<br>";
            print "la computadore obtuvo" . $gok . "<br>";
            
            if ($mijgok == $gok) {
                print "Correct!!";
            }else{
                print "Fout!";
            }

            ?>
        </h1>
        qsdsdq
    </body>
</html>
