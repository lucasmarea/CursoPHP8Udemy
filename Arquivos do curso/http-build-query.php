<?php

var_dump ($_GET);

$fields = [
    0 => "João Henrique",
    "sobrenome"=>"Rangel"
];

//echo '<a href="?'.http_bulid_query($fields). '">Link</a>';

echo http_build_query($fields, '_', " AND ", PHP_QUERY_RFC3986);