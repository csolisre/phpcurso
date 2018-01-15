<?php

//meetkunde.php
abstract class Rekening{
    private $rekeningnummer;
    private $saldo=0;
    
    public function stort($bedrag) {
        $this->saldo = $this->saldo + $bedrag;
    }
    public function getSaldo() {
        return $this->saldo;
    }
    
    public function setRekeningnummer($rekeningnummer) {
        $this->rekeningnummer = $rekeningnummer;
    }
    public abstract function voerIntrestDoor();
    
}
class Spaarrekening extends Rekening {

    private static $intrest = 0.03;

    public function __construct($rekeningnummer) {
        parent::setRekeningnummer($rekeningnummer);
    }

    public function voerIntrestDoor() {
        parent::stort(parent::getSaldo() * self::$intrest);
    }

}
class Zichtrekening extends Rekening {

    private static $intrest = 0.025;

    public function __construct($rekeningnummer) {
        parent::setRekeningnummer($rekeningnummer);
    }

    public function voerIntrestDoor() {
        parent::stort(parent::getSaldo() * self::$intrest);
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
            $zrek = new Zichtrekening("091-0122401-16");
            print("Het saldo is: " . $zrek->getSaldo() . "<br />");
            $zrek->stort(200);
            print("Het saldo is: " . $zrek->getSaldo() . "<br />");
            $zrek->voerIntrestDoor();
            print("Het saldo is: " . $zrek->getSaldo() . "<br />");
            ?>
        </h1>
    </body>
</html>