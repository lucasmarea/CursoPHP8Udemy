<?php

$a = 50;
function somar(&$numeroA, float $numeroB = 10) 
{
    ver_dump($numeroB);
    $numeroA += $numeroB;
    echo $numeroA . "<br/>";
}

somar($a,5.5);

somar(
    numeroB: 30,
    numeroA: $a
);

echo "Agora fora da função: $a";