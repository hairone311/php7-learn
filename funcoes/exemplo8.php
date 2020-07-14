<?php

function soma(float...$valores): float {
    return array_sum($valores);
}

echo soma(9.5, 19.75);

echo "<br>";

echo soma(14.75, 15.5);