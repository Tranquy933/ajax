<?php 
$mang = array();
	for ($i=0; $i < 10; $i++) { 
	 	$mang[] = rand(0,10);
	 }
	 $tong = 0;
	 $n =0;
	foreach ($mang as $k => $v) {
		if($v%2 == 0){
			$n++;	
			$tong = $tong + $v;	

		}
	}
	$tb = $tong/$n;
	echo "<pre>";
	print_r($mang);
	echo "Trung binh : $tb";
?>