<?php
class Films{
public function getList(){
    $dbh = new PDO("mysql:host=localhost;dbname=cursusphp;charset=utf8", "cursusgebruiker", "cursuspwd");
    $resulSet = $dbh->query("select titel, duurtijd from fimls");
    
    $lijst = array();
        foreach ($resultSet as $rij) {
            $titel = $rij["titel"] . " (" . $rij["duurtijd"] ;
            array_push($lijst, $titel);
        }
        $dbh = null;
        return $lijst;
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
        <title>Modules</title>
    </head>
    <body>
        <h1>Films toevoegen</h1>
        <?php
        $pl = new Films();
        $Film = $pl->getList();
        ?>
        
        <form action="films.php" method="get">
            Titel: <input type="text" name="title"><br>
            Duurtijd: <input type="text" name="duurtijd">
            <input type="submit">
        </form>
    </body>
</html>

