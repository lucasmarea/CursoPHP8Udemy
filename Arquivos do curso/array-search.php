<?php

$paises = ["Brasil" => 210, "Argentina" =>50 , "Chile" =>40, "Colombia" => 45,
"Equador" => 30, "10"];

var_dump($paises);

var_dump(in_array("10", $paises, true));


var_dump(array_search("10", $paises, true));

var_dump(array_key_exists("EUA", $paises));