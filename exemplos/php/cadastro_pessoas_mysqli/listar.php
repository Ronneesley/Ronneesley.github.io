<table border="1">
    <thead>
        <tr>
            <th>Nome</th>
            <th>Telefone</th>
        </tr>
    </thead>

    <tbody>        
<?php

$con = new mysqli("localhost", "root", 
    "123456789", "crm");

$res = $con->query(
    "select * from pessoas order by nome");

while ($linha = $res->fetch_assoc()){
    echo "<tr>\n";
    echo " <td>" . $linha["nome"] . "</td>\n";
    echo " <td>" . $linha["telefone"] . "</td>\n";
    echo "</tr>\n";
}

$con->close();

?>
    </tbody>
</table>