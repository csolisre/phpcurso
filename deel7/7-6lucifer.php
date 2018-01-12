<?php
 session_start();
 
 if (!isset($_SESSION["aantal"])|| isset($_GET["reset"])){
     $_SESSION["aantal"]=7;
 }else{
     if($_GET["jugada"]==1){
         $_SESSION["aantal"]=$_SESSION["aantal"]-1;
     } elseif ($_GET["jugada"]==2) {
         $_SESSION["aantal"]=$_SESSION["aantal"]-2;
     }
 }
 /* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */?>

<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="UTF-8">
    <title>Lucifers</title>
    </head>
    <body>
        <?php 
        for ($i=1;$i<=$_SESSION["aantal"];$i++){
            ?>
        <img src="../img/lucifer.png">
        <?php
        }
        ?>
        <form action="7-6lucifer.php" method="get">
            <button type="submit" name="jugada" value="1" <?php if ($_SESSION["aantal"]<=0){print "disabled";} ?>>Quitar 1</button>
             <button type="submit" name="jugada" value="2" <?php if ($_SESSION["aantal"]<=0){print "disabled";} ?>>Quitar 2</button>
        </form>
        <span>
            <?php
            if ($_SESSION["aantal"]<=0){
                print "Juego terminado";
            }
            ?>
        </span>
        <span>Reiniciar el juego <a href="7-6lucifer.php?reset=1">aqui</a></span>
    </body>
</html>

