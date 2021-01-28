<?php

$msg = "JOão HEnrique;rangel";

$formatCSV =fn($string, $delimiter = ";") => str_replace($delimiter," ", ucwords(strtolower($nome),
$delimiter));

echo strtolower($nome) . "\n";
echo strtoupper($nome) . "\n";
echo mb_strtoupper($nome) . "\n";

echo ucfirst(strtolower($nome)) . "\n";
echo $formatCSV($nome) . "\n";