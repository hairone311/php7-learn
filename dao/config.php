<?php

spl_autoload_register(function ($class_Name) {
    $fileName = $class_Name . ".php";
    if (file_exists($fileName)) {
        require_once ($fileName);
    }
});