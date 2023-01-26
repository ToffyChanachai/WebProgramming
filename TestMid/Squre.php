<?php
$x = 180; $y = 110;
$image=imagecreatetruecolor($x, $y);

//set red color
$red    = imagecolorallocatealpha($image, 255, 0, 0, 75);
imagefilledrectangle($image, 0, 0, $x, $y, $red);

header('Content-type: image/png');
ImagePNG($image);
ImageDestroy($image);
?>