<?php
// stappen.php
class Stappen{
    public function getGetallen($min,$max){
        for ($teller=$min; $teller<=$max; $teller++){
            if (($teller % 2) == 0){
                print $teller;
            }else{
                print "<br>";
            }
        }
    }
}
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<!DOCTYPE HTML>
<html>
    <head>
        <title> Stapen</title>
    </head>
    <body>
        <h1>Stappen</h1>
        
        <?php
        $x = new Stappen();
        print ($x->getGetallen(20, 50));
        ?>
    </body>
</html>

