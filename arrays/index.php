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

var_dump($lista_nomes);
echo count($lista_nomes); // retorna o tamanho do array
echo("<hr>");
echo($lista_nomes[3]);
echo("<hr>");
$lista_nomes_tamanho = count($lista_nomes);
for ($i = 0; $i < $lista_nomes_tamanho; $i++) {
    echo("Olá, $lista_nomes[$i]")."<br>";
}
echo("<hr>");
