<?php

$nome = $_POST["nome"];
$telefone = $_POST["telefone"];

$con = new mysqli("localhost", "root", 
    "123456789", "crm");

$con->query(
    "insert into pessoas(nome, telefone) values('$nome', '$telefone')");

$id = $con->insert_id;

$con->close();

echo "{  \"id\": $id, \"mensagem\": \"Salvo com sucesso\" }";


?>
