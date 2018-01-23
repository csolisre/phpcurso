<?php
//userview.php

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
        <div class="container">

            <div class="row">
                <h1>User List</h1>
            </div>
            <ul class="list-group">
                <?php
                
                $users = $tab->getUserList();       
                foreach ($users as $value) {?>
                    <li class="list-group-item"> <?php print $value->getUserNaam(); ?></li>
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
