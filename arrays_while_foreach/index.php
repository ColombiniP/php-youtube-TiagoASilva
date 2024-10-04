<?php

// i | value 
// [0] Joao
// [1] Jose
// [2] Maria
// [3] Joana

$lista_nomes = array();
$lista_nomes[] = "João";
$lista_nomes[] = "José";
$lista_nomes[] = "Maria";
$lista_nomes[] = "Joana";

// reset($lista_nomes);

$reverso = array_reverse($lista_nomes);

while (key($reverso) !== null) {
    echo("Olá, ").current($reverso)."<br>";
    next($reverso);
}

echo "<hr>";

foreach ($lista_nomes as $nome) {
    echo "Olá, $nome! <br>";
}