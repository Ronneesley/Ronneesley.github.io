<?php

class Cliente {
    public $id;

    public $nome;

    public function __construct($id, $nome){
        $this->id = $id;
        $this->nome = $nome;
    }
}

$nome = $_GET["nome"];
$id = 5;

$c = new Cliente($id, $nome);

header("Content-type: application/json");
echo json_encode($c);

?>