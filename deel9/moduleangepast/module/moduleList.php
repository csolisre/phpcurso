<?php

//ModuleLijst.php
require_once("module.php");

class ModuleLijst {

    private $dbConn;
    private $dbUsername;
    private $dbPassword;

    public function __construct() {
        $this->dbConn = "mysql:host=localhost;dbname=cursusphp;charset=utf8";
        $this->dbUsername = "cursusgebruiker";
        $this->dbPassword = "cursuspwd";
    }

    public function getLijst() {
        $sql = "select id, naam, prijs, description from modules order by naam";
        $dbh = new PDO($this->dbConn, $this->dbUsername, $this->dbPassword);
        $resultSet = $dbh->query($sql);
        $lijst = array();
        foreach ($resultSet as $rij) {
            $module = new Module($rij["id"], $rij["naam"], $rij["prijs"], $rij["description"]);
            array_push($lijst, $module);
        }
        $dbh = null;
        return $lijst;
    }

    public function getModuleById($id) {
        $sql = "select naam, prijs, description from modules where id = :id";
        $dbh = new PDO($this->dbConn, $this->dbUsername, $this->dbPassword);
        $stmt = $dbh->prepare($sql);
        $stmt->execute(array(':id' => $id));
        $rij = $stmt->fetch(PDO::FETCH_ASSOC);
        $module = new Module($id, $rij["naam"], $rij["prijs"], $rij["description"]);

        $dbh = null;
        return $module;
    }

    public function updateModule($module) {
        $sql = "update modules set naam = :naam, prijs = :prijs, description = :description where id = :id";
        $dbh = new PDO($this->dbConn, $this->dbUsername, $this->dbPassword);
        $stmt = $dbh->prepare($sql);
        $resultSet = $stmt->execute(array(
            ':naam' => $module->getNaam(),
            ':prijs' => $module->getPrijs(),
            ':description' => $module->getDescription(),
            ':id' => $module->getId()));
        $dbh = null;
    }

}
