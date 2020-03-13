<?php 
$message="";
$classe="d-none";
if(isset($_GET['c']) && $_GET['c']=='p'){
    $message="Le prix est requis";
    $classe="";
}
if(isset($_GET['c']) && $_GET['c']=='q'){
    $message="La quantite est requis";
    $classe="";
}
if(isset($_GET['c']) && $_GET['c']=='n'){
    $message="ce n'est pas un nombre";
    $classe="";
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>passage de donnees </title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <div class="row">

    <div class="col-md-6 mx-auto shadow mt-2 p-2">
<div class="alert alert-danger <?=$classe?>">
 <?=$message?>
 </div>
    <form action="destination.php" method="post">
    
    <div class="form-group">
    <label for="prix">prix</label>
    <input type="text" class="form-control" name="prix" id="prix">
    </div>
    <div class="form-group">
    <label for="qte">quantite</label>
    <input required type="text" class="form-control" name="qte" id="qte">
    </div>
    <button type="submit"  class="btn  btn-primary"> 
        Calculer
    </button>
    
    </form>
    </div>
    </div>

    <hr>
<table class="table table-bordered table-dark">

<tr>
    <td></td>
    <td>GET</td>
    <td>POST</td>
</tr>
<tr>    
    <td>SECURITE</td>
    <td>- (data est visible et transmise  dans le lien) </td>
    <td>+ (data n'est pas transmise dans l'URL)</td>
</tr>
<tr>
    <td>VITESSE</td>
    <td>+</td>
    <td>-</td>
</tr>
<tr>
    <td>CAPACITE</td>
    <td>-</td>
    <td>+(> 8MO)</td>
</tr>
</table>
</div>
</body>
</html>