<!DOCTYPE html>
<html>
    <head>
        <title>Listagem de Animes</title>

        <link rel="stylesheet" href="../css/listagem_animes.css" />
        <meta charset="UTF-8">
    </head>

    <body>                
        <h1>Animes</h1>

        <?php

        $con = new mysqli("localhost", "root", "", "publicacao");

        $res = $con->query("
            select a.*, g.nome as nome_genero from animes as a 
            inner join generos as g 
            on a.genero = g.id 
            order by titulo");

        while ($linha = $res->fetch_object()){
            echo "<div>\n";                
            echo "<img src='../imagens/capa.png' />";
            echo "<h2>" . $linha->titulo . "</h2>\n";            
            echo "<p>" . $linha->sinopse . "</p>\n";
            echo "</div>\n";
        }

        $con->close();

        ?>
    </body>
</html>