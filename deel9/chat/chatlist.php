<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require_once 'bericht.php';

class Chat{
    private $dbconect;
    private $dbuser;
    private $dbpwd;
    
    public function __construct() {
        $this->dbconect="mysql:host=localhost;dbname=cursusphp";
        $this->dbuser="cursusgebruiker";
        $this->dbpwd="cursuspwd";
    }
    
    public function getList() {
        $sql= "select id, nickname, boodschap from chatberichten order by datum desc limit 20";
        $dbh= new PDO($this->dbconect, $this->dbuser, $this->dbpwd);
        $resultSet = $dbh->query($sql);
        $list= array();
        foreach ($resultSet as $rij) {
            $bericht= new Bericht($rij["id"], $rij["nickname"], $rij["boodschap"]);
            array_push($list, $bericht);
        }
        $dbh=null;
        return $list;
    }
    public function createBericht($nickName, $boodschap) {
        $sql= "insert into chatberichten (nickname, boodschap, datum) values (:nickname, :boodschap, :datum)";
        $dbh = new PDO($this->dbconect, $this->dbuser, $this->dbpwd);
        $stmt = $dbh->prepare($sql);
        $datum = date("Y-m-d H:i:s");
        $stmt->execute(array(':nickname' => $nickName, ':boodschap' => $boodschap, ':datum' => $datum));
        $dbh=null;
    }
}
