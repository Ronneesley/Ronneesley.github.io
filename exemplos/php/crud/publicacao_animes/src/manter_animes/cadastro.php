<!DOCTYPE html>
<html>
    <head>
        <title>Cadastro Anime</title>

        <link rel="stylesheet" href="../css/layout.css" />
        <link rel="stylesheet" href="../css/form.css" />
        <meta charset="UTF-8">
    </head>

    <body>
        <?php
            include("../admin/topo.php");
        ?>

        <h1>Cadastro de Animes</h1>                

        <form action="inserir.php" method="POST">
            <div class="campo">
                <label accesskey="u" for="titulo">T&iacute;t<u>u</u>lo</label>
                <input type="text" name="titulo" id="titulo" />
            </div>

            <div class="campo">
                <label accesskey="g" for="genero"><u>G</u>ênero</label>
                <select name="genero" id="genero">
                    <?php
                        $con = new mysqli("localhost", "root", "", "publicacao");

                        $res = $con->query("select * from generos order by nome");

                        while ($linha = $res->fetch_object()){
                            $id = $linha->id;
                            $nome = $linha->nome;

                            echo "<option value='$id'>$nome</option>\n";
                        }

                        $con->close();
                    ?>                    
                </select>
            </div>

            <div class="campo">
                <label>Sinopse</label>
                <textarea cols="50" rows="5" name="sinopse"></textarea>
            </div>

            <input type="submit" value="Salvar" class="botao" />
        </form>

        <?php
            include("../admin/rodape.php");
        ?>
    </body>
</html>