<?php

//Funções tradicionais
function calcularAreaQuadrado($lado){
    //Operador de potência
    return $lado ** 2;
}

echo calcularAreaQuadrado(5) . "<br />";

//Arrow function
$cubo = fn($valor) => $valor ** 3;
$quadrado = fn($valor) => $valor ** 2;

$funcao = $quadrado;

echo $funcao(10) . "<br />";

function calcular($funcao, $valor){
    return $funcao($valor) + 2;
}

echo calcular($cubo, 8) . "<br />";

class Retangulo {
    private $base;

    private $altura;

    public function __construct($base, $altura){
        $this->base = $base;
        $this->altura = $altura;
    }

    public function calcularArea(){
        return $this->base * $this->altura;
    }

    public function getBase(){
        return $this->base;
    }

    public function __get($nome){
        return $this->$nome;
    }
}

$r1 = new Retangulo(5, 8);
echo $r1->calcularArea() . "<br />";
echo $r1->getBase() . "<br />";
echo $r1->base . "<br />";

interface FiguraGeometrica {
    public function calcularArea();
}

class Quadrado implements FiguraGeometrica {
    private $lado;

    public function __construct($lado){
        $this->lado = $lado;
    }

    public function calcularArea(){
        return $this->lado ** 2;
    }
}

class Triangulo implements FiguraGeometrica {
    private $base;
    private $altura;

    public function __construct($base, $altura){
        $this->base = $base;
        $this->altura = $altura;
    }

    public function calcularArea(){
        return $this->base * $this->altura / 2;
    }
}

$q1 = new Quadrado(6);
echo $q1->calcularArea() . "<br />";

$t1 = new Triangulo(6, 6);
echo $t1->calcularArea() . "<br />";

//Herança

abstract class Pessoa {
    protected $telefone;

    public function getTelefone(){ return $this->telefone; }
}

class PessoaFisica extends Pessoa {
    private $nome;

    private $cpf;
    
    private $dataNascimento;

    public function __construct($telefone, $nome, $cpf, $dataNascimento){
        $this->telefone = $telefone;
        $this->nome = $nome;
        $this->cpf = $cpf;
        $this->dataNascimento = $dataNascimento;
    }

    public function getNome(){ return $this->nome; }
    public function getCPF(){ return $this->cpf; }
    public function getDataNascimento(){ return $this->dataNascimento; }
}

class PessoaJuridica extends Pessoa {
    private $cnpj;

    private $razaoSocial;

    private $nomeFantasia;

    public function __construct($telefone, $cnpj, $razaoSocial, $nomeFantasia){
        $this->telefone = $telefone;
        $this->cnpj = $cnpj;
        $this->razaoSocial = $razaoSocial;
        $this->nomeFantasia = $nomeFantasia;
    }

    public function getCNPJ(){ return $this->cnpj; }
    public function getRazaoSocial(){ return $this->razaoSocial; }
    public function getNomeFantasia(){ return $this->nomeFantasia; }
}

$pf = new PessoaFisica("1234", "Ana", "123.456.789-12", mktime(0, 0, 0, 8, 12, 2023));
$pj = new PessoaJuridica("4567", "/0001", "Instituto ... Goiano", "IF Goiano Ceres");

echo $pf->getNome() . "<br />";
echo $pf->getTelefone() . "<br />";

echo $pj->getRazaoSocial() . "<br />";
echo $pj->getTelefone() . "<br />";

?>
