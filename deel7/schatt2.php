<?php
/**
 * Created by PhpStorm.
 * User: csolisre
 * Date: 11/01/18
 * Time: 19:36
 */
session_start();
if (isset($_GET["reset"]) && ($_GET ["reset"]==1)){
    unset($_SESSION["puertas"]);
    unset($_SESSION["puertaCofre"]);
    unset($_SESSION["intentos"]);
}

if(!isset($_SESSION["puertas"])){
    $_SESSION["intentos"]=0;
    $_SESSION["puertas"]=array();
    for($i=1;$i<=7;$i++){
        $_SESSION["puertas"][$i]=0;
    }
    $_SESSION["puertaCofre"]=rand(1,7);
}
if (isset($_SESSION["intentos"])){
    $_SESSION["intentos"]++; //revisar

    $puertaSelecionada=$_GET["selecion"];
    if ($puertaSelecionada == $_SESSION["puertaCofre"]){
        $_SESSION["puertas"][$puertaSelecionada]=2;
        $msg="atinaste en ". $_SESSION["intentos"]."intentos";
    }else{
        $_SESSION["puertas"][$puertaSelecionada]=1;
    }
}
?>


