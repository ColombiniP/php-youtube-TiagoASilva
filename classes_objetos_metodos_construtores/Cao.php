<?php
include_once 'Animal.php';

class Cao extends Animal{

    public function latir() 
    {
        echo "$this->nome está latindo<br>";
    }

}