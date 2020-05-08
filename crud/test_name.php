<?php 
$new_name=md5(date('Ymdhis').rand(0,999999)."éTl.jpg");
echo $new_name;

$x=getimagesize("images/dhp1.jpg");
var_dump($x);
?>