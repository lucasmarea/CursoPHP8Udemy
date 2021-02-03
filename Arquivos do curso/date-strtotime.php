<?php

$texto = "next month";

var_dump(strtotime($texto));

var_dump(date("d/m/Y H:i", strtotime($texto)));