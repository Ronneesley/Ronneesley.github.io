<?php

$id = $_GET["id"];

$con = new mysqli("localhost", "root", "", "publicacao");

$con->query("delete from animes where id = $id");

$con->close();

echo "Excluído com sucesso";

?>