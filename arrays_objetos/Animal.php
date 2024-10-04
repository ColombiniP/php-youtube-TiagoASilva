<?php

abstract class Animal {

    public $nome;
    protected $cor;
    protected $raca;

    public function __construct($_nome)
    {
        $this->nome = $_nome;
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