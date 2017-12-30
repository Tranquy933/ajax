<?php 

//gop mang 1 chieu
	
	function mix_array($x, $y)
	{	
		foreach ($y as $key => $value) {

			$x[] = $value;
		}
		return $x;
	}

	function array_unique_v2($ar)
	{	
		$n = count($ar);
		for ($i=0; $i < $n; $i++) { 
			for ($j=($i+1); $j < $n; $j++) { 	
				if (isset($ar[$i]) && $ar[$i] == $ar[$j]) {
					unset($ar[$i]);
				}
			}
		}
		return $ar;
	}

?>
