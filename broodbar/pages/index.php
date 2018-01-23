<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>
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
                <h1>Welkom panaderia Leuven</h1>
            </div>
            
            <div class="carousel-item">
  <img src="..." alt="...">
  <div class="carousel-caption d-none d-md-block">
    <h5>...</h5>
    <p>...</p>
  </div>
</div>
            <!--Tabs-->
            <?php if (!isset($_SESSION["user"])) {
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
                                
                            </div>
                            <input class="btn btn-primary" type="submit">
                        </form>
                    </div>
                    <!--End Logging form-->
                </div>
            <?php
            } else {
                Print "<h1>You are logged in as " . " , " . $_SESSION["user"] . "</h1>";
            }
            ?>
            <!--end tabs-->
        </div>
    </body>
</html>
