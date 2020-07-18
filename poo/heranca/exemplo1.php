<?php

class Documento {
    private $numero;

    public function getNumero() {
        return $this->numero;
    }

    public function setNumero($numero) {
        $this->numero = $numero;
    }
}

class BI extends Documento {
    public function validar(): bool {
        $numeroBI = $this->getNumero();
        return true;
    }
}

$doc = new BI();
$doc->setNumero("154277205247E");
var_dump($doc->validar());

echo "<br>";

echo $doc->getNumero();