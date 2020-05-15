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
// equivalent (==) de false : 0,"",0.0.[] ; false==0 , null  
if($a==="delete"){
    $produit=find($id);
    if(is_file($produit['photo'])){// si le fichier  existe tjrs
        unlink($produit['photo']);// supprime le fichier
    }
    supprimer($id);
}

if($a==="update"){

    if(isset($_FILES['photo']) && !empty($_FILES['photo']['name'])){
    
        $infos=$_FILES['photo'];// tableau de 5 valeurs (tmp_name,name,size,error,type)
     
       $chemin=uploader($infos);//images/a.png
       if(!is_numeric($chemin)){
        $produit=find($id);
        if(is_file($produit['photo'])){// si le fichier  existe tjrs
            unlink($produit['photo']);// supprime le fichier
        }
           modifier($libelle,$prix,$id,$chemin);
        //  ajouter($libelle,$prix,$chemin);
     } else{
     header("location:edit.php?id=$id&c=$chemin");
    die();
     }
}else {
    modifier($libelle,$prix,$id);
}
}
 header("location:index.php?op=$a");

?>