<?php 
include("modele.php");
$produits=all();
$notice="";
$classe="d-none";
if(isset($_GET['op']) && !empty($_GET['op'])){
    $op=$_GET['op'];
   $classe="d-block";
    if($op==="delete"){
$notice="Suppression effectuee avec succes";
    }else  if($op==="store"){
        $notice="Ajout effectue avec succes";
    }else  if($op==="update"){
        $notice="Modification effectuee avec succes";
}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des produits </title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
<div class="container">
<div class="alert alert-warning <?=$classe?>">
<?=$notice?>
</div>
<a href="create.php" class="btn btn-primary">Nouveau</a>
<div class="alert alert-info text-center my-3">
Liste des produits :
</div>
<table class="table table-striped">

<thead>
    <tr>
        <th>#</th>
        <th>Image</th>
        <th>Libellé</th>
        <th>prix</th>
        <th>Actions</th>
    </tr>
</thead>

<tbody>
<?php  foreach($produits as $p) { ?>
    <tr>
        <td><?=$p['id'];?></td>
        <td><img src="<?=$p['photo'];?>" alt="" width="150"  class="img-fluid img-thumbnail"></td>
        <td><?=$p['libelle'];?></td>
        <td><?=$p['prix'];?></td>
        <td>
        
        <a href="show.php?id=<?=$p['id'];?>" class="btn btn-sm btn-info">Consulter</a>
        <a onclick="return confirm('Vous vous vraiment supprimer ce produit?')"
         href="controller.php?a=delete&id=<?=$p['id'];?>" class="btn btn-sm btn-danger">Supprimer</a>
        <a href="edit.php?id=<?=$p['id'];?>" class="btn btn-sm btn-warning">Modifier</a>
        </td>
    </tr>

<?php } ?>
</tbody>

</table>

</div>
    
</body>
</html>