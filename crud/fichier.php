<?php 
$dossier ="uplaod/cours/";
$fichier_name=$dossier ."fichier1.txt";
// creer le dossier (s'il n'existe pas )
if(!is_dir($dossier)){
mkdir($dossier,0777,true);
}
if(!is_file($fichier_name)){
$f=fopen($fichier_name,'w');
for($i=0;$i<10000000;$i++){
fwrite($f,"lorem ipsum dolor set amet \n");
}
fclose($f);
}


$content=file($fichier_name);

// en mode lecture 
$f=fopen($fichier_name,'r');
while(!feof($f)){
// fread($f,1000)
$ligne =fgets($f);
echo nl2br($ligne);
}

?>
