<?php
//lotto.php
require_once 'GetallenKiezer.php';
?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Lotto</title>
</head>
<body>
<h1>De winnende lotto-getalle:</h1>
<table border="1">

<?php
$tab=new Getallen();
$reeks=$tab->getGetallen();

print_r($reeks);

for ($i=1;$i<=42;$i++){
    if (in_array($i,$reeks)){
        $background="red";
    }else{
        $background="#fff";
    }
    if ($i % 7 ==1){
        print "<tr>";
    }
    print("<td style='text-align: center; background-color: " . $background . "'>" . $i . "</td>");
    if ($i % 7 ==0){
        print "</tr>";
    }
}


?>
</table>
</body>
</html>


