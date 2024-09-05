<?php

$nome = $_POST["nome"];
$preco = $_POST["preco"];

include("conexao.php");

$con->query("insert into sorvetes(nome, preco) 
    values('$nome', $preco)");

$con->close();

echo "Inserido com sucesso";

?>