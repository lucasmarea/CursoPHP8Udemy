<?php

function getDomain($url)
{

    $inicio = strpos($string, "://")+3;

    $dominio = substr($string, $inicio, strlen($string));

    echo substr ($dominio, 0 , strpos($dominio, "/"));
    
    return substr ($dominio,0 , strpos($dominio, "/"));
}

echo getDomain("https://hcodelab.com.br/blog");

;

