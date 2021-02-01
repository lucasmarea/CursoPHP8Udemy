<?php

var_dump((int)100);

$paises = [
    "Brasil",
    "Argentina",
    "Argentina",
    "100",
    200,
    200,
    100,
    "100"
];

var_dump(array_unique($paises, SORT_LOCALE_STRING));