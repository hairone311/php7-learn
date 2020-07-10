<?php

$json = '[{"Nome":"Eliseu","Idade":20},{"Nome":"Hairone","Idade":21}]';

$data = json_decode($json, true);

var_dump($data);