<?php

$quantidade = 2;
$valorUnitario = 1200;
$frete = 40;



if ($quantidade > 3){
    
     $subtotal = ($quantidade* $valorUnitario* (1 - (10/ 100))) + $frete;
} else{
    $subtotal = ($quantidade* $valorUnitario* (1 - (5/ 100))) + $frete;
}

var_dump("Valor total ficou:", $subtotal);

