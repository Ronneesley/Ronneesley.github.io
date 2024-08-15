<h1>Listagem de Animes</h1>

<table border="1">
    <thead>
        <tr>
            <th>Título</th>
            <th>Sinopse</th>
            <th></th>
        </tr>
    </thead>

    <tbody>
        <?php

        $con = new mysqli("localhost", "root", "", "publicacao");

        $res = $con->query("select * from animes order by titulo");

        while ($linha = $res->fetch_object()){
            echo "<tr>";
            echo "<td>" . $linha->titulo . "</td>";
            echo "<td>" . $linha->sinopse . "</td>";
            echo "<td><a href='excluir.php?id=$linha->id'>Excluir</a></td>";
            echo "</tr>";
        }

        $con->close();

        ?>
    </tbody>
</table>