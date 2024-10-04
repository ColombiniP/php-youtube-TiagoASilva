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

include 'Animal.php';

$gato = new Animal("Anibal", "Laranja", "Angora");

$gato->dormir();
$gato->comer("Wiskas");

echo "<hr>";

$cao = new Animal("Vladimir","preto","dog_alemao");

$cao->dormir();