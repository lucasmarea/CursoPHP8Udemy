<?php

function manipualdordeExcecao()
{
    var_dump($exception);

    echo $exception -> getMessage()."<br/>";
    echo $exception -> getFile()."<br/>";
    echo $exception -> getLine()."<br/>";
    echo $exception -> getCode()."<br/>";
}

set_exception_handler("manipuladorDeExcecao");

throw new exception("Essa é minha exceção!", 400);

echo "Depois da exceção";