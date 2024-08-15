<?php

$titulo = $_POST["titulo"];
$sinopse = $_POST["sinopse"];

$con = new mysqli("localhost", "root", "", "publicacao");

$con->query("insert into animes(titulo, sinopse, data_cadastro)
    values('$titulo', '$sinopse', now())");

$con->close();

echo "Salvo com sucesso";

?>