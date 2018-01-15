<?php

//meetkunde.php
class Rekening{
    private $rekeningnummer;
    private static $interest=0.03;
    private $saldo=0;
    
    public function stort($bedrag) {
        $this->saldo=$bedrag;
    }
    public function getSaldo() {
        return $this->saldo . "pesos";
    }
    
    public function voerIntrestDoor() {
        return $this->saldo= $this->saldo *(1+self::$interest)  ;
        
    }
    
}
?>
<!DOCTYPE HTML>
<html>
    <head>
        <meta charset=utf-8>
        <title>Rekeningnummers</title>
    </head>
    <body>
        <h1>
            <?php
            $rek = new Rekening("091-0122401-16");
            print("Het saldo is: " . $rek->getSaldo() . "<br />");
            $rek->stort(200);
            print("Het saldo is: " . $rek->getSaldo() . "<br />");
            $rek->voerIntrestDoor();

            print("Het saldo is: " . $rek->getSaldo() . "<br />");
            ?>
        </h1>
    </body>
</html>