<?php

//Caminho absoluto
include_once(__DIR__ . "/../contas/Triangulo.php");
include(__DIR__ . "/calcular.php");

$t4 = new Triangulo(5, 2);
echo "T4: ";
echo $t4->calcularArea();
echo nl2br("\n");

?>