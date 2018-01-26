<?php
//index.php
session_start();


if (isset($_GET["error"])){
    switch ($_GET["error"]) {
        case $_GET["error"]== 1:
            $msg="The password are not the same try again";
            break;
        case $_GET["error"]== 2:
            $msg="User already exist";
            break;
        case $_GET["error"]== 3:
            $msg="User not recognized verify your email address";
            break;
        case $_GET["error"]== 4:
            $msg="Password error please check your password";
            break;
        default:
            $msg="";
            break;
    }
}
?>
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
<!--Front slider-->
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner" role="listbox">
        <!-- Slide One - Set the background image for this slide in the line below -->
        <div class="carousel-item active" style="background-image: url('../../img/bread-923865_1920.jpg')">
            <div class="carousel-caption d-none d-md-block">
                <h3>.</h3>
                <p><?php
            if (isset($_SESSION["user"])) {
                print $_SESSION["user"];

            }
            ?> 
                 </p>
            </div>
        </div>
        <!-- Slide Two - Set the background image for this slide in the line below -->
        <div class="carousel-item" style="background-image: url('../../img/bread-2436370_1920.jpg')">
            <div class="carousel-caption d-none d-md-block">
                <h3>.</h3>
                <p>T.</p>
            </div>
        </div>
        <!-- Slide Three - Set the background image for this slide in the line below -->
        <div class="carousel-item" style="background-image: url('../../img/pink-wine-1433496_1920.jpg')">
            <div class="carousel-caption d-none d-md-block">
                <h3>.</h3>
                <p>.</p>
            </div>
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
<!--End Front slider-->
<!--Tabs-->
<?php if (!isset($_SESSION["user"])) {
?>
<div class="container">
    <div class="row <!--justify-content-md-center-->">
        <div class="col-sm-4">
            <div class="user-form animated fadeInDownBig">


                <h1>Welkom panaderia Leuven</h1>


                <nav>
                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                        <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home"
                           role="tab"
                           aria-controls="nav-home" aria-selected="true">Register</a>
                        <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile"
                           role="tab"
                           aria-controls="nav-profile" aria-selected="false">Login</a>
                    </div>
                </nav>
                <div class="tab-content" id="nav-tabContent">
                        <!--Registration form-->
                        <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                            <h3>Registrate para poder comprar</h3>
                            <form action="../validate.php" method="post">
                                <div class="form-group">
                                    Nombre <input type="text" name="naam" required="required"><br>
                                </div>
                                <div class="form-group">
                                    Correo <input type="email" name="email" required="required"><br>
                                </div>
                                <div class="form-group">
                                    Password <input type="password" name="password" required="required"><br>
                                    Repite password <input type="password" name="password1" required="required"><br>
                                </div>
                                <input name="usr" class="btn btn-primary" type="submit" value="Create account">
                               <?php if (isset($_GET["error"])){?>
                                   <div class="alert alert-warning">
                                    <strong>Warning!</strong> <?php print $msg; ?>
                                </div> 
                                <?php
                               }
                                ?>
                            </form>
                        </div>

                    <!--End Registration form-->
                    <!--Logging form-->
                    <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                        <h3>Ingresa a la pagina</h3>
                        <form action="../validate.php" method="post">

                            <div class="form-group">
                                Correo <input type="email" name="email" required="required"><br>
                            </div>
                            <div class="form-group">
                                Password <input type="password" name="password" required="required"><br>

                            </div>
                            <input name="usr" class="btn btn-primary" type="submit" value="login">
                        </form>
                    </div>
                    <!--End Logging form-->
                </div>

                <?php
                } else {?>
                    <div class="container">
    <div class="row <!--justify-content-md-center-->">
        <div class="col-sm-4">
            <div class="user-form animated fadeInDownBig">
                <h1>Welkom panaderia Leuven</h1>
                <h4>You are logged as : <?php print $_SESSION["user"] .$_SESSION["id"].$_SESSION["status"];?></h4>
            </div>
        </div>
    </div>
                <?php
                }
                ?>
                <!--end tabs-->
            </div>
        </div>
    </div>
</div>
</body>
</html>
