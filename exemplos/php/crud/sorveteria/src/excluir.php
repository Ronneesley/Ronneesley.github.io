<?php

$id = $_GET["id"];

$con = new mysqli("localhost", "root", "", "sorveteria");

$con->query("delete from sorvetes where id = $id");

echo "Excluído com sucesso";

$con->close();

?>