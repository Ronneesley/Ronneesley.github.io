<?php

require_once './vendor/autoload.php';

class Pessoa {
    public $nome = "";
    public $cidade = "";

    function __construct($nome, $cidade){
        $this->nome = $nome;
        $this->cidade = $cidade;
    }    
}

$loader = new \Twig\Loader\FilesystemLoader('./templates');
$twig = new \Twig\Environment($loader);

$conta  = pow(10, 5);

$lista = array(
        new Pessoa("Ana", "Ceres"),
        new Pessoa("Bob", "Rilma"),
        new Pessoa("Carlos", "Itapuranga")
    );

echo $twig->render('index.html', ['name' => 'Fabien',
        "conta" => $conta, 
        "pessoas" => $lista ]);

?>
