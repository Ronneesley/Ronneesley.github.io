<?php

$titulo = $_POST["titulo"];
$genero = $_POST["genero"];
$sinopse = $_POST["sinopse"];

$con = new mysqli("localhost", "root", "", "publicacao");

$con->query("insert into animes(titulo, genero, sinopse, data_cadastro)
    values('$titulo', $genero, '$sinopse', now())");

$con->close();

echo "Inserido com sucesso";

?>

<a href="listagem.php">Listagem</a>