<?php

$nome = $_POST["nome"];
$login = $_POST["login"];
$senha = md5($_POST["senha"]);

$con = new mysqli('localhost', 'root', '', 'sistema');

$sql = "insert into usuarios(nome, login, senha)
    values('$nome', '$login', '$senha')";

$con->query($sql);

$con->close();

echo "<h1>Usuário salvo com sucesso</h1>";

?>