<?php
/**
 * Created by PhpStorm.
 * User: csolisre
 * Date: 19/01/18
 * Time: 11:40
 */
class BroordjesList{
    private $dbconect;
    private $dbuser;
    private $dbpswd;

    public function __construct(){
        $this->dbconect="mysql:host=localhost;dbname=broodjesbar";
        $this->dbuser= "cursusgebruiker";
        $this->dbpswd="cursuspwd";
    }
    public function getList(){
        $dbh = new PDO($this->dbconect, $this->dbuser, $this->dbpswd);
        $sql= "select Id, Naam, Omschrijving, Prijs from broodjes order by Naam";
        $resultSet = $dbh->query($sql);
        $list = array();
        foreach ($resultSet as $rij){
            $brood = '<h4>'.$rij["Naam"]. "</h4>".
                $rij["Omschrijving"]. "<br>".
                " Price $".$rij["Prijs"].
                '<a class="btn btn-primary btn-lg active" role="button" aria-pressed="true" href ="validar.php?order=add&Naam=' .$rij["Naam"]. ' ">'. 'Order'. '</a>';
            array_push($list, $brood);
        }
        $dbh=null;
        return $list;
    }
}