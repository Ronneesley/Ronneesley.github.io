<h1>Listagem de Sorvetes</h1>

<a href="cadastro.html">Incluir um novo registro</a>
<br /><br />

<?php
$con = new mysqli("localhost", "root", "", "sorveteria");


$res = $con->query("SELECT * FROM sorvetes");

echo "<table border=1>";
echo "<thead>";
echo "<tr>";
echo "<th>Nome</th><th>Preço</th><th>Opções</th>";
echo "</tr>";
echo "</thead>";

echo "<tbody>";

while ($obj = $res->fetch_object()){
    $id = $obj->id;

    echo "<tr>";
    echo "<td>";
    echo $obj->nome;
    echo "</td>";
    echo "<td>";
    echo $obj->preco;
    echo "</td>";
    echo "<td>";
    echo "<a href='editar.php?id=$id'>Editar</a> ";
    echo "<a href='excluir.php?id=$id'>Excluir</a>";
    echo "</td>";
    echo "<tr>";
}

echo "</tbody>";
echo "</table>";

$con->close();

?>