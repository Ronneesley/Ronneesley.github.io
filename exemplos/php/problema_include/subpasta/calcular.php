<?php

//Caminho relativo
include_once(__DIR__ . "/../contas/Triangulo.php");
include(__DIR__ . "/../index.php");

$t3 = new Triangulo(20, 10);
echo "T3: ";
echo $t3->calcularArea();
echo nl2br("\n");

?>