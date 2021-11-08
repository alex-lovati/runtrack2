<?php 
function calcule($a, $b, $operation)
{
elseif ($operation == "+"){
    $resultat = $a + $b;
}
elseif($operation == "-"){
     $resultat = $a - $b;
 }   
elseif($operation == "*"){
     $resultat = $a * $b;
 }
elseif($operation == "%"){
     $resultat = $a % $b;
 }
elseif($operation == "/"){
     $resultat = $a / $b;
 }
 return $resultat;
}
$a = 6;
$b = 4;
$operation = "-";
echo calcule ($a, $b, $operation);
?>