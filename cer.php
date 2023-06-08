<?php 


//Set the Content Type
header('Content-type: image/jpeg');

// Create Image From Existing File
$jpg_image = imagecreatefromjpeg('certificate.jpg');

// Allocate A Color For The Text
$white = imagecolorallocate($jpg_image, 54, 12, 110);

// Set Path to Font File
$font_path = 'font.ttf';

$name_text = "Chetan Rohilla";

$date_text = date('jS F,Y');

$signature = imagecreatefrompng('signature.png');

imagettftext($jpg_image, 26, 0, 480, 400, $white, $font_path, $name_text);

imagettftext($jpg_image, 20, 0, 220, 670, $white, $font_path, $date_text);

/*signature on image*/
imagecopy($jpg_image, $signature, 780, 620, 0, 0, 200, 58);
/*signature on image*/

// Send Image to Browser
imagejpeg($jpg_image);

// Clear Memory
imagedestroy($jpg_image);
?>