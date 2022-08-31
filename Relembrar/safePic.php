<?php
session_start();
if($_REQUEST['checar']=='checar'){

    var_dump($_GET['code']);

    if(testaSafePic($_REQUEST['code'])){
        echo 'success';
    }
    die();


}else {
//image.php

    $random_alpha = md5(rand());

    $captcha_code = substr($random_alpha, 0, 6);

    $_SESSION['intratec']['captcha_code'] = $captcha_code;

    header('Content-Type: image/png');

    $image = imagecreatetruecolor(100, 38);

    $background_color = imagecolorallocate($image, 52, 152, 219);

    $text_color = imagecolorallocate($image, 255, 255, 255);

    imagefilledrectangle($image, 0, 0, 200, 38, $background_color);

    $font = dirname(__FILE__) . '\28days.ttf';
    imagettftext($image, 20, 0, 10, 31, $text_color, $font, $captcha_code);

    imagepng($image);

    imagedestroy($image);
}


?>