<?php

function ola($texto, $perido = "Bom dia") {
    return "Ola $texto, $perido!<br>";
}

echo ola("mundo");
echo ola("", "Boa noite");
echo ola("Eliseu", "Boa tarde");
echo ola("Hairone", "");