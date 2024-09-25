<?php

// QUERYSTRING COM SUPERGLOBAIS

try {

    if (empty($_GET["parametro1"]) || empty($_GET["parametro2"])) {
        throw new Exception("Parametro obrigatório vázio!");
    }

    if (strlen($_GET["parametro1"]) < 3) {
        throw new Exception("Valor do nome, precisa ter mais que 3 letras");
    }
    
    $nome = $_GET["parametro1"];

    $idade = (int) $_GET["parametro2"];

} catch(Exception $e) {
    echo $e->getMessage();
}

function sayHello(string $p1, int $p2) : string
{
    $frase = "Olá, meu nome é $p1 ";
    $frase .= "e tenho ". $p2 . " anos.";
    return $frase;
}

var_dump(sayHello($nome, $idade));