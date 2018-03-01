<?php
//dbGegevensBewerken.php
require_once("module.php");
require_once("moduleList.php");
$updated = false;
if (isset($_GET["action"]) && $_GET["action"] == "verwerk") {
    $editor_data = $_POST['description'];
    $module = new Module($_GET["id"], $_POST["naam"], $_POST["prijs"], $editor_data);
    $modLijst = new ModuleLijst();
    $modLijst->updateModule($module);
    $updated = true;
}
?>
<!DOCTYPE HTML>
<html>
    <head>
        <meta charset=utf-8>
        <title>Modules</title>
        <script src="../../ckeditor/ckeditor.js"></script>
        <script src="../../ckeditor/ckfinder/ckfinder.js"></script>

    </head>
    <body>


        <h1>Module bewerken</h1>
        <?php
        if ($updated) {
            print("Record bijgewerkt!");
        }
        $modLijst = new ModuleLijst();
        $module = $modLijst->getModuleById($_GET["id"]);
        ?>
        <form action="dbGegevensBewerken.php?action=verwerk&id=
              <?php print($_GET["id"]); ?>" method="post">
            Naam: <input type="text" name="naam" value="
                         <?php print($module->getNaam()); ?>" /><br /><br />

            Prijs: <input type="text" name="prijs" value="
                          <?php print($module->getPrijs()); ?>" /> euro<br />

            <textarea class="ckeditor" name="description" id="editor1"> <?php print($module->getDescription()); ?></textarea>
<!--            Image: <input type="file" name="image">-->


            <input type="submit" value="Opslaanxx" />
        </form>
        <script>





                    CKEDITOR.replace( 'editor1', {
                        filebrowserBrowseUrl: 'http://localhost:8888/phpcurso/deel9/ckeditor/ckfinder/ckfinder.html',
                        filebrowserUploadUrl: 'http://localhost:8888/phpcurso/deel9/ckeditor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
                        filebrowserWindowWidth: '1000',
                        filebrowserWindowHeight: '700',
                       // extraPlugins: 'simplebox'
                    } );




        </script>
        <br />
        <a href="overzicht.php">Terug naar overzicht</a>
    </body>
</html>

