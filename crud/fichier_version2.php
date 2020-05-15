<?php 
$fichier="fct.txt";
//file_put_contents($fichier,"lorem lorem ipsum dolor set amet 2 \n");
$c=file_get_contents($fichier);
echo $c;


// closure (lamda ou fonction anomnyme) => c'est une fonction sans nom
// qui ne  va servir que localement et de callback (appel)



?>