<?php

setlocale(LC_TIME, "pt_BR", "portuguese");

$data = "Hoje é %A, %d de %B de %Y";

var_dump(ucwords(strftime($data, strtotime("today"))));