<?php

$id = $_POST["id"];
$nome = $_POST["nome"];
$preco = $_POST["preco"];

include("conexao.php");

$con->query("update sorvetes set nome = '$nome', 
    preco = $preco where id = $id");

$con->close();

echo "Alterado com sucesso";

?>