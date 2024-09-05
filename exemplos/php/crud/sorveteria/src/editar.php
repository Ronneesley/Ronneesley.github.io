<h1>Edição de Sorvete</h1>

<?php

$id = $_GET["id"];

include("conexao.php");

$res = $con->query("select * from sorvetes 
    where id = $id");

if ($obj = $res->fetch_object()){
    $nome = $obj->nome;
    $preco = $obj->preco;
}

$con->close();

?>

<form method="post" action="alterar.php">
    ID:
    <input type="text" name="id" value="<?=$id?>" />
    <br />

    Nome:
    <input type="text" name="nome" value="<?=$nome?>" />
    <br />

    Preço:
    <input type="text" name="preco" value="<?=$preco?>" />
    <br /><br />

    <input type="submit" value="Alterar" />
</form>