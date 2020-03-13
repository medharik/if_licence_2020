<?php 

//false (ou empty) : null, "", '',"0", [],0,0.0
//true   : 

$a="";
if($a){
echo "a eWst $a<br>";
}
if(isset($a)){
echo "a est isset (exist) $a<br>";
}
if(!empty($a)){
echo "a est not empty $a<br>";
}
//
if(isset($x)&& empty($x)){
    echo "x est vide empty";
}


$b=(bool)$a;
var_dump($b);
?>