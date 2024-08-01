<html>
<head>
    <style>
        .numero {
            display: block;
            width: 30px;
            height: 30px;
            border: 1px solid orange;
            background-color: gold;
            padding: 5px;
            float: left;
            margin-left: 5px;
            text-align: center;
        }
    </style>
</head>

<body>
<?php

$maximo = 60;

$resultado = array();
$numeros = array();
for ($i = 1; $i <= $maximo; $i++) array_push($numeros, $i);

for ($i = 0; $i < 6; $i++){
    $indice = rand(0, count($numeros) - 1);
    $numero = $numeros[$indice];
    $resultado[$i] = $numero;
    
    $numerosDepois = array();
    for ($j = 0; $j < count($numeros); $j++){
        if ($j != $indice){
            array_push($numerosDepois, $numeros[$j]);
        }
    }
    $numeros = $numerosDepois;
}

?>

<?php
    for ($i = 0; $i < 6; $i++){
?>
        <span class="numero"><?=$resultado[$i]?></span>
<?php
    }
?>

</body>
</html>