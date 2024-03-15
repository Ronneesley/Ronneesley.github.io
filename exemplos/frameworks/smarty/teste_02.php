<?php

require 'vendor/autoload.php';
$smarty = new Smarty();
//$smarty->testInstall();

class Cidade {
    public $nome = "";
    function __construct($nome){
        $this->nome = $nome;        
    }

    function getNome(){
        return $this->nome;
    }

    function setNome($nome){
        $this->nome = $nome;
    }
}

class Pessoa {
    public $nome = "";
    public $cidade;

    function __construct($nome, $cidade){
        $this->nome = $nome;
        $this->cidade = $cidade;
    }

    function getNome(){
        return $this->nome;
    }

    function setNome($nome){
        $this->nome = $nome;
    }
}


$lista_oo = array(
    new Pessoa("Ana", new Cidade("Ceres") ),
    new Pessoa("Bob", new Cidade("Rilma") ),
    new Pessoa("Carlos", new Cidade("Itapuranga") )
);

$lista2 = array(
    array("nome" => "Ana", "cidade" => "Ceres"),
    array("nome" => "Bob", "cidade" => "Rialma"),
    array("nome" => "Carlos", "cidade" => "Itapuranga")
);

$smarty->assign('name', 'Ronneesley');
$smarty->assign('pessoas', $lista_oo);
$smarty->assign('lista2', $lista2);
$smarty->display('lista.tpl');

?>
