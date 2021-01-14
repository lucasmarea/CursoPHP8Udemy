<?php

$nome = "Lucas";
$idade = 22;
$esporte = "exercícios físicos";



$tecn = ["PHP8","JS","HTML"];
$novaIdade = (string) $idade;

var_dump(get_debug_type($idade));
echo "<br/>";
var_dump(get_debug_type($novaIdade));

function exibir(){


    global $nome, 
           $idade, 
           $esporte;
    
    echo $nome, 
         $idade, 
         $esporte;
}

exibir();