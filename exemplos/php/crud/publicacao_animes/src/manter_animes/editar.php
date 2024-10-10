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
        <title>Editar Anime</title>

        <link rel="stylesheet" href="../css/form.css" />
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
                <label>Gênero</label>
                <select name="genero">
                    <?php
                        $con = new mysqli("localhost", "root", "", "publicacao");

                        $res = $con->query("select * from generos order by nome");

                        while ($linha = $res->fetch_object()){
                            $id = $linha->id;
                            $nome = $linha->nome;

                            if ($id == $genero){
                                echo "<option value='$id' selected>$nome</option>\n";
                            } else {
                                echo "<option value='$id'>$nome</option>\n";
                            }
                        }

                        $con->close();
                    ?>                    
                </select>
            </div>

            <div class="campo">
                <label>Sinopse</label>
                <textarea cols="50" rows="5" name="sinopse"><?=$sinopse?></textarea>
            </div>

            <input type="submit" value="Salvar" />
        </form>
    </body>
</html>