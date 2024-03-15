<?php

//Declaração de variáveis
    //Inferência de tipo de dado
$nome = "Roni";
$saldo = 1000.0;

//Comando de saída
echo gettype($nome) . "<br />";
echo gettype($saldo) . "<br />";

print("Impressão<br />");
print "Sem parênteses<br />";

//Chama de Funções nl2br -> new line to br, \n -> <br />
echo(nl2br("Com parêntese\n")); 

/* Comentário de múltiplas linhas
   Estrutura de controle
*/
if ($saldo > 0.0){
    //Mesclagem
    echo "Saldo positivo, pois o saldo é $saldo<br />";

    //Mesclagem com o apóstrofe (') não funciona
    echo 'Teste $saldo<br />';

    //Concatenação pura, operador (.)
    echo gettype('Tipo de dado, qual será?') . "<br />";
} else {
    echo "Saldo negativo";
}

//Alguns detalhes
$nome = "Roni";
if ($nome){
    echo "Estranho!<br />";
} else {
    echo "Ok<br />";
}

/*
    Estrura de repetição
 */

//Estrutura Para: quantidade de iterações muito bem definida
for ($i = 0; $i < 10; $i++){
    echo "$i<br />";
}

for ($i = 0, $j = 1; $i < 10; $i++, $j--){
    echo "$i | $j<br />";
}

$i = 0;
for (; $i < 10; $i++){
    //Comando continue, pula uma iteração
    if ($i != 3) continue;

    echo "$i<br />";

    //Comando break, que força a parada do laço
    //if em uma unica linha
    if ($i > 5) break;
}

//Estrutura enquanto: pode nem executar
$i = 15;
while ($i > 10){
    echo "$i<br />";

    $i--;
}

//Estrutura faça-enquanto: executa no mínimo 1 vez
$i = 15;
do {
    echo "$i<br />";

    $i--;
} while ($i > 10);


?>