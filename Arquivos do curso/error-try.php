<?php


function manipualdordeExcecao()
{
    echo $exception -> getMessage()."<br/>";
    echo $exception -> getFile()."<br/>";
    echo $exception -> getLine()."<br/>";
    echo $exception -> getCode()."<br/>";
}

set_exception_handler("manipuladorDeExcecao");

class SenhaException extends Exception {}

$nome = "João";
$senha = "123";

try{

    if(!$nome) {
        throw new Exception("Essa é minha exceção!", 400);
    }

    
    if(strlen($senha) < 6){
        throw new Exception("Senha é fraca!.", 400);
    }



} catch(Exception $e) {

     echo $e->getMessage()."<br/>";


} catch(SenhaException $e) {

    echo "Problema na sua senha:" . $e->getMessage()."<br/>";

} finally {
  //  var_dump("Final");
}


/*
$exibeErro  = fn($erro) => throw new Excepction ($erro);

echo $exibeErro ("Deu erro! Throw Expression!");
echo "Depois da exceção"; */