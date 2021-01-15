<?php

$a = ["GOl", "Latam","Azul"];
$b =[
    "Delta", 
    "Britsh Airlines", 
    "Amreican Airlines", 
    "Qatar airways",
    "Emirates"
];

$c = $a + $b;

var_dump($c);

$d = [200, 50 ,35];
$e = [2 =>35, 0 => 200, 1 => "50"];


var_dump($e ==$e);
var_dump($d === $e);