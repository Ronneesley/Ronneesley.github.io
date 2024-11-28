<?php

$id = $_GET["id"];

$con = new mysqli("localhost", "root", "", "publicacao");

$res = $con->query("select * from animes where id = $id");

if ($linha = $res->fetch_object()){
    $id = $linha->id;
    $titulo = $linha->titulo;
    $genero = $linha->genero;
    $sinopse = $linha->sinopse;
    $dataCadastro = $linha->data_cadastro;   
}

$con->close();

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Detalhes Anime</title>
    </head>

    <body>
        <h1><?=$titulo?></h1>                

        <img src='../imagens/capa.png' width="500" height="300" />

        <p><?=$sinopse?></p>
    </body>
</html>