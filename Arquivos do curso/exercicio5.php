<?php

$salario = 2.500;
$dependentes = 3;

function calcIRPF($salario, $dependentes) 
{
    if ($salario >= 1.903){

        $imposto =(($salario -($dependentes * 189.59))* (0/100)) - $dedução;

    }else if ($salario = 1.903 <=> 2.826) {

       // $imposto =(($salario -($dependentes * 189.59))* (7,5/100)) - $dedução;

    }  else ($salario = 2.826 <=> 3.751){

        $imposto =(($salario -($dependentes * 189.59))* (15/100)) - $dedução;
    } else ($salario = 3.751 <=> 4.664){

        $imposto =(($salario -($dependentes * 189.59))* (22,5/100)) - $dedução;

    } else ($salario > 4.664)

         $imposto =(($salario -($dependentes * 189.59))* (27,5/100)) - $dedução;
}

//somar();