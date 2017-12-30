<?php 
	$ar = array();
	for ($i=0; $i <= 10; $i++) { 
		$ar[] = rand(0,10);
	}
	echo "<pre>";
	print_r($ar);
		
		$n = count($ar);
		$t = array();
		for ($i=0; $i < $n; $i++) { 
			$count = 0;
			for ($j=0; $j < $n; $j++) { 	
				if ($ar[$i] == $ar[$j]) {
					$count++;
					
				}
			}
			$t[$ar[$i]] = $count;
		}
	echo '<pre>';
	print_r($t);
	

	// $n = count($ar);
	// $result = [];
	// foreach ($ar as $k => $v) {
	// 	$count = 0;
	// 	foreach($ar as $v1) {
	// 		if($v == $v1) {
	// 			$count++;
	// 			$result[$v] = $count;
	// 		}
	// 	}
	// }

	// echo '<pre>';
	// print_r($result);



?>