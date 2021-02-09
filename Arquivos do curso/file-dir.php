<?php

//var_dump(scandir("./"));
$dir = "./uploads";
if(file_exists($dir)){
    var_dump("Diretório já Existe");
} else {
    mkdir($dir);
    var_dump("Diretório criado com sucesso!");
}