<?php
/**

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
if (isset($_GET["selecion"])){
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

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Schattenjacht</title>
    <style>
        img { border-width: 0px;}
        .inactive {pointer-events: none;} /* EXTRA */
    </style>
</head>
<body>
    
<h1>Kies een deur</h1>

<?php
for ($i = 1; $i <= 7; $i++) {
    ?>
    <a href="schatt2.php?selecion=<?php print $i; ?>"
    <?php if (isset($msg)) { print 'class="inactive"'; } ?>>
           <?php 
           if ($_SESSION["puertas"][$i] == 0) { ?>
           <img src="../img/doorclosed.png"/>
               <?php 
               
           } elseif ($_SESSION["puertas"][$i] == 1) {
               ?>
            <img src="../img/dooropen.png"/>
            <?php 
            
           } elseif (($_SESSION["puertas"][$i] == 2)) {
            ?>
            <img src="../img/doortreasure.png"/>
            <?php
        }
        ?>
    </a>
    <?php
}
?>
<br />
<!--EXTRA-->
<p>
    <?php if (isset($msg)) {
        echo $msg;
    } ?>
</p>
<p>
    Klik <a href="schatt2.php?reset=1">hier</a> om een nieuw spel te beginnen.
</p>
</body>
</html>
