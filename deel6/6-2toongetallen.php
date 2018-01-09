<?php
require_once '6-2GetalMaker.php';
?>



<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Random</title>
    </head>
    <body>
        <table border="1">
            <tr>
                <?php
                $tab = new GetalMaker();
                $getallen = $tab->getGetallen();
                foreach ($getallen as $key => $value) {
                    ?>

                    <td>
                        <?php print $value; ?>
                    </td>
                    <?php
                }
                ?>
            </tr>
        </table>
    </body>
</html>