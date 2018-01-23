<?php
session_start();
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

require_once "bestellinlist.php";

$tab = new Bestelling();
if (isset($_SESSION["user"])) {
    $usr = $_SESSION["user"];
    
}
?>
<!--Home menu-->
<nav class="navbar navbar-expand-md navbar-light bg-faded">
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand" href="index.php">BroodjesBar</a>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item ">
                <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link " href="overzicht.php">Menu</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href="bestellen.php">Orders</a>
            </li>
            <li class="nav-item">
                <a class="nav-link " href="userview.php">Users</a>
            </li>
        </ul>
        <?php if (isset($_SESSION["user"])) {
            print "Logged as " . $usr . "  ";

        } ?>
        <?php if (isset($_SESSION["user"])) {
            print '<a href="validar.php?action=logout">Log Out</a>';
        } ?>
    </div>
</nav>
<!--End home menu-->

<!DOCTYPE html>

<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <link href="/phprepaso/css/bootstrap.css" rel="stylesheet">
    <script src="/phprepaso/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
    <?php if (isset($_SESSION["user"])) { ?>
        <div class="row">
            <h1>Orders list <?php print $usr; ?></h1>
        </div>
        <ul class="list-group">
            <?php
            $list = $tab->getBestellenList();
            foreach ($list as $item) {
                ?>
                <li class="list-group-item"><?php print $item; ?></li>
                <?php
            }
            ?>
        </ul>
        <?php
        if (isset($_SESSION["user"])) {
            print '<a href="index.php?action=logout">Log Out</a>';
        }
        ?>
    <?php } else { ?>
        <div class="row">
            <h3> You are not administrator</h3>
            <a href="index.php" class="btn btn-primary btn-lg active">Log in</a>
        </div>
        <?php
    }
    ?>
</div>
</body>
</html>