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
            select * from animes as a
            order by titulo");

        while ($linha = $res->fetch_object()){
            echo "<div>\n";                
            echo "<img src='../imagens/capa.png' />";
            echo "<h2>" . $linha->titulo . "</h2>\n";            
            echo "<a href='../ver_detalhes/anime.php?id=" . $linha->id . "'>Detalhes</a>";
            echo "</div>\n";
        }

        $con->close();

        ?>
    </body>
</html>