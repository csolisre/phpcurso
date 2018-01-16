<?php

//dbGegevensVerwijderen.php
class Module {

    private $id;
    private $naam;
    private $prijs;

    public function __construct($id, $naam, $prijs) {
        $this->id = $id;
        $this->naam = $naam;
        $this->prijs = $prijs;
    }

    public function getId() {
        return $this->id;
    }

    public function getNaam() {
        return $this->naam;
    }

    public function getPrijs() {
        return $this->prijs;
    }

}

class ModuleLijst {

    public function getLijst() {
        $sql = "select id, naam, prijs from modules order by naam";
        $dbh = new PDO("mysql:host=localhost;dbname=cursusphp;charset=utf8", "cursusgebruiker", "cursuspwd");
        $resultSet = $dbh->query($sql);
        $lijst = array();
        foreach ($resultSet as $rij) {
            $module = new Module($rij["id"], $rij["naam"], $rij["prijs"]);
            array_push($lijst, $module);
        }
        $dbh = null;
        return $lijst;
    }

    public function deleteModule($id) {
        $sql = "delete from modules where id = :id";
        $dbh = new PDO("mysql:host=localhost;dbname=cursusphp;charset=utf8", "cursusgebruiker", "cursuspwd");
        $stmt = $dbh->prepare($sql);
        $stmt->execute(array(':id' => $id));
        $dbh = null;
    }
    
    public function createModule($naam, $prijs) {
         $dbh = new PDO("mysql:host=localhost;dbname=cursusphp;charset=utf8", "cursusgebruiker", "cursuspwd");
         $sql = "insert into modules (naam, prijs) values (:naam, :prijs)";
         $stmt = $dbh->prepare($sql);
         $stmt->execute(array(':naam' => $naam, ':prijs' => $prijs));
         $dbh = null;
    }

}

$modLijst = new ModuleLijst();
if (isset($_GET["action"]) && $_GET["action"] == "verwijder") {
    $modLijst->deleteModule($_GET["id"]);
}
if (isset($_GET["action"]) && $_GET["action"] == "new") {
    $modLijst->createModule($_POST["naam"], $_POST["prijs"]);
}

?>
<!DOCTYPE HTML>
<html>
    <head>
        <meta charset=utf-8>
        <title>Modules</title>
    </head>
    <body>
        <h1>Modules</h1>
            <?php
            $tab = $modLijst->getLijst();
            ?>
        <ul>
<?php
foreach ($tab as $module) {
    $moduleNaam = $module->getNaam();
    $moduleId = $module->getId();
    print("<li>" . $moduleNaam . " <a href=\"9-3deleting.php? action=verwijder&id=" .$moduleId . "\"> <img src='../img/delete.png'> </a> </li>");
}
?>
        </ul>
        <form action="9-3deleting.php?action=new" method="post">
            Naam <input type="text" name="naam" required="required"><br>
            Prijs <input type="number" name="prijs" min="1" required="required"><br>
            <input type="submit">
        </form>
        
    </body>
</html>
