<?php

require_once "config.php";

$hairone = new Usuario();

$hairone->loadById(7);

echo $hairone;