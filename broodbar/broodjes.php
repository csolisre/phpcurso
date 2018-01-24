<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Brood{
    private $ID;
    private $Naam;
    private $Omschrijving;
    private $Prijs;
    
    public function __construct($ID, $Naam, $Omschrijving, $Prijs) {
        $this->ID=$ID;
        $this->Naam=$Naam;
        $this->Omschrijving=$Omschrijving;
        $this->Prijs=$Prijs;
    }
    function getBroodID() {
        return $this->ID;
    }

    function getBroodNaam() {
        return $this->Naam;
    }

    function getBroodOmschrijving() {
        return $this->Omschrijving;
    }

    function getBroodPrijs() {
        return $this->Prijs;
    }
        
    
}
