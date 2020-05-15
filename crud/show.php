<?php
include("modele.php");
$id=$_GET['id'];
$produit=find($id);
// var_dump($produit);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consultation du produit <?=$produit['libelle']?> </title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

</head>
<body>
<div class="container">
<?php 

?>
<div class="card mx-auto text-center" style="width: 18rem;">
  <img src="<?=$produit['photo'];?>" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title text-primary"><?=$produit['libelle']?></h5>
    <p class="card-text text-danger"><?=$produit['prix']?>DHS</p>
    <a href="javascript:history.go(-1)" class="btn btn-primary">Retour</a>
  </div>
</div>

</div>
    
</body>
</html>