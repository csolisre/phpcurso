<?php
/**
 * Created by PhpStorm.
 * User: csolisre
 * Date: 11/01/18
 * Time: 12:57
 */
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Tafels van 10</title>
</head>
<body>

<table border="1">
    <tr>
        <td><?php print "  " ;?></td>
        <?php
        for ($i=1; $i<=10; $i++){
            print "<td>". $i . "</td>";
        }
        ?>
    </tr>
    <?php
    for ($i=1; $i<=10; $i++){
        ?>
    <tr>
        <td><?php print $i; ?></td>
        <?php
        for ($a=1; $a<=10;$a++){
            ?>
            <td><?php print $i*$a; ?></td>
        <?php
        }
        ?>

    </tr>

    <?php
    }

    ?>

</table>







</body>

</html>
