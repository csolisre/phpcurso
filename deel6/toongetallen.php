<?php
require_once 'GetalMaker.php';
?>



<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Random</title>
    </head>
    <body>
        <table border="1">
        <?php
        $tab= new GetalMaker();
        $getallen=$tab->getGetallen();
        foreach ($getallen as $key => $value) {
            ?>
            <tr>
                <td>
                    <?php print $value; ?>
                </td>
            </tr><?php
        }
        ?>
        </table>
    </body>
</html>