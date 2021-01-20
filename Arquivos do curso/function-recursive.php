<?php

function recursivo($a)
{
    if($a<1000){
        echo $a. " ";
        recursivo(++$a);
    }
}


recursivo(0);