<?php

interface Veiculo {
    public function acelerar($velocidade);
    public function travar($velocidade);
    public function trocarMarcha($numero);
}

abstract class Automovel implements Veiculo {
    public function acelerar($velocidade) {
        echo "Veiculo acelerou ate " . $velocidade . " Km/h";
    }

    public function travar($velocidade) {
        echo "Veiculo travou ate " . $velocidade . " Km/h";
    }

    public function trocarMarcha($numero) {
        echo "O veiculo engatou a marcha " . $numero;
    }
}