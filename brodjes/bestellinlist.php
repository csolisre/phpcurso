<?php
/**
 * Created by PhpStorm.
 * User: csolisre
 * Date: 22/01/18
 * Time: 16:41
 */
class Bestelling{
    private $dbconect;
    private $dbuser;
    private $dbpswd;

    public function __construct(){
        $this->dbconect="mysql:host=localhost;dbname=broodjesbar";
        $this->dbuser= "cursusgebruiker";
        $this->dbpswd="cursuspwd";
    }

    public function getBestellenList(){
        $sql="select id, user, brood, datum from bestellen";
        $dbh= new PDO("$this->dbconect", "$this->dbuser", "$this->dbpswd");
        $resultSet=$dbh->query($sql);
        $list=array();
        foreach ($resultSet as $rij){
            $bestel= "<strong>User:  </strong>".$rij["user"]. " , ".
                "<strong>Brood:   </strong>".$rij["brood"].
                "<strong>Date:   </strong>" .  date("m/d/y g:i A", $rij["datum"]);
            array_push($list, $bestel);
        }
        $dbh=null;
        return $list;
    }
    public function createBestelling($user, $brood, $datum){
        $sql="insert into bestellen (user, brood, datum) values (:user, :brood, :datum) ";
        $dbh=new PDO("$this->dbconect", "$this->dbuser", "$this->dbpswd");
        $resultSet=$dbh->prepare($sql);
        $datum=date("Y-m-d H:i:s");
        $resultSet->execute(array(':user' => $user, ':brood' =>$brood, ':datum' => $datum));
        $dbh=null;
    }
}