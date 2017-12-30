<?php 
	$mang = array();
	for ($i=1; $i < 100; $i++) { 
		$mang[] = $i;
	}
	$sochinhphuong = [];
	foreach ($mang as $value) {
		
		// $sql = sqrt(0);
		// for ($i=1; $i < $value; $i++) { 
		// 	if ($value==$i*$i) {
		// 		$value = $i*$i; 
		// 		$sql = sqrt($value);

		// 	}
		// }
		// if ($value = $sql*$sql) {
		// 	$sochinhphuong[] = $value;

		// }
		
		$sql = strval(sqrt($value));		
		if (!strpos($sql, ".")) {
			$sochinhphuong[] = $value;
		}
		
	}
	echo "<pre>";
	print_r($mang);
	print_r($sochinhphuong);
?>