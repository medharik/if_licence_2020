<?php 
require "config.php";
// M DU MVC 
// logique metier (entre autres : calcul +   Gestion Bd)

// // connexion  bd
// EXETNSION PHP pour les traitements BD : 
// mysql_  : - obsolete , + facile  
// mysqli_ , OCI_ , sqlsrv : - MONO-SGBD , - SECURITE  , , + facile
// PDO : PHP DATA OBJECT : - (il fait maitriser de la POO) , + MULTI SGBD , + SECURITE 
// code sql : LDD
// -- USE if_db_2020

// CREATE TABLE produit(
// id INT PRIMARY KEY auto_increment,

// libelle VARCHAR(100) NOT NULL ,
// prix FLOAT DEFAULT 0


// )
// 3 modes d'erreur : silent (en production)  , warning (en test) , exception mode (try, catch) en developpement
//

function  connecter_db(){
      try{
 $options=[PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, PDO::ATTR_DEFAULT_FETCH_MODE=> PDO::FETCH_ASSOC];
    $link=  new PDO("mysql:host=localhost;dbname=".DB.";charset=utf8",USER,PASSE,$options);

      }catch(PDOException $e){
      die("Erreur de connexion bd ".$e->getMessage());
      }
    return $link;

 }



// ajouter une resource : produit, personne
//CREATE
function ajouter($libelle, $prix,$photo){

      try{
                // connexion db
     $link= connecter_db();
      // preparer une requete SQL 
     $rp=  $link->prepare("insert into produit(libelle,prix,photo) values(?,?,?)");
      //executer la requete 
      $rp->execute([$libelle,$prix,$photo]);
       

      }  catch(PDOException $e){
      die("Erreur d'ajout de produit  ".$e->getMessage());
      }
 

}

//supprimer
//delete
function supprimer($id){

      try{
                // connexion db
     $link= connecter_db();
      // preparer une requete SQL 
     $rp=  $link->prepare("delete from produit where id=?");
      //executer la requete 
      $rp->execute([$id]);
       

      }  catch(PDOException $e){
      die("Erreur de suppression du produit  ".$e->getMessage());
      }
 

}
// modification 
//update
function modifier($libelle, $prix,$id,$chemin=""){

      try{
                // connexion db
     $link= connecter_db();
      // preparer une requete SQL 
      if(!$chemin){
            
            $rp=  $link->prepare("update produit set libelle=? , prix =?  where id=?");
            $rp->execute([$libelle, $prix,$id]);
      }else{
            
            $rp=  $link->prepare("update produit set libelle=? , prix =? , photo=?  where id=?");
            $rp->execute([$libelle, $prix,$chemin,$id]);
      }
      //executer la requete 
       

      }  catch(PDOException $e){
      die("Erreur de modification  du produit  ".$e->getMessage());
      }
 

}
// recuperer  tous les produits 
// read
function all(){

      try{
                // connexion db
     $link= connecter_db();
      // preparer une requete SQL 
     $rp=  $link->prepare("select * from produit order by id desc ");
      //executer la requete 
      $rp->execute();
     $resultat= $rp->fetchAll();

       return $resultat;

      }  catch(PDOException $e){
      die("Erreur de recuperation   des produits  ".$e->getMessage());
      }
 

}
// recuperer  un produit par id 
function find($id){

      try{
                // connexion db
     $link= connecter_db();
      // preparer une requete SQL 
     $rp=  $link->prepare("select * from produit where id=? ");
      //executer la requete 
      $rp->execute([$id]);
     $resultat= $rp->fetch();// ['libelle'=?'hp',...]

       return $resultat;

      }  catch(PDOException $e){
      die("Erreur de recuperation   du produit  ".$e->getMessage());
      }
 

}



// upload 
// ALTER TABLE produit ADD photo VARCHAR(255) 

function uploader($infos=array(),$dossier="images/"){
$client_name=$infos['name'];
$tmp=$infos['tmp_name'];
$infopath=pathinfo($client_name);
$ext=  strtolower( $infopath['extension']);
//unicite du nom du fichier
$new_name=md5(date('Ymdhis').rand(0,999999)).'.'.$ext;
$destination =$dossier.$new_name;
$autorise=['jpg','png','gif','pdf','doc'];
//taille du fichier 
 $taille=filesize($tmp);
if($taille >MAX_FILE_SIZE){
return -1 ;
// extension 
}else if(!in_array($ext,$autorise)){
return -2;
// autre
}else if( !move_uploaded_file($tmp,$destination)){
return -3;
}else{
return $destination;
} ;
// retourner le chemin 
      // return $destination;
}

// retourne un message d'erreur  selon le code erreur 
function message_code(int $code_erreur) : string {
      switch ($code_erreur) {
            case -1:
                 return  "La taille de ce fichier est plus grande que celle autorisee ".round(MAX_FILE_SIZE/(1024*1024),2)."Mo";
                  break;
            case -2 :
                 return  "ce type de fichier n'est pas autorise";
                  break;
            case -3:
                 return  "un probleme est survenu lors de l'upload du fichier ";
                  break;
            
            default:
                 return "";
                  break;
      }
      }







?>