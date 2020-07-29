<?php

function trataNome($nome) {
    if (!$nome) {
        throw new Exception("Nenhum nome foi informado.", 1);
    }
    echo ucfirst($nome) . "<br>";
}

try {
    trataNome("Eliseu");
    trataNome("");
} catch (Exception $e) {
    echo $e->getMessage() . "<br>";
} finally {
    echo "Executou o try!";
}