A área do triângulo é: 

<?php

    include("triangulo.php");

    $base = $_GET["base"];
    $altura = $_GET["altura"];

    $t = new Triangulo($base, $altura);

    echo $t->calcularArea();

?>