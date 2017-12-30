<?php
function getValue($name, $type = "str", $method = "POST", $default = 0){
	$returnVal = $default;
	$method = strtoupper($method);

	switch ($method) {
		case 'POST':
		  $returnVal = isset($_POST[$name]) ? $_POST[$name] : $default;
			break;
		case 'GET':
		  $returnVal = isset($_GET[$name]) ? $_GET[$name] : $default;
			break;
		case 'SESSION':
		  $returnVal = isset($_SESSION[$name]) ? $_SESSION[$name] : $default;
			break;
		case 'COOKIE':
			$returnVal = isset($_COOKIE[$name]) ? $_COOKIE[$name] : $default;
				# code...
			break;
	}
	switch ($type) {
		case 'int':
			$returnVal = intval($returnVal);
			break;
		case 'str':
			$returnVal = strval($returnVal);
			break;
		case 'array':
			$returnVal = (array)$returnVal;
			break;
		case 'double':
			$returnVal = (double)$returnVal;
			break;
	}
  return trim($returnVal);
  
}
function resize_image($file, $width, $height,$urlUp) {
	list($w, $h) = getimagesize($file); // gan bien vao  mang, nhan kich thuoc cua  hinh anh
	$new_w = $width;
	$ratio = $width/$w;
	$new_h = $ratio*$h;
	$new_img = imagecreatetruecolor($new_w, $new_h);
	// $image = imagecreatefromjpeg($file); // tao anh moi trong file
	// imagecopyresampled($new_img, $image, 0, 0, 0, 0, $new_w, $new_h, $w, $h); // sao chep thay doi kich thuoc anh moi thanh anh cu
	// imagejpeg($new_img, $urlUp, 100);// xuat hinh anh
  $type = exif_imagetype($file);
	    switch ($type) {
     case IMAGETYPE_GIF:
     	$image = imagecreatefromgif($file);
       imagecopyresampled($new_img,$image, 0, 0, 0, 0, $new_w, $new_h, $w, $h);
       imagegif($new_img, $urlUp, 100);
      break;
     case IMAGETYPE_PNG:
     $image = imagecreatefrompng($file);
       imagecopyresampled($new_img,$image, 0, 0, 0, 0, $new_w, $new_h, $w, $h);
       imagepng($new_img, $urlUp, 100);
      break;
     case IMAGETYPE_JPEG:
     $image = imagecreatefromjpeg($file);
       imagecopyresampled($new_img,$image, 0, 0, 0, 0, $new_w, $new_h, $w, $h);
       imagejpeg($new_img, $urlUp, 100);
      break;
    }

	// $extension = strtolower(substr($new_img, strrpos($new_img, '.'))); // dùng để chuyển đổi các kí tự trong chuỗi thành kí tự in thường.
	// if(!in_array($extension, array('.jpg', '.jpeg','.png','.gif','.bmp' ))){ // tim kiem value trong mang
	// 	$GLOBALS['errors'][] = 'khong dung dinh dang';
	// }
 // 	if (in_array($extension,array('.jpg', '.jpeg','.png','.gif','.bmp'))) { 
 // 		imagejpeg($file,$new_loc) or ($save_error = true); 
 // 	}

	return true;
}

?>
