<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
    </head>

    <body>
        <ul>
            <li><a href="index.php?pagina=home">Home</a></li>

            <li><a href="index.php?pagina=pagina2">Página 2</a></li>

            <li><a href="index.php?pagina=pagina3">Página 3</a></li>
        </ul>

        <?php
            if (isset($_GET["pagina"])){
                $pagina = $_GET["pagina"];
            } else {
                $pagina = "home";
            }

            include("$pagina.html");
        ?>
    </body>
</html>