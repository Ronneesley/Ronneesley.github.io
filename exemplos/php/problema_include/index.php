<?php

include_once(__DIR__ . "/contas/Triangulo.php");

$t1 = new Triangulo(100, 50);
echo "T1: ";
echo $t1->calcularArea();
echo nl2br("\n");

$t2 = new Triangulo(15, 72);
echo "T2: ";
echo $t2->calcularArea();
echo nl2br("\n");

?>