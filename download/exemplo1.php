<?php

$link = "https://www.google.com/images/branding/googlelogo/1x/googlelogo_color_272x92dp.png";

$content = file_get_contents($link);

$parse = parse_url($link);

$baseName = basename($parse["path"]);

$file = fopen("logo.png", "w+");

fwrite($file, $content);

fclose($file);

?>

<img src="<?=$baseName?>" alt="Google Logo">