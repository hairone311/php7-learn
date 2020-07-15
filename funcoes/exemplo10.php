<?php

function teste($callback) {
    // Processo lento
    $callback();
}

teste(function () {
    echo "Terminou!";
});