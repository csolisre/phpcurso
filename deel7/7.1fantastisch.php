


<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Random</title>
    </head>
    <body>
        <?php
        $grotte = 10;
        for ($i = 1; $i <= 7; $i++) {
            ?>
            <div style="font-size: <?php print $grotte; ?>px">fdsdfsdf</div>

            <?php
            $grotte = $grotte + 10;
        }
        ?>
        <?php
        $grotte = 60;
        for ($i = 1; $i <= 6; $i++) {
            ?>
            <div style="font-size: <?php print $grotte; ?>px">fdsdfsdf</div>

            <?php
            $grotte = $grotte - 10;
        }
        ?>

    </body>

</html>