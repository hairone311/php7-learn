<?php

function ola() {
    $argumentos = func_get_args();
    return var_dump($argumentos);
}

ola("Bom dia", 10);