<?php

$b = $_POST["base"];
$a = $_POST["altura"];

$h = sqrt( pow($a, 2) + pow($b, 2) );

echo "Hipotenusa: $h";

?>