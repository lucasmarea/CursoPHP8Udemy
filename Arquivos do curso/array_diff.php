<?php

$eua = ["vermelho","azul","branco"];
$cores = ["Vermelho", "amarelo", "verde"];
$brasil = ["amarelo", "verde", "azul"];

var_dump(array_diff($eua, $cores, $brasil));