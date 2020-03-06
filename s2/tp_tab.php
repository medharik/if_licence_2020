<?php 
$hp=['libelle'=>'hp dv 6','prix'=>8000,'qte'=>12];
$dell=['libelle'=>'dell latitude ','prix'=>7000,'qte'=>5];
$sony=['libelle'=>'sony vaio','prix'=>10000,'qte'=>20];
$stock=[0=>$hp,1=>$dell,$sony];//$c=>$v : c=0, v=$hp, c=1,v=$dell
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
<div class="container">
<table class="table table-dark">
<div class="alert alert-info text-center" >liste des produits</div>
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Libelle</th>
      <th scope="col">Prix</th>
      <th scope="col">Quantite</th>
    </tr>
  </thead>
  <tbody>
   <?php foreach($stock as $c=>$v){?>
<?php 
$classe="primary";
if($v['qte']<10){
$classe="danger";
}else if($v['qte']<15){
    $classe="warning  text-primary";

}


?>
    <tr class="bg-<?=$classe?>">
      <th scope="row">
      <?=$c?>
      </th>
      <td>      <?=$v['libelle']?>
</td>
      <td>      <?=$v['prix']?>
</td>

      <td class="bg-<?=$classe?>">
      <?=$v['qte']?>
</td>
    </tr>
   <?php } ?>
    
  </tbody>
</table></div>
<hr>
<div class="container">
<table class="table table-dark">
<div class="alert alert-info text-center" >liste des produits</div>
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Libelle</th>
      <th scope="col">Prix</th>
      <th scope="col">Quantite</th>
    </tr>
  </thead>
  <tbody>
   <?php for($i=0;$i<count($stock);$i++){?>
    <tr>
      <th scope="row">
      <?=$stock[$i]['libelle']?>
      </th>
      <td>      <?=$stock[$i]['prix']?>
</td>
      <td>      <?=$stock[$i]['qte']?>
</td>
      <td>
</td>
    </tr>
   <?php } ?>
    
  </tbody>
</table></div>
</body>
</html>