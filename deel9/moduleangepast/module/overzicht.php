<?php
//overzicht.php
require_once("moduleList.php");
?>
<!DOCTYPE HTML>
<html>
    <head>
        <meta charset=utf-8>
        <title>Modules</title>
    </head>
    <body>
        <h1>Modules</h1>
        <?php
        $modLijst = new ModuleLijst();

        $tab = $modLijst->getLijst();
        ?>
        <ul>
            <?php
            foreach ($tab as $module) {
                $moduleNaam = $module->getNaam();
                $moduleDescription = $module->getDescription();
                $moduleId = $module->getId();
                print("<li>" . $moduleNaam . $moduleDescription . "
(<a href=\"dbGegevensBewerken.php?id="
                        . $moduleId . "\">Bewerken</a>) </li>");
            }
            ?>
        </ul>
    </body>
</html>