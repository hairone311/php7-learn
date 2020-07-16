<?php

class Pessoa {
    public $nome = "Rasmus";
    protected $idade = 48;
    private $senha = 12345;

    public function verDados() {
        echo $this->nome . "<br>";
        echo $this->idade . "<br>";
        echo $this->senha . "<br>";
    }
}

$objecto = new Pessoa();

// echo $objecto->senha . "<br>";
$objecto->verDados();