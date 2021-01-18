<?php

$quantidade = 2;
$valorUnitario = 1200;
$frete = 40;

$subtotal = $quantidade* $valorUnitario;

if ($quantidade>3){
    ($subtotal - (1 - (10 / 100))) + $frete;
} else{
    ($subtotal - (1 - (5 / 100))) + $frete;
}

var_dump("Valor total ficou:", $subtotal);

