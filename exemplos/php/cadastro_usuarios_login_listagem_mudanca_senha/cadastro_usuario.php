<?php

$nome = $_POST["nome"];
$email = $_POST["email"];
$senha = $_POST["senha"];
$confirmacaoSenha = $_POST["confirmacao_senha"];

if ($senha == $confirmacaoSenha){
    $con = new mysqli("localhost", "root", "", "sistema");

    $hashSenha = md5($senha);

    $con->query("insert into usuarios(nome, email, senha) 
        values('$nome', '$email', '$hashSenha')");

    $con->close();

    echo "Cadastrado com sucesso!";
} else {
    echo "A confirmação da senha não confere!";
}

?>

<a href="./index.html">Voltar</a>