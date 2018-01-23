<?php
//validate.php
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require_once 'userlist.php';

if (isset($_POST["usr"]) && $_POST["usr"]=="Create account") {
    $user=new UserList();
    $status="active";
    $user->CreateUser($_POST["naam"], $_POST["email"], $_POST["password"], $status);
    
} 
    
