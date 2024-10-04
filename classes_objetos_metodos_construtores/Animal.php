<?php

abstract class Animal {

    protected $nome;
    protected $cor;
    protected $raca;

    public function __construct($_nome,$_cor,$_raca)
    {
        $this->nome = $_nome;
        $this->cor = $_cor;
        $this->raca = $_raca;
    }

    public function dormir() 
    {
        echo "$this->nome Está dormindo!<br>";
    }

    public function comer($_comida) 
    {
        echo "$this->nome Está comendo $_comida!<br>";
    }

}