<?php 
$mang = array();
	for ($i=0; $i < 10; $i++) { 
	 	$mang[] = rand(0,10);
	 }
	$songuyento = [];
	foreach ($mang as $key => $value) {
		$t = 0;

		for($i = 1; $i <= $value; $i++ ) {

			if($value % $i == 0) {
				$t ++;
			}
		}

		if($t == 2) {
			$songuyento[] = $value;
		}
	}

	// echo $n;
	echo "<pre>";
	print_r($mang);
	print_r($songuyento);
	 

?>