<?php

$nome = "Hairone"; // Escopo global

function teste() {
    global $nome;
    echo $nome;
}

function teste2() {
    $nome = "Eliseu"; // Escopo local dentro da funcao
    echo $nome . " no teste 2.";
}

teste();
teste2();