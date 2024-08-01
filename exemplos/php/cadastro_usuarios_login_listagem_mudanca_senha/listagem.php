<h1>Listagem de Usuários</h1>

<table border="1">
    <thead>
        <tr>
            <th>Nome</th>
            <th>E-mail</th>
            <th></th>
        </tr>
    </thead>

    <tbody>
<?php
    $con = new mysqli("localhost", "root", "", "sistema");    
    $resultado = $con->query("select * from usuarios order by nome");
    
    while ($obj = $resultado->fetch_object()){
        $id = $obj->id;

        echo "<tr>";
        echo "<td>" . $obj->nome . "</td>";
        echo "<td>" . $obj->email . "</td>";
        echo "<td><a href='formulario_mudanca_senha.php?id=$id'>Mudar senha</a></td>";
        echo "</tr>";
    }
    
    $con->close();
?>
    </tbody>
</table>

<a href="./index.html">Voltar</a>