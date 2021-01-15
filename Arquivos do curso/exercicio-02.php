<?php


$preco = 1000.00;
$desconto = 10;
$frete = 35.49;

$total = ($preco * (1 - ($desconto / 100))) + $frete;


$compra = $total <= $preco && $total < 1020;



var_dump($compra,
        $total);

