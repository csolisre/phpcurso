<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class User{
   

    
    public function getUserId() {
        return $this->id;
    }
    public function getUserNaam() {
        return $this->naam;
    }
    public function getUserEmail() {
        return $this->email;
    }
    public function setUserNaam($naam) {
        $this->naam=$naam;
    }
    public function setUserEmail($email) {
        $this->email=$email;
    }
    public function setUserPswd($pswd) {
        $this->pswd=$pswd;
    }
    public function createUser($naam, $email, $pswd) {
        $dbh= new PDO ("mysql:host=localhost;dbname=broodjesbar", "cursusgebruiker", "cursuspwd");
        $sql="insert into users (naam, email, password) values (:naam, :email, :password)";
        $resultSet= $dbh->prepare($sql);
        $resultSet->execute(array(':naam' => $naam, ':email' => $email, ':password' => $pswd));
        $dbh= null;
    }
    
    public function ValidatePassword($paswd1, $paswd2) {
        if ($paswd1 == $paswd2){
            return TRUE;
        }else{
            return FALSE;
        }
    }
    
}


