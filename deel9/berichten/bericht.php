<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class Bericht{
    
    public function __construct($id, $auteur, $boodschap, $datum) {
        $this->id=$id;
        $this->auteur=$auteur;
        $this->boodschap=$boodschap;
        $this->datum=$datum;
    }
    public function getId(){
        return $this->id;
    }
    public function getAuteur(){
        return $this->auteur;
    }
    public function getBoodschap(){
        return $this->boodschap;
    }
    public function getDatum(){
        return $this->datum;
    }
}
