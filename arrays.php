<?php
//getallenarray.php
class GetalArrayGenerator {

    public function getArray() {
        $tab = array();
        $som=0;
        for ($i = 0; $i < 50; $i++) {
            
            $tab[$i] = $i+$som;
            $som=$som+$i;
            
        }
        return $tab;
    }
}
?>
<!DOCTYPE HTML>
<html>
    <head>
        <meta charset=utf-8>
        <title>Willekeurige getallen</title>
    </head>
    <body>
        <pre>
            <?php
            $arrGen = new GetalArrayGenerator();
            print_r($arrGen->getArray());
            ?>
        </pre>
    </body>
</html>

