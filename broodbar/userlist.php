<?php

/**
 * Created by PhpStorm.
 * User: csolisre
 * Date: 22/01/18
 * Time: 14:38
 */
require_once 'database.php';
require_once 'users.php';

class UserList {

    public function getUserList() {
        $sql = "select id, naam, email, status from users";
        $dbh = new Database();
        $dbh->query($sql);
        $dbh->execute();
        $resultSet = $dbh->resultset();
        $list = array();
        foreach ($resultSet as $rij) {
            $user = new User($rij["id"], $rij["naam"], $rij["email"], $rij["status"]);
            array_push($list, $user);
        }
        $dbh = null;
        return $list;
    }
    public function validatePwd($pwd1, $pwd2) {
        if ($pwd1 == $pwd2) {
            return TRUE;
        }else{
            return FALSE;
        }
    }
    public function userExist($email) {
        $dbh=new Database();
        $sql="select email from users where email = :email";
        $dbh->query($sql);
        $dbh->bind(':email', $email);
        $dbh->execute();     
        if ($dbh->rowCount() > 0){
            return TRUE;
        }else{
            return FALSE;
        }
    }
    public function userLogin($email, $pwd){
        $dbh= new Database();
        $sql="select id, naam, email, password, status from users where email= :email";
        $dbh->query($sql);
        $dbh->bind(':email', $email);
        $dbh->execute();
        $user= $dbh->single();
        if ($user === FALSE){
            return FALSE;
        }else{
            $validpass= password_verify($pwd, $user['password']);         
            if ($validpass){
                return TRUE;
            }else{
                return FALSE;
            }              
        }       
    }

    public function CreateUser($naam, $email, $password, $status) {
        $dbh = new Database();
        $sql = "insert into users (naam, email, password, status) values (:naam, :email, :password, :status)";
        $dbh->query($sql);
        $dbh->bind(':naam', $naam);
        $dbh->bind(':email', $email);
        $dbh->bind(':password', $password);
        $dbh->bind(':status', $status);
        $dbh->execute();
        $dbh = null;
    }

}
