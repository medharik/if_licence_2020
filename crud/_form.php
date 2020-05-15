<?php 
include("modele.php");
extract($_GET);// $id, $c (code erreur)
$a="store";

if(isset($id)  && !empty($id) && is_numeric($id) ){
$a="update";
   $produit=find($id);
}
if(isset($c))
$notice =message_code($c);
else $notice="";

?>

<?php 
if($notice){
?>
<div class="alert alert-danger">
<?=$notice?>
</div>
<?php 
}
?>
<form action="controller.php?a=<?=$a?>" method="post" enctype="multipart/form-data"  >
<?php if (isset($id)  && !empty($id) && is_numeric($id)){?>
<input type="hidden" name="id" value="<?=$id?>" >
<?php }  ?>
    <div class="form-group">
        <label for="libelle">Libellé : </label><input value="<?=(isset($produit)? $produit['libelle']:'')?>" autocomplete="off" type="text" name="libelle" id="libelle" class="form-control">
    </div>
    <div class="form-group">
        <label for="prix">prix: </label><input value="<?=(isset($produit)? $produit['prix']:'')?>"  type="number" autocomplete="off" name="prix" id="prix" class="form-control">
    </div>
    <div class="form-group">
        <label for="photo">Photo: </label>
        <input   type="file" autocomplete="off" name="photo" id="photo" class="form-control" require>
    </div>
    <?php  if(isset($produit['photo']) ) {?>
<img src="<?=$produit['photo']?>" width="100">
    <?php } ?>
    <button type="submit" class="btn btn-sm btn-primary col-md-6 mx-auto d-block">Valider</button>
</form>