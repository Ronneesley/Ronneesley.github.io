<?php

$email = $_POST["email"];
$senha = $_POST["senha"];

$con = new mysqli("localhost", "root", "", "sistema");

$hashSenha = md5($senha);

$resultado = $con->query("select * from usuarios
    where email = '$email' and senha = '$hashSenha'");

if ($resultado->num_rows == 1){
    $obj = $resultado->fetch_object();

    echo "Seja bem vindo, ";
    echo $obj->nome;
}

$con->close();

?>