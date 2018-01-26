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
require_once 'bestellenlist.php';

//User registration process
if (isset($_POST["usr"]) && $_POST["usr"] == "Create account") {
    $create=new UserList();

    //Validate passwords
    $valid = $create->validatePwd(trim($_POST["password"]), trim($_POST["password1"]));
    if ($valid){
        //validate if user already exist
        $userExist= $create->userExist($_POST["email"]);
        if($userExist){
            header('location: pages/index.php?error=2');
        }else{
            //create account
            $status = "active";
            $user = $create->CreateUser(trim($_POST["naam"]), $_POST["email"], trim($_POST["password"]), $status);
            $_SESSION["id"]=$user; //function createUser returns userID from the -lastInsertId
            $_SESSION["user"]=trim($_POST["naam"]);
            $_SESSION["status"]=$status;
            header('location: pages/index.php');
        }

    }else{
        header('location: pages/index.php?error=1');
    }
}

//User Login process

if (isset($_POST["usr"]) && $_POST["usr"] == 'login'){
    $userlog= new UserList();
    //Verify if user exist
    $userExist= $userlog->userExist($_POST["email"]);
    if ($userExist){
        //If exist get the information to verify password
            $user=$userlog->getUserByEmail($_POST["email"]);
            if(password_verify($_POST["password"], $user["password"])){
                $_SESSION["id"]= $user["id"];
                $_SESSION["user"]= $user["naam"];
                $_SESSION["status"]= $user["status"];
                header('location: pages/index.php');
            }else{
                header('location: pages/index.php?error=4');
            }
    }else{
        header('location: pages/index.php?error=3');
    }

}
if(isset($_GET["bestel"])){
    $bestel= new bestellist();
    $datum =$datum = date("Y-m-d H:i:s");
    $bestel->createbestel($_SESSION["id"], $_GET["bestel"], $datum);
    header('location: pages/index.php');
}