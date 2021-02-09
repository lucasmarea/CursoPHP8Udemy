<?php

var_dump(file_get_contents("./arquivo.csv"));

file_put_contents("./arquivo.csv", date("Y-m-d H:i:s"));