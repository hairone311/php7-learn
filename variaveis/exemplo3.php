<?php
/**
 * Tipos Basicos em PHP
 */
$nome = "PHP7"; // String
$github = 'hairone311'; // String

$ano = 1998; // Int

$salario = 0.0; // Float

$bloqueado = false; // Boolean

/**
 * Tipos Compostos
 */
$frutas = array("Laranja", "Manga", "Uva"); // Array
// echo $frutas[2];

$nascimento = new DateTime(); // Object
// var_dump($nascimento);

$arquivo = fopen("exemplo3.php", "r"); // Resource
var_dump($arquivo);

/**
 * Tipos Especiais
 */
$nulo = NULL; // NULL