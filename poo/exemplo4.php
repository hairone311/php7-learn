<?php

class Endereco {
    private $numero;
    private $cidade;

    public function __construct($numero, $cidade) {
        $this->numero = $numero;
        $this->cidade = $cidade;
    }

    public function __destruct() {
        // var_dump("Destruir");
    }

    public function __toString() {
        return $this->numero . ", " . $this->cidade;
    }
}

$meuEndereco = new Endereco("4.001", "Mocuba");
// var_dump($meuEndereco);

echo "<br>";

echo $meuEndereco;

echo "<br>";

// unset($meuEndereco);