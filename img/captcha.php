<?php
session_start();

$captcha_num = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz';
$captcha_code = substr(str_shuffle($captcha_num), 0, 6);
$_SESSION["captcha_code"] = $captcha_code;

$target_layer = imagecreatetruecolor(70,30);
$captcha_background = imagecolorallocate($target_layer, 240, 83, 48);
imagefill($target_layer,0,0,$captcha_background);
$captcha_text_color = imagecolorallocate($target_layer, 0, 0, 0);
imagestring($target_layer, 10, 10, 10, $captcha_code, $captcha_text_color);

header("Content-type: image/jpeg");
imagejpeg($target_layer);
?>