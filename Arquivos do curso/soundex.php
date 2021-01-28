<?php
$original = "Bop";

$search = "Pop";

var_dump(soundex($original) == soundex($search));
