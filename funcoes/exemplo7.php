<?php

function soma(int...$valores) {
    return array_sum($valores);
}

echo soma(2, 9, 17, 1, 1);

echo "<br>";

echo soma(14, 8);