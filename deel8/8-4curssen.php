<?php
//cursistenEnMedewerkers.php
class person{
    
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

class Cursist extends person{
    //velden voor cursist
    private $aantalCurssen; 
    
    public function setAantalCurssen($aantal) {
        $this->aantalCurssen=$aantal;
    }
    public function getAantalcursen() {
        return $this->aantalCurssen;
    }
    
}

class Medewerker extends person{
    //velden voor medewerker
    private $aanatlCursisten;
    
    public function setAantalCursisten($aantal) {
        $this->aanatlCursisten=$aantal;
    }
}

$cursist = new Cursist();
$medewerker = new Medewerker();
$cursist->setAantalCurssen(5);
$cursist->setFamilienaam("Peeters");
$cursist->setVoornaam("Jan");
$medewerker->setFamilienaam("Janssens");
$medewerker->setVoornaam("Tom");
?>
<!DOCTYPE HTML>
<html>
    <head>
        <title>Cursisten en medewerkers</title>
    </head>
    <body>
        <h1>Namen</h1>
        <ul>
            <li><?php print($cursist->getVollNaam()); ?> ; cursen <?php print $cursist->getAantalcursen(); ?></li>
            <li><?php print($medewerker->getVollNaam()); ?></li>
        </ul>
    </body>
</html>
