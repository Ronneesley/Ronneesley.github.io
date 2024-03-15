<?php

$arquivo = "./recebidos/tarefa.txt";
$f = fopen($arquivo, "r");

$t = filesize($arquivo);

$texto = fread($f, $t);

echo $texto;

fclose($f);

?>