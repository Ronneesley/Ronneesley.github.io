<h1>A estimativa da sua idade é:</h1>

<?php

	$nome = $_POST["nome"];
	$ano = $_POST["ano"];
	
	$anoAtual = date("Y");
	$idade = $anoAtual - $ano;
	
	echo "<h2>" . $idade . "</h2>";

?>

<br />
<img src="emoji-joinha.jpeg" width="100" height="100" />
