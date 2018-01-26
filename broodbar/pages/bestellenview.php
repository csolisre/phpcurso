<?php
//userview.php
session_start();
require_once "../bestellenlist.php";
$tab = new Bestellist();
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
                $bestel= $tab->GetBestellenList2();
                foreach ($bestel as $value) {?>
                <li class="list-group-item"><?php print $value->getBestelId(); ?> datum <?php print $value->getDatum(); ?> <?php print $value->getKlantId(); ?> </li>
                <?php
                }
                ?>
            </ul>
            <?php
            if (isset($_SESSION["user"])) {
                print '<a href="../validate.php?action=logout">Log Out</a>';
            }
            ?> 
        </div>
    </body>
</html>