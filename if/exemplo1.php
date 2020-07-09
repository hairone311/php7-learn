<?php

$qualSuaIdade = 125;

$idadeCrianca = 12;
$idadeMaior = 18;
$idadeMelhor = 65;

if ($qualSuaIdade < $idadeCrianca) {
    echo "Criança";
} elseif ($qualSuaIdade < $idadeMaior) {
    echo "Adolescente";
} elseif ($qualSuaIdade < $idadeMelhor) {
    echo "Adulto";
} else {
    echo "Idoso";
}

echo "<br>";

echo ($qualSuaIdade < $idadeMaior) ? "Menor de idade." : "Maior de idade."; // Operador ternário