<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require_once 'berichtList.php';

$tab= new GastenBoek();
 
   
?>
<?php
if (isset($_GET["action"]) && $_GET["action"] == "add"){
    $tab->creteBericht($_POST["auteur"], $_POST["boodschap"]);
}
?>

<!DOCTYPE HTML>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link  href="/phprepaso/css/bootstrap.css" rel="stylesheet">
    <script src="/phprepaso/js/bootstrap.min.js" ></script>
    </head>
    <body>
        <h1>Berichten</h1>
        <ul>
            <?php
            $list=$tab->getList();
            foreach ($list as $bericht) {
                print "<li>".
                        $bericht->getAuteur().
                        "<br>".
                        $bericht->getBoodschap().
                        "</li>";
                
            }
            ?>
        </ul>
        <form action="berichtenviews.php?action=add" method="post">
            <strong>Auteur</strong><input type="text" name="auteur" required="required" maxlength="100"><br><br>
            <strong>Boodschap</strong><textarea rows="5" cols="50" maxlength="200" name="boodschap" required="required"></textarea><br><br>
            
            <input type="submit">
        </form>
    </body>
</html>
