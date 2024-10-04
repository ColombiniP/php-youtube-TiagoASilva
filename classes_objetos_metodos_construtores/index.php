<?php

/**
 * classes são como uma plata da arquitetura
*
* - atributos = caracteristicas
* - metodos = acoes 
*
* objeto é a casa depois de pronta
*
 */

// include 'Animal.php';
require 'Gato.php';
require 'Cao.php';

// $gato = new Animal("Anibal", "Laranja", "Angora");

// $gato->dormir();
// $gato->comer("Wiskas");

// echo "<hr>";

// $cao = new Animal("Vladimir","preto","dog_alemao");

// $cao->dormir();

// echo "<hr>";

$gato_salazar = new Gato("Salazar","Cinza","undefinid");
$gato_salazar->comer("Ração");
$gato_salazar->miar();

echo "<hr>";

$cao = new Cao("Noris", "Branco", "Colle");
$cao->latir();