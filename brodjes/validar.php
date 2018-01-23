<?php
session_start();
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require_once 'users.php';
require_once 'bestellinlist.php';

if (isset($_GET['action']) && $_GET['action'] == "add") {

    $val = new User();
    $passwordValidated =$val->ValidatePassword($_POST["password"], $_POST["password1"]);
    if ($passwordValidated) {
        $exist=$val->userExist($_POST["email"]);
        if($exist == true){
            header("location: /phprepaso/brodjes/index.php?msg=exist");
        }else{
            $status='active';
            $val->createUser($_POST['naam'], $_POST['email'], $_POST['password'], $status);
            $_SESSION["user"]=$_POST['naam'];

            setcookie("email", $_POST["naam"], time() + 120);

            header("location: /phprepaso/brodjes/overzicht.php");
        }
    } else {
        header("location: /phprepaso/brodjes/index.php?msg=error");
    }
}

if (isset($_GET['action']) && $_GET['action'] == "login") {

    $val = new User();
    $userValidated = $val->userloggin($_POST["email"], $_POST["password"]);
    if ($userValidated == true){
        $_SESSION["user"]= $userValidated;

        header("location: /phprepaso/brodjes/overzicht.php");
    } else {
        header("location: /phprepaso/brodjes/index.php?msg=logerror");
    }


}
if (isset($_GET["action"]) && $_GET["action"] == "logout") {
    session_destroy();
    header("location: /phprepaso/brodjes/index.php");
}

if (isset($_GET["order"]) && $_GET["order"] == "add"){
    $bestel= new Bestelling();
    $bestel->createBestelling($_SESSION["user"], $_GET["Naam"]);
    header("location: /phprepaso/brodjes/overzicht.php?msg=thk");
}