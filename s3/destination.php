<?php 
//  $_POST , $_GET : variables globales / implicites 

echo $_POST['qte'];
die("");
if(!isset($_POST['prix']) ){
header("location:passage_donnees.php?c=p");
exit();
}
if(!isset($_POST['qte']) ){
header("location:passage_donnees.php?c=q");
exit();
}


//true   : 
//false (ou empty) : null, "", '',"0", [],0,0.0

$prix=$_POST['prix'];
$qte=$_POST['qte'];
if(!is_numeric($prix) || !is_numeric($qte)){
   // header("location:passage_donnees.php?c=n");
exit();
}
$ttc=$prix*$qte;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h4>Le ttc est : <?=$ttc?>DHS</h4>
</body>
</html>