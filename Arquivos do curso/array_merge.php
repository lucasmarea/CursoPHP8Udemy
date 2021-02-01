<?php

$frutas = ["tropical"=> "maça", 1 => "banana","abacaxi"];

$outrasFrutas = ["limão", "maça", "tropical"=> "laranja"];

var_dump(array_merge($frutas, $outrasFrutas));