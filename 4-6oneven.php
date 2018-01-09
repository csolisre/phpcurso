<?php

//oneven.php

class Getallen{
    
    public function getGetallen(){
         $tab = array();
        for ($i = 1; $i <= 50; $i+=2) {
            array_push($tab, $i);
        }
        for ($i = 2; $i <= 50; $i+=2) {
            array_push($tab, $i);
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
