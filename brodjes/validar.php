<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require_once 'users.php';


if (isset($_GET['action']) && $_GET['action'] == "add") {
    
    $val=new User();
    $passwordValidated = $val->ValidatePassword($_POST["password"], $_POST["password1"]);
    if ($passwordValidated) {
        
    }
    
    $newuser= new User();
    $newuser->createUser($_POST['naam'], $_POST['email'], $_POST['password']);
    header("location: /PHPrepaso/brodjes/broodjes.php");
    
} else {
    $msg= "usuario ya registrado";
}
