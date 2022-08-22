<?php
session_start();
$text = substr(str_shuffle("0123456789123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz"), 0, 5); // string yang akan diacak membentuk captcha 0-z dan sebanyak 6 karakter
$_SESSION["vercode"] = $text;
$height = 30;
$width = 70;
$image_p = imagecreate($width, $height);
$black = imagecolorallocate($image_p,  0, 255, 255);
$white = imagecolorallocate($image_p, 0, 0, 128);
$font_size = 30;
imagestring($image_p, $font_size, 5, 5, $text, $white);
imagejpeg($image_p, null, 80);
