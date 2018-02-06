<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require_once 'database.php';
require_once 'bestellen.php';

class Bestellist{
    
    public function createbestel($userId, $broodId, $datum) {
        $dbh= new Database();
        $sql= "insert into bestellen (userId, broodId, datum) values (:userId, :broodId, :datum)";
        $dbh->query($sql);
        $dbh->bind('userId', $userId);
        $dbh->bind(':broodId', $broodId);
        $dbh->bind(':datum', $datum);
        $dbh->execute();
        $dbh=NULL;
    }
    public function GetBestellenList() {
        $dbh= new Database();
        $sql= "select Id, userId, broodId, datum from bestellen";
        $dbh->query($sql);
        $dbh->execute();
        $resultSet = $dbh->resultset();
        $list= array();
        foreach ($resultSet as $rij) {
            $bestel = new Bestel($rij["Id"], $rij["userId"], $rij["broodId"], $rij["datum"]);
            array_push($list, $bestel);
        }
         $dbh=null;
         return $list;
    }
     public function getBestellenList2()
    {
        $db = new Database();
        $sql = "select bestellen.Id, users.naam, broodjes.Naam, bestellen.datum from bestellen 
                inner join users on users.id = bestellen.userId 
                inner join broodjes on broodjes.ID = bestellen.broodId ";
        $db->query($sql);
        $resultSet = $db->resultset(); //execute gebeurt in functie resultset dus staat hier niet maar in Database.php
        $db = null;
        $list = array();
        foreach ($resultSet as $value) {
            $bestel = new Bestel($value["Id"], $value["naam"], $value["Naam"], $value["datum"]);
            array_push($list, $bestel);
        }
        return $list;
    }
}