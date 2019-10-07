<?php

require_once('pessoa.php');

$pessoa = new pessoa('Saulo Alberto', 1.87, 90, '10-02-2002', 12345678909);
$pessoa2 = new pessoa('Ali Babá', 1.57, 97, '26-11-1952', 12345678909123);

var_dump($pessoa);
var_dump($pessoa2);

echo $pessoa->validaCPF() . "<br>";
echo $pessoa2->validaCPF() . "<br>";

echo $pessoa->calculaIdade() . "<br>";
echo $pessoa2->calculaIdade() . "<br>";

echo $pessoa->calculaIMC() . "<br>";
echo $pessoa2->calculaIMC() . "<br>";
