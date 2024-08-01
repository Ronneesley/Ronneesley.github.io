<?php
$id = $_POST["id"];
$senha = $_POST["nova_senha"];

$con = new mysqli("localhost", "root", "", "sistema");

$hashSenha = md5($senha);

$resultado = $con->query("update usuarios 
    set senha = '$hashSenha' where id = $id");

$con->close();

echo "<h1>Senha alterada com sucesso</h1>"

?>

<a href="./index.html">Voltar</a>