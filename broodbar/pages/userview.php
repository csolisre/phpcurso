<?php
//userview.php
session_start();
require_once "../userlist.php";

if ($_POST["usr"]=="Change"){
    $connect= new UserList();
    $connect->updateUserStatus($_GET["id"], $_POST["status"]);
}

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
        <h1>User Listfff</h1>
    </div>
    <ul class="list-group list-group animated bounceInLeft">
        <?php
        $users = $tab->getUserList();
        foreach ($users as $value) { ?>
            <li class="list-group-item">
                <strong> User : <?php print $value->getUserNaam(); ?></strong>
                <strong> Email : </strong><?php print $value->getUserEmail(); ?><br>
                Status: <?php print $value->getUserStatus(); ?><br>
                <form action="userview.php?id=<?php print $value->getUserId(); ?>" method="post">
                    <select name="status">
                        <strong> Status : </strong> <option value="<?php print $value->getUserStatus(); ?>" selected><?php print $value->getUserStatus(); ?></option>
                        <strong> Status : </strong> <option value="<?php if($value->getUserStatus() == "active"){print "block";}else{ print "active";} ?>"><?php if($value->getUserStatus() == "active"){print "block";}else{print "active";} ?></option>
                         <input name="usr" type="submit" value="Change">
                    </select>             
                </form>
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
