<?php
// DEF : ensemble de donnees 
$ti=['john','doe',20,10000.5,['ali','rim']];// tableau indexe
// echo join(" ,  ",$ti[4]);
echo $ti[4][0].' '.$ti[4][1]."<hr>";
$enfants=$ti[4];//['ali','rim']
$enfants2=&$enfants;//['ali','rim']
echo $enfants[0]."<hr>";
$enfants[]='AYA';
// $enfants2=$enfants;
echo "enfants : ";
var_dump($enfants);
echo "<hr>enfant2 : ";
var_dump($enfants2);
echo "<hr>";
$a=3;
$b=&$a;

$a++;
$b=10;
echo "a= $a, b= $b";
echo "<hr>";
$e=&$ti[4];
$e[0]="HOFMANN";
echo $ti[4][0];
echo "<hr>";

$ti[5]=11;
$ti[15]=11;
$ti[]=99;//push
$ali=['nom'=>'Doe','prenom'=>'John','age'=>19,'prof','test'];//tableau associatif // key=>value
echo $ali['prenom'].' '.$ali['nom'].'<br><hr>';
$ali[]="Homme";
$ali['pays']="France";
$ali['prenom']='Ali';

var_dump($ali);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


    
</body>
</html>