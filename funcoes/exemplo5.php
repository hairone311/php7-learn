<?php

$a = 10;
// Passagem de parâmetro por valor
function trocaValor($b) {
    $b += 50;
    return $b;
}

echo trocaValor($a);

echo "<br>";

echo $a;

echo "<br>";

// Passagem de parâmetro por referencia
function trocaValor2(&$b) {
    $b += 50;
    return $b;
}

echo trocaValor2($a);

echo "<br>";

echo trocaValor2($a);

echo "<br>";

echo $a;