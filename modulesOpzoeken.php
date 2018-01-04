<?php
//modulesOpzoeken.php
require_once 'ModuleLijst.php';
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Gegevens ophalens</title>
    </head>
    <body>
        <h1>Zoekresultaat</h1>

        <?php
        $pl = new ModuleList();
        $tab = $pl->getLijst();
            ?>
        <ul>
            <?php
                        foreach ($tab as $module) {
                            print ("<li>". $module ."</li>" );
                        }
            ?>
        </ul>
    </body>
</html>
