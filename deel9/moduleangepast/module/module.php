<?php

//Module.php
class Module {

    private $id;
    private $naam;
    private $prijs;
    private $description;

    public function __construct($id, $naam, $prijs, $description) {
        $this->id = $id;
        $this->naam = $naam;
        $this->prijs = $prijs;
        $this->description = $description;
    }

    public function getId() {
        return $this->id;
    }

    public function getNaam() {
        return $this->naam;
    }

    public function getPrijs() {
    return $this->prijs;

}

    public function getDescription() {
        return $this->description;
    }

public function setNaam($naam) {
    $this->naam = $naam;
}

public function setPrijs($prijs) {
    $this->prijs = $prijs;
}

}
