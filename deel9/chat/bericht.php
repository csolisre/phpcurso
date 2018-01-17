<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Bericht{
    private $id;
    private $nickName;
    private $boodschap;
    
    
    public function __construct($id, $nickName, $boodschap) {
        $this->id=$id;
        $this->nickName=$nickName;
        $this->boodschap=$boodschap;
    }
    
    public function getNickName() {
        return $this->nickName;
    }
    
    public function getBoodschap() {
        return $this->boodschap;
    }
    
}