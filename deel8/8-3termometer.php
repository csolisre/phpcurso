<?php
class Termometer{
    
    private $temperatuur;
    
    public function __construct($temp) {
        if (($temp <= -50) ||($temp >= 100)){
           $this->temperatuur=0;
            print "no valido";
        }else{
        $this->temperatuur=$temp;
        }
    }

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
        $temp= new Termometer(-55);
    
        print "<h1>".$temp->getTemperatuur() . "</h1>";
        
        ?>

    </body>
    
</html> 
//<?php
//
////thermomether.php del coach!
//
//class Thermometer {
//
//    private $temperatuur;
//    
//    function __construct($temperatuur) {
//        $this->temperatuur = $temperatuur;
//    }
//
//    public function verhoog($aantalGraden) {
//        if( ($this->temperatuur + $aantalGraden) <= 100){
//            $this->temperatuur += $aantalGraden;
//        }
//    }
//
//    public function verlaag($aantalGraden) {
//        if( ($this->temperatuur - $aantalGraden) >= -50){
//            $this->temperatuur -= $aantalGraden;
//        }
//    }
//
//    public function getTemperatuur() {
//        return $this->temperatuur;
//    }
//
//}
//?>


<!--<!DOCTYPE html>-->
<!--<html>
    <head>
        <meta charset="UTF-8">
        <title>Thermometer</title>
    </head>
    <body>
        <h1>-->
            //<?php
//            $therm = new Thermometer(25);
//            print($therm->getTemperatuur() . "<br />");
//            $therm->verhoog(20);
//            print($therm->getTemperatuur() . "<br />");
//            $therm->verhoog(55);
//            print($therm->getTemperatuur() . "<br />");
//            $therm->verhoog(10);
//            print($therm->getTemperatuur() . "<br />");
//            $therm->verlaag(50);
//            print($therm->getTemperatuur() . "<br />");
//            $therm->verlaag(100);
//            print($therm->getTemperatuur() . "<br />");
//            $therm->verlaag(10);
//            print($therm->getTemperatuur() . "<br />");
//            ?>
<!--        </h1>
    </body>
</html>-->
