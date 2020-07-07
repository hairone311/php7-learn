<?php
/*
Comentario
 */
$anoNascimento = 1998;
$nome = "Eliseu";
$apelido = "Hairone";

$nomeCompleto = $nome . " " . $apelido;
echo $nomeCompleto;
echo "<br>";

exit;

$classe = "PHP";
// Remove a variavel da memoria
unset($classe);

if (isset($classe)) {
    echo $classe;
}