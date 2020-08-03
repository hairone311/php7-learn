<?php

header("Content-type: image/jpeg");

$file = "wallpaper.jpg";

$newWidth = 256;
$newHeight = 256;

$data = getimagesize($file);
list($old_width, $old_heigth) = getimagesize($file);

$newImage = imagecreatetruecolor($newWidth, $newHeight);
$oldImage = imagecreatefromjpeg($file);

imagecopyresampled($newImage, $oldImage, 0, 0, 0, 0, $newWidth, $newHeight, $old_width, $old_heigth);

imagejpeg($newImage);

imagedestroy($oldImage);
imagedestroy($newImage);