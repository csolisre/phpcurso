<?php
/**
 * Created by PhpStorm.
 * User: csolisre
 * Date: 10/01/18
 * Time: 17:41
 */
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Tafels</title>
</head>
<body>
<?php
$getal=$_POST["getal"];?>
<table border="1">
    <tr>
        <th colspan="2">Tafel van <?php print $getal; ?></th>
    </tr>
    <?php
    for ($i = 1; $i <= 10; $i++) {
        $resultaat=$getal * $i;
        ?>
        <tr>
        <td ><?php print $i. " maal ". $getal;?> </td >
        <td ><?php print $resultaat; ?></td >
        </tr >
    <?php
    }
    ?>

</table>







</body>


