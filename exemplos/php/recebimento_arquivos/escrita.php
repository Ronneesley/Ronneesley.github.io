<?php

$f = fopen("dados2.json", "w");

fwrite($f, "{ 'delineamento': 'DIC' }");

//fwrite($f, "ANA MARIA BRAGA", 3);

fclose($f);

?>