<?php

$id = $_GET["id"];

$con = new mysqli("localhost", "root", "", "publicacao");

$res = $con->query("select * from generos where id = $id");

if ($linha = $res->fetch_object()){
    $id = $linha->id;
    $nome = $linha->nome;
}

$con->close();

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Editar Gênero</title>

        <link rel="stylesheet" href="../css/form.css" />
    </head>

    <body>
        <h1>Editar de Gênero</h1>                

        <form action="alterar.php" method="post">
            <input type="hidden" name="id" value="<?=$id?>" />

            <div class="campo">
                <label>Nome</label>
                <input type="text" name="nome" value="<?=$nome?>" />
            </div>

            <input type="submit" value="Salvar" />
        </form>
    </body>
</html>