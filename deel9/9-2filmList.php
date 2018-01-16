<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class Films{
    public function getLijst() {
        $dbh = new PDO("mysql:host=localhost;dbname=cursusphp", "cursusgebruiker", "cursuspwd");
        $sql = "select titel, duurtijd from films";
        $resultSet = $dbh->query($sql);
        $list =array();
        foreach ($resultSet as $value) {
            $film = $value["titel"] . "( ". $value["duurtijd"]. " )";
            array_push($list, $film);
        }
        $dbh =null;
        return $list;
    }
    public function createFilm($titel, $duurtijd) {
        $dbh = new PDO("mysql:host=localhost;dbname=cursusphp", "cursusgebruiker", "cursuspwd");
        $sql= "insert into films (titel, duurtijd) values (:titel, :duurtijd)";
        $stmt= $dbh->prepare($sql);
        $stmt->execute(array(':titel' => $titel, ':duurtijd' => $duurtijd));
        $dbh = null;
    }
}

