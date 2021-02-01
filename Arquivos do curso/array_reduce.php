<?php


$notas = [200, 100, 50, 50, 5, 5, 5, 5, 2];

$total = array_reduce($notas, function($acumulado, $valor){

    return $acumulado + $valor;

}, 1000);

var_dump($total);