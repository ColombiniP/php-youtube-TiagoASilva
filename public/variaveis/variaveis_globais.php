<?php

$a = 10; //VARIAVEIS GLOBAIS
$b = 20; //VARIAVEIS GLOBAIS

function soma(int $a, int $b) : int
{
    $resultado =  $b + $a;
    return $resultado;
}

var_dump(soma($a,$b));