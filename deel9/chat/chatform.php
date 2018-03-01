<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
session_start();
require_once 'chatlist.php';
$tab1 = new Chat();

if (isset($_GET["act"]) && $_GET["act"] == "reset") {
    session_destroy();
}

if (isset($_GET["action"]) && $_GET["action"] == "add") {
    if (!isset($_SESSION["user"])) {
        $_SESSION["user"] = rand(200, 800);
    }
    $image_name=$_FILES['image']['name'];
    $image_type= $_FILES['image']['type'];
    $image_size =$_FILES['image']['size'];
    $destino= $_SERVER['DOCUMENT_ROOT'].'/PHPrepaso/deel9/chat/img/';
    move_uploaded_file($_FILES['image']['tmp_name'], $destino.$image_name);
    $tab1->createBericht($_SESSION["user"], $_POST["boodschap"], $image_name);
}
$list = $tab1->getList();
?>

<!DOCTYPE HTML>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link  href="/phprepaso/css/bootstrap.css" rel="stylesheet">
        <script src="/phprepaso/js/bootstrap.min.js" ></script>
    </head>
    <body>
        <h1>Berichten</h1>
        <ul>
            <?php
            foreach ($list as $bericht) {
                print "<li>" .
                        $bericht->getNickName() .
                        ">        " .
                        $bericht->getBoodschap() .
                        ">        " ;
                if($bericht->getImage()){
                    print
                
                        '<img src="img/'.$bericht->getImage() .'">'.
                        "</li>";
                }
            }
            ?>
        </ul>
        <form action="chatform.php?action=add" method="post" enctype="multipart/form-data">

            <strong>Bericht</strong><br><textarea rows="5" cols="50" maxlength="200" name="boodschap" required="required"></textarea><br><br>
            
            <strong>Photo</strong><br><input type="file" name="image" size="20" ><br>
            <input type="submit">
        </form>
        <a href="chatform.php?act=reset">Reset user</a>
    </body>
</html>


