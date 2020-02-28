<?php 
$prenom="john";
$nom="doe";
$sexe="femme";
$age=20;
$m=($age>=18)? "majeur":"mineur";
$color=($sexe=="homme") ? "deepskyblue":"pink";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tp 1 php</title>
</head>
<body style="background:<?=$color?>">
<h1>
Bienvenue  1 <?= $nom;?> <?= $prenom;?>

</h1>

    <h2>    Bienvenue  2<?php  echo "$nom $prenom" ;?><h2>
    <h2>    Bienvenue 3 <?php  echo '$nom $prenom' ;?><h2>
    <h2>    Bienvenue 4 <?php  echo $nom.' '. $prenom ;?><h2>
</body>
</html>