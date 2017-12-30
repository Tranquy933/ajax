<?php 
$mang = array();
	for ($i=0; $i < 10; $i++) { 
	 	$mang[] = rand(0,10);
	 }

	 $tong = 0;
	 foreach ($mang as $key => $value) {
	 	if($value % 2 == 0){
	 		$tong = $tong + $mang[$i];
	 	}
	 }
	 echo "<pre>";
	 print_r($mang);
	 echo "Tong: $tong";

?>