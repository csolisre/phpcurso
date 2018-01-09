<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class GetalMaker{
    public function getGetallen() {
        $tab=array();
        for ($i=0; $i<=10; $i++){
            array_push($tab, rand(1, 100));
        }
        rsort($tab);
        return $tab;
    }
}

