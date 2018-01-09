<?php

//tachich.php

class Getallen{
    
    public function getGetallen(){
        $tab= array();
        $rand = rand(1, 100);
        array_push($tab, $rand);
        while ($rand <80){
            
            $rand= rand(1, 100);
            array_push($tab, $rand);
        }
        
        return $tab;
    }
}
  

?>
<!DOCTYPE HTML>
<html>
    <head>
        <meta charset=utf-8>
        <title>Seizonen</title>
    </head>
    <body>
        <pre>
           <?php
           $list= new Getallen();
           print_r($list->getGetallen());
           ?>

        </pre>
    </body>
</html>
<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

