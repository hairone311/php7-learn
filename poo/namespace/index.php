<?php

require_once "config.php";

use Cliente\Cadastro;

$cad = new Cadastro();
$cad->setNome("Eliseu Hairone");
$cad->setEmail("eliseuarviscoh@gmail.com");
$cad->setSenha("123456");

$cad->registrarVenda();