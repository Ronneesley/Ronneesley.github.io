<?php

$nome = $_POST["nome"];
$telefone = $_POST["telefone"];

echo $nome;

echo $telefone;

$con = new PDO('pgsql:host=localhost;dbname=crm', "roni", "123456");

$con->query("insert into pessoas(nome, telefone) values('$nome', '$telefone')");


?>
