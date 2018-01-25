<?php
//userview.php
session_start();
require_once "../broodlist.php";
$tab = new BroodList();
?>
<!DOCTYPE html>

<html>
    <head>
        <?php include("../components/header.php"); ?>
    </head>
    <body>
        <!--Home menu-->
        <div class="main-menu">
            <?php include("../components/menu.php"); ?>
        </div>
        <!--End home menu-->
        <div class="spacer-top"></div>
        <div class="container">

            <div class="row">
                <h1>Broodjes Menu</h1>
            </div>
            <ul class="list-group animated bounceInLeft">
                <?php
                $broodjes = $tab->getBroodjesList();
                foreach ($broodjes as $value) {
                    ?>
                    <li class="list-group-item"> 
                        <strong><?php print $value->getBroodNaam(); ?></strong><br>
                        <p><?php print $value->getBroodOmschrijving(); ?> <strong> Prijs : <?php print $value->getBroodPrijs(); ?></strong></p>                             
                    </li>
            <?php } ?>
            </ul>
            <?php
            if (isset($_SESSION["user"])) {
                print '<a href="../validate.php?action=logout">Log Out</a>';
            }
            ?> 
        </div>
    </body>
</html>

