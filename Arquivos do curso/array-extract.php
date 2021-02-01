<?php
$email = "hcode@hcode.com.br";
$pessoa = [
    "nome" => "Djalma",
    "idade" => "40",
    "email"=> "djalma@hcode.com.br"
];

var_dump(extract($pessoa, EXTR_PREFIX_SAME, "var"));

var_dump($email);
var_dump($var_nome);
var_dump ($var_email);
var_dump($var_idade);