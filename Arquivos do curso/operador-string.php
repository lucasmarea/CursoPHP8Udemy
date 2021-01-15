<?php

$primeirNome = "João";
$ultimoNome = "Rangel";

$nomeCompleto = $primeirNome . " " . 
$ultimoNome;

var_dump($nomeCompleto);

$texto = "Lorem ipsum dolor sit";
$texto .= "amet consectetur adipisicing";
$texto .= "elit. Sint quisquam quidem repellat,
";

echo $texto. "<br/>";


$texto2 = <<<'HCODE'
<pre>
$nomeCompleto

Lorem ipsum dolor sit amet consectetur 

adipisicing elit. Sit delectus ipsa laborum 

dolores reprehenderit magni vero ab? Natus molestias
 dolore quidem possimus neque, aspernatur veniam qui
 
, quaerat autem unde impedit!
</pre>
HCODE;

echo $texto2;

