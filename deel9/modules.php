<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class ModuleLijst{
    public function getLijst() {
//        $dbh = new PDO("mysql:host=localhost;dbname=cursusphp;charset=utf8", "cursusgebruiker", "cursuspwd");
      $dbh = new PDO("mysql:host=localhost;dbname=cursusphp;charset=utf8", "cursusgebruiker", "cursuspwd");
//        
        $sql = "select naam, prijs from modules where prijs >= :minprijs and prijs <= :maxprijs order by prijs";
//      $sql = "select naam, prijs from modules where prijs >= :minprijs and prijs <= :maxprijs order by prijs";
    
        $stmt = $dbh->prepare($sql);
//      $stmt = $dbh->prepare($sql);
        
        
        $stmt->execute(array(':minprijs' => $_POST["minprijs"], ':maxprijs' => $_POST["maxprijs"]));
//      $stmt->execute(array(':minprijs' => $_GET["minprijs"], ':maxprijs' => $_GET["maxprijs"]));
       
        $resultSet = $stmt->fetchAll(PDO::FETCH_ASSOC);
//      $resultSet = $stmt->fetchAll(PDO::FETCH_ASSOC);
        
        $lijst = array();
//      $lijst = array();
        foreach ($resultSet as $rij){
//      foreach ($resultSet as $rij) {
            $module = $rij["naam"] . " (" . $rij["prijs"] . " euro)";
//          $module = $rij["naam"] . " (" . $rij["prijs"] . " euro)";
            
            array_push($lijst, $module);
//          array_push($lijst, $module);
        }
        $dbh = null;
        return $lijst;
    }
    
}
?>




<!DOCTYPE HTML>
<html>
    <head>
        <meta charset=utf-8>
        <title>Databanken introductie</title>
    </head>

    <body>
       
      <?php
        $pl = new ModuleLijst();
        $tab = $pl->getLijst();
        ?>
        <ul>
            <?php
            foreach ($tab as $module) {
                print("<li>" . $module . "</li>");
            }
            ?>
        </ul>
        dqsdqs
    </body>
</html>