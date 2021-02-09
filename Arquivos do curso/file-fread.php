<?php

$filename = "./arquivo.csv";

$arquivo = fopen($filename, "r+");
var_dump("Abriu o Arquivo");

var_dump(filesize($filename));



$registro = "Anthony Rafael;anthony@hcode.com.br; 25\r\n";
var_dump(fwrite($arquivo, $registro));

rewind($arquivo);

var_dump(fread($arquivo, filesize($filename)));

rewind($arquivo);
fseek($arquivo, -10);

var_dump(fwrite($arquivo, "--ESCREVA AQUI--"));

fclose($arquivo);

var_dump("Fechou o Arquivo");