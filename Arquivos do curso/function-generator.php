<?php

function fila()
{

    yield "Anthony";
    yield "Djalma";
    yield "Glaucio";
    yield "João";
    yield "Ronaldo";

}

$fila = (fila());

var_dump($fila -> current());
var_dump($fila -> next());
var_dump($fila -> current());
var_dump($fila -> current());
var_dump($fila -> current());