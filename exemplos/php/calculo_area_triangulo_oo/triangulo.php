<?php

class Triangulo {
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

?>