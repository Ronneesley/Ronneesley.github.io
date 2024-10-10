<!DOCTYPE html>
<html>
    <head>
        <title>Listagem de Animes</title>

        <link rel="stylesheet" href="../css/listagem.css" />
        <meta charset="UTF-8">
    </head>

    <body>                
        <h1>Listagem de Animes</h1>

        <div class="botoes">
            <a href="cadastro.php" class="botao">
                Incluir novo anime
            </a>
        </div>

        <table>
            <thead>
                <tr>
                    <th>Título</th>
                    <th>Gênero</th>
                    <th>Sinopse</th>
                    <th>Opções</th>
                </tr>
            </thead>

            <tbody>
                <?php

                $con = new mysqli("localhost", "root", "", "publicacao");

                $res = $con->query("
                    select a.*, g.nome as nome_genero from animes as a 
                    inner join generos as g 
                    on a.genero = g.id 
                    order by titulo");

                while ($linha = $res->fetch_object()){
                    echo "<tr>\n";
                    echo "<td>" . $linha->titulo . "</td>\n";
                    echo "<td>";
                    echo "<a href='../manter_generos/editar.php?id=$linha->genero'>";
                    echo $linha->nome_genero;
                    echo "</a>";
                    echo "</td>\n";
                    echo "<td>" . $linha->sinopse . "</td>\n";
                    echo "<td>\n";
                    echo "<a href='editar.php?id=$linha->id'>Editar</a> ";
                    echo "<a href='excluir.php?id=$linha->id'>Excluir</a>";
                    echo "</td>\n";
                    echo "</tr>\n";
                }

                $con->close();

                ?>
            </tbody>
        </table>
    </body>
</html>