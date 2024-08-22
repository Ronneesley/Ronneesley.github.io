<h1>Listagem de Animes</h1>

<a href="cadastro.html">Incluir novo anime</a>

<table border="1">
    <thead>
        <tr>
            <th>Título</th>
            <th>Sinopse</th>
            <th>Opções</th>
        </tr>
    </thead>

    <tbody>
        <?php

        $con = new mysqli("localhost", "root", "", "publicacao");

        $res = $con->query("select * from animes order by titulo");

        while ($linha = $res->fetch_object()){
            echo "<tr>\n";
            echo "<td>" . $linha->titulo . "</td>\n";
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