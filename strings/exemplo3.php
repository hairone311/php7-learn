<?php

$empresa = "Hairone";

$empresa = str_replace("o", "0", $empresa);
$empresa = str_replace("e", "3", $empresa);
$empresa = str_replace("a", "4", $empresa);

echo $empresa;