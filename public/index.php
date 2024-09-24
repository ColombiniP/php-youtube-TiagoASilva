<?php

$arr = [
    1,2,3,4,5,6,7,8,9,10,
    "a","b","c","d","e","f","g","h","i","j",
    true, false,
    ["Texto qualquer"],["1",3.5],
];

var_dump($arr);

$rand = [];
for ($i = 0; $i < 100; $i++) {
    $rand += [rand(1,100)];
}

var_dump("Paschoal Colombini");
var_dump($rand);