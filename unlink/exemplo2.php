<?php

$dir = "arquivos";
if (!is_dir($dir)) {
    mkdir($dir);
    echo "Diretório criado com sucesso!";
}

foreach (scandir($dir) as $item) {
    if (!in_array($item, array(".", ".."))) {
        unlink($dir . DIRECTORY_SEPARATOR . $item);
    }
}

echo "Arquivos removidos!";

// $file = "doc2.txt";
// fopen($dir . DIRECTORY_SEPARATOR . $file, "w+");