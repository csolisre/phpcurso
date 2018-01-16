<?php
//ModuleLijst.php
require_once("films2.php");
class FilmLijst {
    private $dbConn;
    private $dbUsername;
    private $dbPassword;
    public function __construct() {
        $this->dbConn = "mysql:host=localhost;dbname=cursusphp;charset=utf8";
        $this->dbUsername = "cursusgebruiker";
        $this->dbPassword = "cursuspwd";
    }
    public function getLijst() {
        $sql = "select id, titel, duurtijd from films order by titel";
        $dbh = new PDO($this->dbConn, $this->dbUsername, $this->dbPassword);
        $resultSet = $dbh->query($sql);
        $lijst = array();
        foreach ($resultSet as $rij) {
            $module = new Film ($rij["id"], $rij["titel"], $rij["duurtijd"]);
            array_push($lijst, $module);
        }
        $dbh = null;
        return $lijst;
    }
    public function getFilmById($id) {
        $sql = "select titel, duurtijd from films where id = :id";
        $dbh = new PDO($this->dbConn, $this->dbUsername, $this->dbPassword);
        $stmt = $dbh->prepare($sql);
        $stmt->execute(array(':id' => $id));
        $rij = $stmt->fetch(PDO::FETCH_ASSOC);
        $film = new Film ($id, $rij["titel"], $rij["duurtijd"]);

$dbh = null;
return $film;
}
    public function updateFilm($film) {
        $sql = "update films set titel = :titel, duurtijd = :duurtijd where id = :id";
        $dbh = new PDO($this->dbConn, $this->dbUsername, $this->dbPassword);
        $stmt = $dbh->prepare($sql);
        $resultSet = $stmt->execute(array(
            ':titel' => $film->getTitel(),
            ':duurtijd' => $film->getDuurtijd(),
            ':id' => $film->getId()));
        $dbh = null;
    }
}