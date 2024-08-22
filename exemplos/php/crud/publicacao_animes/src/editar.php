<?php

$id = $_GET["id"];

$con = new mysqli("localhost", "root", "", "publicacao");

$res = $con->query("select * from animes where id = $id");

if ($linha = $res->fetch_object()){
    $id = $linha->id;
    $titulo = $linha->titulo;
    $sinopse = $linha->sinopse;
    $dataCadastro = $linha->data_cadastro;

    
}

$con->close();

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Editar Anime</title>

        <link rel="stylesheet" href="css/form.css" />
    </head>

    <body>
        <h1>Editar de Anime</h1>                

        <form action="alterar.php" method="post">
            <input type="hidden" name="id" value="<?=$id?>" />

            <div class="campo">
                <label>T&iacute;tulo</label>
                <input type="text" name="titulo" value="<?=$titulo?>" />
            </div>

            <div class="campo">
                <label>Sinopse</label>
                <textarea cols="50" rows="5" name="sinopse"><?=$sinopse?></textarea>
            </div>

            <input type="submit" value="Salvar" />
        </form>
    </body>
</html>