<?php
var_dump(filesize("./arquivo.csv"));
var_dump(filetype("./arquivo.csv"));
var_dump(filetype("./"));

var_dump(mime_content_type("./file-exist.php"));

$stat = stat("./arquivo.csv");

var_dump(date("Y-m-d H:i:s", $stat[8]));
var_dump(date("Y-m-d H:i:s", $stat[9]));