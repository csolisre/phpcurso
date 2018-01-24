<?php
session_start();
if (isset($_GET["action"]) && $_GET["action"]= 'logout'){
    session_destroy();
    header('location: pages/index.php');
}
//validate.php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require_once 'userlist.php';

//User registration process

if (isset($_POST["usr"]) && $_POST["usr"] == "Create account") {
    $username= trim($_POST["naam"]);
    $pass= trim($_POST["password"]);
    $pass1= trim($_POST["password1"]);
    $val= new UserList();
    $valPass=$val->validatePwd($pass, $pass1);
    if ($valPass) {
        $exist=$val->userExist($_POST["email"]);
        if ($exist) {
            header('location: pages/index.php?error=2');
        }else{
            $passHash= password_hash($pass, PASSWORD_BCRYPT, array("cost" => 12));
            $status='active';
            $val->CreateUser($username, $_POST["email"], $passHash, $status);
            header('location: pages/broodjesview.php');
            $userId= new Database();
            $usr=$userId->lastInsertId();
            $_SESSION["user"]=$_POST["naam"];
            $_SESSION["id"]=$usr;
        }      
    }else{
        header('location: pages/index.php?error=1');
    }
} 

//User Log in process

if (isset($_POST["login"])) {
    $email= trim($_POST["email"]);
    $pass= trim($_POST["password"]);
    $validate= new UserList();
    $test = $validate->userLogin($email, $pass);
    if ($test){
        header('location: pages/broodjesview.php');
        
    }else{
         header('location: pages/index.php?error=3');
        echo 'no';
        die();
    }
}