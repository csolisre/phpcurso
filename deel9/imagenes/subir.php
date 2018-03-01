<?php
require_once 'database.php';
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$nombre = $_FILES['imagen']['name'];
$tipo = $_FILES['imagen']['type'];
$tamano = $_FILES['imagen']['size'];
$destino = $_SERVER['DOCUMENT_ROOT'].'/PHPrepaso/deel9/imagenes/img/';
move_uploaded_file($_FILES['imagen'] ['tmp_name'], $destino.$nombre);
$url=$destino.$nombre;

$db= new Database();
$sql='insert into chatberichten (image) values (:image)';
$db->query($sql);
$db->bind(':image', $url);
$db->execute();
$db =null;

