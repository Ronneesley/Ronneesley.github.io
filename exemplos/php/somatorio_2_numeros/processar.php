<html>
    <head>
        <title>Resultado calculado</title>
    </head>

    <body>
        A soma do número 1 com o número 2 é:
        <b>
            <?php
                //Inferência de tipo de dado
                $n1 = $_POST["numero1"];
                $n2 = $_POST["numero2"];

                $s = $n1 + $n2;

                echo $s;
            ?>
        </b>
    </body>
</html>