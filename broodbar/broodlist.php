<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require_once 'database.php';
require_once 'broodjes.php';

class BroodList{
    
    public function getBroodjesList() {
        $dbh= new Database();
        $sql= "select ID, Naam, Omschrijving, Prijs from broodjes";
        $dbh->query($sql);
        $dbh->execute();
        $resultSet = $dbh->resultset();
        $list=array();
        foreach ($resultSet as $rij) {
            $brood= new Brood($rij["ID"], $rij["Naam"], $rij["Omschrijving"], $rij["Prijs"]);
            array_push($list, $brood);
        }
        $dbh=null;
        return $list;
    }
    
    public function getBroodById($ID) {
        $dbh= new Database();
        $sql="select ID, Naam, Omschrijving, Prijs from broodjes where ID = :ID";
        $dbh->query($sql);
        $dbh->bind(':ID', $ID);
        $dbh->execute();
        $resultSet=$dbh->resultset();
        $list=array();
        foreach ($resultSet as $rij) {
            $brood= new Brood($rij["ID"], $rij["Naam"], $rij["Omschrijving"], $rij["Prijs"]);
            array_push($list, $brood);
        }
        $dbh=null;
        return $list;
    }
    
}

