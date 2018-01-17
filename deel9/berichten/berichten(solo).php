<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Bericht {

    private $dbconect;
    private $dbuser;
    private $dbpwd;

    public function __construct() {
        $this->dbconect = "mysql:host=localhost;dbname=cursusphp";
        $this->dbuser = "cursusgebruiker";
        $this->dbpwd = "cursuspwd";
    }

    public function getList() {
        $sql = "select auteur, boodschap from gastenboek";
        $dbh = new PDO($this->dbconect, $this->dbuser, $this->dbpwd);
        $resultSet = $dbh->query($sql);
        $list = array();
        foreach ($resultSet as $rij) {
            $bericht = "<strong>Auteur </strong>" . $rij["auteur"] . "<br>" . $rij["boodschap"];
            array_push($list, $bericht);
        }
        $dbh = null;
        return $list;
    }
    public function createBericht($auteur, $boodschap){
        $sql= "insert into gastenboek (auteur, boodschap) values (:auteur, :boodschap)";
        $dbh = new PDO($this->dbconect, $this->dbuser, $this->dbpwd);
        $stmt = $dbh->prepare($sql);
        $stmt->execute(array(':auteur' => $auteur, ':boodschap' => $boodschap));
        $dbh = null;
        
    }

}
?>
<?php
if (isset($_GET["action"]) && $_GET["action"] == "add"){
    $new= new Bericht();
    $new->createBericht($_POST["auteur"], $_POST["boodschap"]);
}
?>

<!DOCTYPE HTML> 
<html>
    <head>
         <meta charset=utf-8>
    <title>Berichten</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link  href="/phprepaso/css/bootstrap.css" rel="stylesheet">
    <script src="/phprepaso/js/bootstrap.min.js" ></script>
    <style>
        ul.auteur{
            list-style: none;
        }
        li{
            border-bottom: 1px solid;
        }
    </style>
    </head>
    <body>
        <h1>Berichten</h1>
        <div class="container">
  <div class="row">
    <div class="col-sm">
        <ul class="auteur">
            <?php
            $pl= new Bericht();
            $lit= $pl->getList();
            
            foreach ($lit as $value){
                print "<li>" . 
                        $value .
                        "</li>";
            }
            ?>
        </ul> <br>
        <h1>Bericht toevoegen</h1>
        <form action="berichten.php?action=add" method="post">
            <strong>Auteur</strong><input type="text" name="auteur" required="required" maxlength="100"><br><br>
            <strong>Boodschap</strong><textarea rows="5" cols="50" maxlength="200" name="boodschap" required="required"></textarea><br><br>
            
            <input type="submit">
        </form>
    </div>
  </div>
        </div>
        
    </body>
</html>

