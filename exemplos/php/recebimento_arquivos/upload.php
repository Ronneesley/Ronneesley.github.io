<?php


print("REQUEST");
print("<pre>");
print_r($_REQUEST);
print("</pre>");

print("FILES");
print("<pre>");
print_r($_FILES);
print("</pre>");

$diretorio = './recebidos/';
$destino = $diretorio . basename($_FILES['arquivo']['name']);

//move_uploaded_file($_FILES["arquivo"]["tmp_name"], "./recebidos/tarefa.txt");
move_uploaded_file($_FILES["arquivo"]["tmp_name"], $destino);

?>

