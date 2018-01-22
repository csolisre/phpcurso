<?php
/**
 * Created by PhpStorm.
 * User: csolisre
 * Date: 22/01/18
 * Time: 14:38
 */
require_once 'users.php';

class UserList{
    private $connect;
    private $user;
    private $pwd;

    public function __construct()
    {
        $this->connect = "mysql:host=localhost;dbname=broodjesbar";
        $this->user = "cursusgebruiker";
        $this->pwd= "cursuspwd";
    }

    public function getUserList(){
        $sql= "select id, naam, email, status from users";
        $dbh= new PDO($this->connect, $this->user, $this->pwd);
        $resultset =$dbh->query($sql);
        $list = array();
        foreach ($resultset as $rij){
            $user= new User($rij["id"], $rij["naam"], $rij["email"], $rij["status"]) ;
            array_push($list, $user);
        }
        $dbh=null;
        return $list;
    }
    public function CreateUser($naam, $email, $password, $status){
        $sql="insert into users (naam, email, password, status) values (:naam, :email, :password, :status)";
        $dbh= new PDO($this->connect, $this->user, $this->pwd);
        $stmt= $dbh->prepare($sql);
        $status="active";
        $stmt->execute(array(':naam' => $naam, ':email' => $email, ':password' => $password, ':status' => $status));
    }
}