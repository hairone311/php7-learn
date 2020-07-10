<?php

$pessoas = array();

array_push(($pessoas), array(
    "Nome" => "Eliseu",
    "Idade" => 20,
));

array_push(($pessoas), array(
    "Nome" => "Hairone",
    "Idade" => 21,
));

echo json_encode($pessoas);