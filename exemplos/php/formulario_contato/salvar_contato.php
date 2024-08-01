<?php

$nome = $_POST["nome"];
$email = $_POST["email"];
$assunto = $_POST["assunto"];
$conteudo = $_POST["conteudo"];

$con = new mysqli("localhost", "root", "", "site");
$con->query("insert into contatos(nome, email, assunto, conteudo) 
        values('$nome', '$email', '$assunto', '$conteudo')");
$con->close();

echo "Contato salvo com sucesso!";

?>