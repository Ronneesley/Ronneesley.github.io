<?php

class Triangulo {
    private $base;

    private $altura;

    public function __construct($base, $altura){
        $this->base = $base;
        $this->altura = $altura;
    }

    /**
     * Função que calcula a área de um triângulo
     * A = b * h / 2
     */
    public function calcularArea(){
        return $this->base * $this->altura / 2;
    }

    public function getBase(){
        return $this->base;
    }

    public function getAltura(){
        return $this->altura;
    }

    public function setBase($base){
        $this->base = $base;
    }

    public function setAltura($altura){
        $this->altura = $altura;
    }
}

?>