<?php 
include("modele.php");
// $a=$_GET['noma'];
// $id=$_GET['id'];
extract($_GET);//$a (action : store , delete ,...) , $id,....
extract($_POST);//$libelle,$prix,$id,...

if($a==="store"){
//     var_dump($_POST);
//   var_dump($_FILES['photo']);
if(isset($_FILES['photo']) && !empty($_FILES['photo']['name'])){
    
    $infos=$_FILES['photo'];// tableau de 5 valeurs (tmp_name,name,size,error,type)
 
   $chemin=uploader($infos);//images/a.png
   if(!is_numeric($chemin)){
     ajouter($libelle,$prix,$chemin);
 } else{
header("location:create.php?c=$chemin");

 }
 

 die();
}


    // die("Arret"); 
    //ajouter($libelle,$prix);
}
if($a==="delete"){
    supprimer($id);
}

if($a==="update"){
modifier($libelle,$prix,$id);
}

header("location:index.php?op=$a");

?>