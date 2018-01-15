<?php
//cursistenEnMedewerkers.php
class Person{
    
    //velden vor alle personen klasen
    private $familienNaam;
    private $voorNaam;
    
    public function setFamilieNaam($naam) {
        $this->familienNaam=$naam;
    }
    public function setVoorNaam($voorNaam) {
        $this->voorNaam=$voorNaam;
    }
    public function getVollNaam() {
        return $this->familienNaam. ", " . $this->voorNaam;
    }
}

class Cursist extends Person{
    //velden voor cursist
    private $aantalCurssen; 
    
    public function __construct($familieNaam, $voorNaam, $aantalCurssen){
    parent::setFamilieNaam($familieNaam);
    parent::setVoorNaam($voorNaam);
    $this->aantalCurssen=$aantalCurssen;

    }
    public function getAantalcursen() {
        return $this->aantalCurssen;
    }
    public function setAantalCurssen($aantal) {
        $this->aantalCurssen=$aantal;
    }
    
    
}

class Medewerker extends person{
    //velden voor medewerker
    private $aanatlCursisten;
    
    public function __construct($familieNaam, $voorNaam, $aanatlCursisten){
    parent::setFamilieNaam($familieNaam);
    parent::setVoorNaam($voorNaam);
    $this->aanatlCursisten=$aanatlCursisten;

    }
    
    public function setAantalCursisten($aantal) {
        $this->aanatlCursisten=$aantal;
    }
    public function getAantalCursisten(){
        return $this->aanatlCursisten;
    }
}
?>


<?php
$cursist = new Cursist("Peeters", "Jan", 3);
$medewerker = new Medewerker("Janssens", "Tom", 8);
?>
<!DOCTYPE HTML>
<html>
    <head>
        <meta charset=utf-8>
        <title>Cursisten en medewerkers</title>
    </head>
    <body>
        <h1>Namen</h1>
        <ul>
            <li><?php print($cursist->getVollNaam() . " volgt " .
        $cursist->getAantalcursen() . " cursus(sen)");
?></li>
            <li><?php
                print($medewerker->getVollNaam() . " begeleidt " .
                $medewerker->getAantalCursisten() .
                "cursist(en)");?></li>
</ul>
</body>
</html>


