<?php

class Pessoa {
    public $nome = "Eliseu";
    protected $idade = 21;
    private $senha = 12345;

    public function verDados() {
        echo $this->nome . "<br>";
        echo $this->idade . "<br>";
        echo $this->senha . "<br>";
    }
}

class Programador extends Pessoa {
    public function verDados() {
        echo get_class($this) . "<br>";
        echo $this->nome . "<br>";
        echo $this->idade . "<br>";
        echo $this->senha . "<br>";
    }
}

$objecto = new Programador();

// echo $objecto->senha . "<br>";
$objecto->verDados();