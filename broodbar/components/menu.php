<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>

<nav class="navbar fixed-top navbar-expand-md navbar-light bg-light">
    <div class="container">
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
                    <a class="nav-link " href="broodjesview.php">Menu</a>
                </li>
                <?php if ($_SESSION["id"] == 1) { ?>
                    <li class="nav-item">
                        <a class="nav-link " href="bestellen.php">Orders</a>
                    </li>
                    <?php
                }
                ?>
                <?php if ($_SESSION["id"] == 1) { ?>
                    <li class="nav-item">
                        <a class="nav-link active" href="userview.php">Users</a>
                    </li>
                    <?php
                }
                ?>
            </ul>
            <?php if (isset($_SESSION["user"])) {
                print '<a href="../validate.php?action=logout">Log Out</a>';
            } ?>
        </div>
    </div>
</nav>
