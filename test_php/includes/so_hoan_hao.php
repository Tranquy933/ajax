<?php  
	$mang = array();
	for ($i=0; $i < 100	; $i++) { 
	 	$mang[] = $i;
	 }	
	$sohoanhao = [];
	foreach ($mang as $key => $value) {
		$sum = 0;
		for ($i=1; $i < $value ; $i++) { 
			if ( $value%$i == 0){
				$sum += $i;
			}
		}
		if($sum == $value){
			$sohoanhao[] = $value;
		
		}
	}
	
	$tong = 0;
	$t = 0;
	foreach ($sohoanhao as $key => $value) {
		$t++;
		$tong = $tong + $value;
	}
	$tb = $tong/$t;

	echo "<pre>";
	print_r($mang);
	print_r($sohoanhao);
	echo "Trung binh : $tb";
?>