<?php

$id = $_GET["id"];

$con = new mysqli("localhost", "root", "", "publicacao");

$con->query("delete from generos where id = $id");

$con->close();

echo "Excluído com sucesso";

?>

<a href="listagem.php">Listagem</a>