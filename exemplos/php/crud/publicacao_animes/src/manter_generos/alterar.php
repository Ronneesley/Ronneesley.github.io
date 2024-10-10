<?php

$id = $_POST["id"];
$nome = $_POST["nome"];

$con = new mysqli("localhost", "root", "", "publicacao");

$con->query("update generos set nome = '$nome' where id = $id");

$con->close();

echo "Alterado com sucesso";

?>

<a href="listagem.php">Listagem</a>