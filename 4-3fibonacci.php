<?php
//getallenarray.php
class GetalArrayGenerator {

    public function getArray() {
        $tab=array();
        $oud=0;
        $new=1;
        $i=0;
        $tab[$i]=$oud;
        
        while ($new <= 30) {
            $i++;
            $tab[$i]=$new;
            $vorigoud=$oud;
            $oud=$new;
            $new=$vorigoud+$oud;
            
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
