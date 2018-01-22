<?php
/**
 * Created by PhpStorm.
 * User: csolisre
 * Date: 22/01/18
 * Time: 14:49
 */
require_once "userlist.php";
$tab= new UserList();
?>

<!DOCTYPE HTML>
<html>
<head>

</head>
<body>

<ul>
    <?php
    $users=$tab->getUserList();
    foreach ($users as $value){
        print "<li>". $value->getUserNaam() . "</li>";
    }
    ?>
</ul>
</body>
</html>