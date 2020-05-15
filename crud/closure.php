<?php
// closure (lamda ou fonction anomnyme) => c'est une fonction sans nom
// qui ne  va servir que localement et de callback (appel)
// [nom,prenom,date]=> ["<h2>
// [1,2,3] => [2,4,6]
// ["ali","ntoutoume","api"] =>[3+1,9+1,3+1];
$t1=[1,2,3,10];
$t2=["ali","ntoutoume","api"];
$tdouble=array_map(function($v){ 
    return 2*$v;

},$t1  );

$plus=10;

$fct_length=function($value) use ($plus) {
return strlen($value)+$plus;
};
$tlength=array_map($fct_length,$t2);


print_r($tdouble);
print_r($tlength);



?>