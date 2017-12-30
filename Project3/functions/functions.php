<?php
// function getValue($name, $type, $method, $default){
// 	if ($method=="POST"){
// 		$name=isset($_POST[$name]) ? $_POST[$name] : $default;
// 	}
// 	else if($method=="GET"){
// 		$name=isset($_GET[$name]) ? $_GET[$name] : $default;
// 	}
// 	settype($name,$type);
// 	return $name;
// }

// "int","str", "arr", "dbl"
function getValue($name, $type = "str", $method = "POST", $default = "") {
	$method = strtoupper($method);
	$submit_value = $default;
	switch ($method) {
	case 'POST':
		$submit_value = isset($_POST[$name]) ? $_POST[$name] : $default;
		break;
	case 'GET':
		$submit_value = isset($_GET[$name]) ? $_GET[$name] : $default;
		break;
	case 'COOKIE':
		$submit_value = isset($_COOKIE[$name]) ? $_COOKIE[$name] : $default;
		break;
	case 'SESSION':
		$submit_value = isset($_SESSION[$name]) ? $_SESSION[$name] : $default;
		break;
	}
	switch ($type) {
	case 'int':
		$submit_value = intval($submit_value);
		break;
	case 'str':
		$submit_value = strval($submit_value);
		break;
	case 'arr':
		$submit_value = (array) $submit_value;
		break;
	case 'dbl':
		$submit_value = (double) $submit_value;
		break;
	}
	return trim($submit_value);
}


// resize anh khi upload
function resizeImages($image,$new_w,$urlUp){
	$data = getimagesize($image);
	$w = $data[0];
	$h = $data[1];
	$width = $new_w;
    $height = ($new_w/$w)*$h;
    $image2 = imagecreatetruecolor($width, $height);
    $type = exif_imagetype($image);
    switch ($type) {
	     case IMAGETYPE_GIF:
		       $image1 = imagecreatefromgif($image);
		       imagecopyresampled($image2,$image1, 0, 0, 0, 0, $width, $height, $w, $h);
		       imagegif($image2, $urlUp, 100);
	      break;
	     case IMAGETYPE_PNG:
		       $image1 = imagecreatefrompng($image);
		       imagecopyresampled($image2,$image1, 0, 0, 0, 0, $width, $height, $w, $h);
		       imagepng($image2, $urlUp,9);
	      break;
	     case IMAGETYPE_JPEG:
		       $image1 = imagecreatefromjpeg($image);
		       imagecopyresampled($image2,$image1, 0, 0, 0, 0, $width, $height, $w, $h);
		       imagejpeg($image2, $urlUp, 100);
	      break;
    }
    return true;
}


?>