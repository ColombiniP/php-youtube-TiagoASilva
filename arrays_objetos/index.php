<?php
"<html lang='pt-br'>";

include_once 'Gato.php';
include_once 'Cao.php';

// i | value 
// [0] new Gato("Alexandre");
// [1] new Gato("Iris",);
// [2] new Gato("Voldemort");

// $gato1 = new Gato("Alexandre");
// $gato2 = new Gato("Iris",);
// $gato3 = new Gato("Voldemort");

// $arr_gatos = array(
//     new Gato("Alexandre"),
//     new Gato("Iris",),
//     new Gato("Voldemort"),
// );

// var_dump($arr_gatos);

$arr_gatos = array();

$arr_gatos[] =  new Gato("Alexandre");
$arr_gatos[] =  new Gato("Iris");
$arr_gatos[] =  new Gato("Voldemort");

for ($i = 0; $i < count($arr_gatos); $i++) {

    echo "O gato na posição $i é ". $arr_gatos[$i]->nome . "<br>";

}

echo "<hr>";

// Declarando arrays do db ficticio
$faz_de_conta_que_vem_do_db = array("Rex", "Toto", "Rimtimtim");

// arrays de objetos caes
$arr_caes = array();

// preenchendo o array de objetos caes
for ($i = 0; $i < sizeof($faz_de_conta_que_vem_do_db); $i++) {
    $arr_caes[] = new Cao($faz_de_conta_que_vem_do_db[$i]);
}

var_dump($arr_caes);
echo "<hr>";

// Declarando arrays do db ficticio gatos
$fazDeContaQueVemDoDbDeGatos = ["Anibal","Alexandre","Voldemort"];

// arrays de objetos gatos
$arr_gatos_db = [];

// populando o array de obejetos de gatos
for ($i = 0; $i < count($fazDeContaQueVemDoDbDeGatos); $i++) {
    $arr_gatos_db[] = new Gato($fazDeContaQueVemDoDbDeGatos[$i]);
}

var_dump($arr_gatos_db);

echo "<hr>";

// mostrando o conteudo

for ($i = 0; $i < count($arr_caes); $i++) {
    echo "O cão na posição $i é " . $arr_caes[$i]->nome."<br>";
}

echo "<hr>";

for ($i = 0; $i < count($arr_gatos_db); $i++) {
    echo "O gato na posição $i é " . $arr_gatos_db[$i]->nome."<br>";
}