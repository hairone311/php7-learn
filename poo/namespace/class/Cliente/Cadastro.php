<?php

namespace Cliente;

class Cadastro extends \Cadastro {
    public function registrarVenda() {
        echo "Nova venda registada para o cliente " . $this->getNome();
    }
}