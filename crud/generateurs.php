<?php 
// Une fonction générateur ressemble à une fonction normale, sauf qu'au lieu de retourner une valeur, un générateur yield retourne autant de valeurs que nécessaire. Toutes fonctions contenant yield est une fonction générateur.


function generer(){
yield "samir"; // return + pause (pour passer au suivant)
echo "M1";
yield "ali";
echo "M2";
yield "rita";
return "fin";
// echo "M3";

}

$r=generer();
foreach( $r as $c=>$v){
echo "$c => $v","<br>";
}


// lecture de data un fichier volumineux

function g_file($file_name){

$f=fopen($file_name,'r');
while(!feof($f)){
yield fgets($f);

}
fclose($f);

}
foreach(g_file("uplaod/cours/fichier1.txt") as $c=>$v){
echo "$c : $v <br>";
}



?>