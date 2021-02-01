<?php

$dados = [
   [
        "modelo" => "Onix",
        "ano"  => 2020,
        "preco"  => 50000,
        "Fabricante"  => "gm"
    ],
   [
        "modelo"  => "Cruze",
        "ano"  => 2021,
        "preco"  => 100000,
        "Fabricante"  => "gm"
    ],
   [
        "modelo"  => "Palio",
        "ano"  => 1998,
        "preco"  => 7500,
        "Fabricante"  => "fiat"
    ]
];
$novoDados = array_map(function($item){

    $item ["preco"] *= 1.1;

    return $item;

}, $dados);


var_dump($dados);