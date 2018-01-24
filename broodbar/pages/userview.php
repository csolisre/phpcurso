<?php
//userview.php
session_start();
require_once "../userlist.php";
$tab = new UserList();
?>
<!DOCTYPE html>

<html>
    <head>
        <?php include("../components/header.php"); ?>
    </head>
    <body>
        <!--Home menu-->
        <?php include("../components/menu.php"); ?>
        <!--End home menu-->
        <div class="spacer-top"></div>
        <div class="container">
            <div class="row">
                <h1>User List</h1>
                
            </div>
            <ul class="list-group list-group animated bounceInLeft">
                <?php               
                $users = $tab->getUserList();       
                foreach ($users as $value) {?>
                    <li class="list-group-item"> 
                        <strong> User : <?php print $value->getUserNaam(); ?></strong>
                        <strong> Email : </strong><?php print $value->getUserEmail(); ?><br>
                        <strong> Status : </strong><?php print $value->getUserStatus(); ?>
                    </li>
                        <?php } ?>
            </ul>
            <?php
            if (isset($_SESSION["user"])) {
                print '<a href="index.php?action=logout">Log Out</a>';
            }
            ?>
            
        </div>
    </body>
</html>
