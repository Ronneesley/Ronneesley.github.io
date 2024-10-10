<?php

$nome = $_POST["nome"];

$con = new mysqli("localhost", "root", "", "publicacao");

$con->query("insert into generos(nome) values('$nome')");

$con->close();

echo "Inserido com sucesso";

?>

<a href="listagem.php">Listagem</a>