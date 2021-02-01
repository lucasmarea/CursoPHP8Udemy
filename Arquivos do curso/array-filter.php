<?php

$dados = [
    "um" => [
        "modelo" => "Onix",
        "ano"  => 2020,
        "preco"  => 50000,
        "Fabricante"  => "gm"
    ],
   "dois" => [
        "modelo"  => "Cruze",
        "ano"  => 2021,
        "preco"  => 100000,
        "Fabricante"  => "gm"
    ],
    "tres"=>[
        "modelo"  => "Palio",
        "ano"  => 1998,
        "preco"  => 7500,
        "Fabricante"  => "fiat"
    ]
];


$filtrados = array_filter($dados, function($item, $chave){
    
   // return $item ["fabricante"] === "gm";
   var_dump($chave);
   return $item ["ano"] <= 2020;

}, ARRAY_FILTER_USE_BOTH);

//var_dump($filtrados);