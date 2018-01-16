<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
 class Film{
     private $id;
     private $titel;
     private $duurtijd;
     
     public function __construct($id, $title, $duurtijd) {
         $this->id= $id;
         $this->titel=$title;
         $this->duurtijd=$duurtijd;
     }
     public function getId() {
         return $this->id;
     }
     public function getTitle() {
         return $this->titel;
     }
     public function getDuurtijd() {
         return $this->duurtijd;
     }
     
     public function setTitle($title) {
         $this->titel=$title;
     }
     
     public function setDuurtijd($duurtijd) {
         $this->duurtijd=$duurtijd;
     }
 }
