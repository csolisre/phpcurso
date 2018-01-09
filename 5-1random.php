<?php
//random.php

session_start();
if (!isset($_SESSION["count"])){
    $_SESSION["count"]=0;
} else {
    $_SESSION["count"]++;
}
if (!isset($_SESSION["getal"]) || $_SESSION["count"]== 10){
    $_SESSION["count"]=0;
    $_SESSION["getal"]= rand(1, 100);
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
        print($_SESSION["getal"] . "<br>");
        print "aantal ". $_SESSION["count"];
        ?>
    </body>
</html>