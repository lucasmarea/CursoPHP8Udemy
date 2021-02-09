<?php

$arquivo = fopen("./arquivo.csv", "w");
var_dump("Abriu o Arquivo");
fclose($arquivo);

var_dump("Fechou o Arquivo");