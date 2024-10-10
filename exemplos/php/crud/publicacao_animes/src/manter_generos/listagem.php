<!DOCTYPE html>
<html>
    <head>
        <title>Listagem de Gêneros</title>

        <link rel="stylesheet" href="../css/listagem.css" />
        <meta charset="UTF-8">
    </head>

    <body>                
        <h1>Listagem de Gêneros</h1>

        <div class="botoes">
            <a href="cadastro.php" class="botao">
                Incluir novo gênero
            </a>
        </div>

        <table>
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Opções</th>
                </tr>
            </thead>

            <tbody>
                <?php

                $con = new mysqli("localhost", "root", "", "publicacao");

                $res = $con->query("select * from generos order by nome");

                while ($linha = $res->fetch_object()){
                    echo "<tr>\n";
                    echo "<td>" . $linha->nome . "</td>\n";
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