<?php

//seizonen.php

 class seizonen{
                public function getSeizonzen(){
                    $seizonzen= array();
                    array_push($seizonzen, 'hefts');
                    array_push($seizonzen, 'somer');
                    array_push($seizonzen, 'winter');
                    return $seizonzen;
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
           $tab = new seizonen();
           print_r($tab->getSeizonzen());
            
            ?>

        </pre>
    </body>
</html>

