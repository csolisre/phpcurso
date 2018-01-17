<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require_once 'bericht.php';

class GastenBoek{
    private $dbconect;
    private $dbuser;
    private $dbpwd;
    
    public function __construct() {
        $this->dbconect = "mysql:host=localhost;dbname=cursusphp";
        $this->dbuser = "cursusgebruiker";
        $this->dbpwd = "cursuspwd";
    }
    
    public function getList(){
        $sql= "select id, auteur, boodschap, datum from gastenboek order by datum desc";
        $dbh= new PDO($this->dbconect, $this->dbuser, $this->dbpwd);
        $resultSet = $dbh->query($sql);
        $list=array();
        foreach ($resultSet as $rij) {
            $bericht = new Bericht($rij["id"], $rij["auteur"], $rij["boodschap"], $rij["datum"]);
            array_push($list, $bericht);
        }
        $dbh = null;
        return $list;
    }
    
    public function creteBericht($auteur, $boodschap) {
        $sql= "insert into gastenboek (auteur, boodschap, datum) values (:auteur, :boodschap, :datum)";
        $dbh = new PDO($this->dbconect, $this->dbuser, $this->dbpwd);
        $stmt = $dbh->prepare($sql);
        $datum = date("Y-m-d H:i:s");
        $stmt->execute(array(':auteur' => $auteur, ':boodschap' => $boodschap, 'datum' => $datum));
        $dbh=null;
        
    }
}
