<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class User{


    public function createUser($naam, $email, $pswd, $status) {
        $dbh= new PDO ("mysql:host=localhost;dbname=broodjesbar", "cursusgebruiker", "cursuspwd");
        $sql="insert into users (naam, email, password, status) values (:naam, :email, :password, :status)";
        $resultSet= $dbh->prepare($sql);
        $resultSet->execute(array(':naam' => $naam, ':email' => $email, ':password' => $pswd, ':status' => $status));
        $dbh= null;
    }
    public function getUserId() {
        return $this->id;
    }
    public function getUserNaam() {
        return $this->naam;
    }
    public function getUserEmail() {
        return $this->email;
    }
    public function getStatus(){
        return $this->status;
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
    public function ValidatePassword($paswd1, $paswd2) {
        if ($paswd1 == $paswd2){
            return TRUE;
        }else{
            return FALSE;
        }
    }
    public function userExist($email){
        $dbh= new PDO ("mysql:host=localhost;dbname=broodjesbar", "cursusgebruiker", "cursuspwd");
        $sql= "select email from users WHERE email  = :email";
        $stmt = $dbh->prepare($sql);
        $stmt->execute(array(':email' => $email));
        $rij = $stmt->fetch(PDO::FETCH_ASSOC);
        if ($rij >0){
            return TRUE;
        }else{
            return FALSE;
        }
    }
    public function userloggin($email, $pswd){
        $dbh= new PDO ("mysql:host=localhost;dbname=broodjesbar", "cursusgebruiker", "cursuspwd");
        $sql= "select id, naam, email, password from users WHERE email = :email and password = :password ";
        $stmt= $dbh->prepare($sql);
        $stmt->execute(array(':email' => $email, ':password' => $pswd));
        $rij = $stmt->fetch(PDO::FETCH_ASSOC);
        if ($rij >0){
            $user = $rij["naam"];
            return $user;
        }else{

        }

    }

    public function getUserList()
    {
        $sql = "SELECT id, naam, email, status FROM users";
        $dbh = new PDO ("mysql:host=localhost;dbname=broodjesbar", "cursusgebruiker", "cursuspwd");
        $resultSet = $dbh->query($sql);
        $list = array();
        foreach ($resultSet as $rij) {
            $user = "User  : " . $rij["naam"] . "<br>" .
                "email  : ".$rij["email"]. "<br>".
                "Status  : ".$rij["status"].
                '<a href="validar.php?action=edit&id="'.$rij["id"].'> Change status</a>';
            array_push($list, $user);
        }
        $dbh = null;
        return $list;
    }
    
}



