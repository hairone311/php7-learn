<?php

class Pessoa {
    public $nome; // Atributo

    public function falar() {
        return "Meu nome é " . $this->nome;
    } // Método
}

$eliseu = new Pessoa();
$eliseu->nome = "Eliseu";
echo $eliseu->falar();