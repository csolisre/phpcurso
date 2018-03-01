<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<!DOCTYPE HTML>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link  href="/phprepaso/css/bootstrap.css" rel="stylesheet">
        <script src="/phprepaso/js/bootstrap.min.js" ></script>
    </head>
    <body>
        <form action="subir.php" method="post" enctype="multipart/form-data">

            <strong>Bericht</strong><br><textarea rows="5" cols="50" maxlength="200" name="boodschap"></textarea><br><br>
            
            <strong>Photo</strong><br><input type="file" name="imagen" size="20"><br>
            <input type="submit">
        </form>
        </body>
</html>