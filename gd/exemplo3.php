<?php

$image = imagecreatefromjpeg("certificado.jpg");

$titleColor = imagecolorallocate($image, 0, 0, 0);
$gray = imagecolorallocate($image, 100, 100, 100);

imagettftext($image, 32, 0, 320, 250, $titleColor, "fonts" . DIRECTORY_SEPARATOR . "Bevan" . DIRECTORY_SEPARATOR . "bevan.ttf", "CERTIFICADO");
imagettftext($image, 32, 0, 375, 350, $titleColor, "fonts" . DIRECTORY_SEPARATOR . "Playball" . DIRECTORY_SEPARATOR . "playball.ttf", "Eliseu Hairone");
imagettftext($image, 3, 0, 440, 150, $titleColor, "fonts" . DIRECTORY_SEPARATOR . "Bevan" . DIRECTORY_SEPARATOR . "bevan.ttf", utf8_decode("Concluído em ") . date("d/m/Y"));

header("Content-type: image/jpeg");

imagejpeg($image);

imagedestroy($image);