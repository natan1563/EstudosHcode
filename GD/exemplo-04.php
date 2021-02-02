<?php 

header("Content-type: image/jpeg");

$file = "wallpaper.jpg";

$newWidth = 256;
$newHeight = 256;

list($oldWidth, $oldHeight) = getimagesize($file);

$newImage = imagecreatetruecolor($newWidth, $newHeight);
$oldImage = imagecreatefromjpeg($file);

imagecopyresampled($newImage, $oldImage, 0, 0, 0, 0, $newWidth, $newHeight, $oldWidth, $oldHeight);

imagejpeg($newImage);

imagedestroy($oldImage);

imagedestroy($newImage);
?>