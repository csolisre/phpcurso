<?php
//random.php

session_start();
if (!isset($_SESSION["count"]) || $_SESSION["count"] >= 20){
    $_SESSION["count"]=0;
} else {
    $_SESSION["count"]++;
}


?>


<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Random</title>
    </head>
    <body>
        <?php
        print "aantal ". $_SESSION["count"];
        ?>
    </body>
</html>