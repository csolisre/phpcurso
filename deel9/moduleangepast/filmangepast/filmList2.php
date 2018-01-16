<?php
require_once 'films2.php';
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class FilmList{
    private $dbconect;
    private $dbuser;
    private $dbpwd;
    
    public function __construct() {
        $this->dbconect= "mysql:host=localhost;dbname=cursusphp";
        $this->dbuser= "cursusgebruiker";
        $this->dbpwd= "cursuspwd";
    }
    
    public function getList() {
        $dbh = new PDO($this->dbconect, $this->dbuser, $this->dbpwd);
        $sql = "select id, titel, duurtijd from films order by titel ";
        $resultSet= $dbh->query($sql);
        $list = array();
        foreach ($resultSet as $rij) {
            $film = new Film($rij["id"], $rij["titel"], $rij["duurtijd"]);
            array_push($list, $film);
        }
        $dbh = null;
        return $list;
    }
    public function getFilmById($id) {
        $dbh = new PDO($this->dbconect, $this->dbuser, $this->dbpwd);
        $sql = "select titel, duurtijd from films where id = :id";
        $stmt = $dbh->prepare($sql);
        $stmt->execute(array(':id' => $id));
        $rij= $stmt->fetch(PDO::FETCH_ASSOC);
        $film= new Film($id, $rij["titel"], $rij["titel"]);
        
        $dbh = null;
        return $film;
    }
}

