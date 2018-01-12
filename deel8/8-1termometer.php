<?php
class Termometer{
    
    private $temperatuur;
    
    public function getTemperatuur() {
        return $this->temperatuur;
    }
    public function setTemperatuur($temp) {
        $this->temperatuur=$temp;
    }
    public function verhoog($aantalGraden) {
        $this->temperatuur= $this->temperatuur+$aantalGraden;
    }
     public function verlaag($aantalGraden) {
        $this->temperatuur= $this->temperatuur-$aantalGraden;
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
        <meta charset=utf-8>
        <title>Klassen in de praktijk</title>
    </head>
    <body>
        <?php
        $temp= new Termometer();
        $temp->setTemperatuur(45);
        $temp->verhoog(10);
        $temp->verlaag(15);
        print $temp->getTemperatuur();
        
        ?>

    </body>
</html> 