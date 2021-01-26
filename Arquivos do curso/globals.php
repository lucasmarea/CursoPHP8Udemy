<?php

function qualquer() {
    
    $nome = "Hcode";
    global $idade;
    $idade = 30;
    $GLOBALS ["nome"] = "João";

    echo $GLOBALS["empresa"]."<br/>";


}

qualquer();
echo " Fora da função:  $nome<br/>";
var_dump($GLOBALS);


