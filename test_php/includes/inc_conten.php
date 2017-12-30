<?php
	$mang = array();
	for ($i=0; $i < 10; $i++) { 
	 	$mang[] = rand(0,10);
	 }

	 $n = count($mang);
	 $tong = 0;
	 for ($i=0; $i < $n; $i++) { 
	 	$tong = $tong + $mang[$i];
	 }

	 echo "<pre>";
	 print_r($mang);
	 echo "Tong : $tong";
?>