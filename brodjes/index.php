<?php
session_start();



if (isset($_GET["msg"]) && $_GET["msg"] == "error") {
    $msg = '<div class="alert alert-warning" role="alert">' . 'Las contraseñas no coinciden' . '</div>';
}
if (isset($_GET["msg"]) && $_GET["msg"] == "exist") {
    $msg = '<div class="alert alert-warning" role="alert">' . 'Este Usuario ya existe' . '</div>';
}
if (isset($_GET["msg"]) && $_GET["msg"] == "logerror") {
    $msg = '<div class="alert alert-warning" role="alert">' . 'user or password error' . '</div>';
}
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <link href="/phpcurso/css/bootstrap.css" rel="stylesheet">
    <script src="/phpcurso/js/bootstrap.min.js"></script>
</head>
<body>

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
            <li class="nav-item active">
                <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="overzicht.php">Menu</a>
            </li>
            <li class="nav-item">
                <a class="nav-link " href="bestellen.php">Orders</a>
            </li>
            <li class="nav-item">
                <a class="nav-link " href="userview.php">Users</a>
            </li>
        </ul>
<?php if (isset($_SESSION["user"])) {
            print "Logged asss " . $_SESSION["user"] . "  ";

        } ?>
        <?php if (isset($_SESSION["user"])) {
            print '<a href="validar.php?action=logout">Log Out</a>';
        } ?>
    </div>
</nav>
<!--End home menu-->

<!--Main content-->
<div class="container">
    <div class="row">
        <h1>Welcome to my sandwich bar</h1>
    </div>
    <!--Tabs-->
    <?php if (!isset($_SESSION["user"])){
        ?>
    <nav>
        <div class="nav nav-tabs" id="nav-tab" role="tablist">
            <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab"
               aria-controls="nav-home" aria-selected="true">Register</a>
            <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab"
               aria-controls="nav-profile" aria-selected="false">Login</a>
        </div>
    </nav>
    <div class="tab-content" id="nav-tabContent">
        <!--Registration form-->
        <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
            <h3>Registrate para poder comprar</h3>
            <form action="validar.php?action=add" method="post">
                <div class="form-group">
                    Nombre <input type="text" name="naam" required="required"><br>
                </div>
                <div class="form-group">
                    Correo <input type="email" name="email" required="required"><br>
                </div>
                <div class="form-group">
                    Password <input type="password" name="password" required="required"><br>
                    Repite password <input type="password" name="password1" required="required"><br>
                    <?php print $msg; ?>
                </div>
                <input class="btn btn-primary" type="submit">
            </form>
        </div>

        <!--End Registration form-->
        <!--Logging form-->
        <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
            <h3>Ingresa a la pagina</h3>
            <form action="validar.php?action=login" method="post">

                <div class="form-group">
                    Correo <input type="email" name="email" required="required"><br>
                </div>
                <div class="form-group">
                    Password <input type="password" name="password" required="required"><br>
                    <?php print $msg; ?>
                </div>
                <input class="btn btn-primary" type="submit">
            </form>
        </div>
        <!--End Logging form-->
    </div>
    <?php }else{
        Print "<h1>You are logged in as ". " , " . $_SESSION["user"] . "</h1>";
    }
        ?>
    <!--end tabs-->
</div>
<!--End Main content-->
</body>
</html>
