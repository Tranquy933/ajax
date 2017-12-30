   <?phpMang b:
   // tao mang so chan ngau nhien khong trung (tu 2 den 100) co n phan tu (n<10)
function so_chan($n)
{
    $mang = array();
    for ($i=0; $i < $n; $i++) { 
        do{
            $s = rand(2,100);
        } while($s % 2 != 0 || in_array($s, $mang) == true);
            $mang[$i] = $s;
    }
    return $mang;
}
echo "<pre>";
echo "so chan ngau nhien <br>";
$mang = so_chan(10);
print_r($mang);
echo "</pre>";

// viet ham tao mang ngau nhien n phan tu co gia tri tu -50 den 50
function phan_tu($n)
{
	$arr = array();
	while ($n-- > 0) 
	{
		$arr[] = rand(-50,50);
	}
	return $arr;
} 

// viet ham cho biet so luong lien tiep nhieu nhat
function dem($arr)
{
	$n = count($arr);
	$dem_min = 0;
	$dem_max = 0;
	for ($i=0; $i < $n; $i++) { 
		if ($arr[$i] > 0) {
			$dem_min ++;
		}
		else{
			if($dem_min > $dem_max){
				$dem_min = $dem_max;
				$dem_min = 0;
			}
		}
	}
	return ($dem_min > $dem_max) ? $dem_min : $dem_max;
}
// Viet ham sap sep mang tang dan
function sap_xem_tang_dan($arr)
{
	$n = count($arr);
	for ($i=0; $i < $n; $i++) { 
		for ($j = ($i+ 1); $j < $n; $j++) { 
			if($arr[$i] > $arr[$j]){
				$t = $arr[$i];
				$arr[$i] = $arr[$j];
				$arr[$j] = $t;
			}
		}
	}
	return $arr;
}

	// Viet ham chen mot phan tu x bat ky vao vi tri y
	function chen($arr, $x, $y)
	{
		$n = count($arr);
		for ($i=$n; $i < $y; $i--) { 	
			$arr[$i] = $arr[$i - 1]; 
		}
		$arr[$y] = $x;
		return $arr;
	}
$arr = phan_tu(10);
$dem = dem($arr);
$arr = sap_xem_tang_dan($arr);
$arr = chen($arr, 10, 5);
// test
echo "<pre>";
echo "phan tu <br>";
print_r($arr);
echo "So phan tu lien tiep nhieu nhat la : $dem <br />";
echo "sap xep: \n";
$mang = sap_xem_tang_dan($arr);
print_r($mang);
echo "chen so 10 vao vi tri so 5 : \n";
print_r($arr);
echo "</pre>";


function xap_xep($arr)
{
	$n = count($arr);
	for ($i=0; $i < $n; $i++) { 
		for ($j=($i+1); $j < $n; $j++) { 
			if($arr[$i] > $arr[$j]) {
				$t = $arr[$i];
				$arr[$i] = $arr[$j];
				$arr[$j] = $t;
			} 
		}
	}
	return $arr;
}
echo "<pre>";
echo "xap xep : <br />";
print_r(xap_xep($arr));

function xap_xep_giam_dan($arr)
{
	$n = count($arr);
	for ($i=0; $i < $n; $i++) { 
		for ($j=($i+1); $j < $n; $j++) { 

			if($arr[$i] < $arr[$j]){
				$t = $arr[$i];
				$arr[$i] = $arr[$j];
				$arr[$j] = $t;			
			}
		}
	}
	return $arr;
}
echo "<pre>";
echo "xap xep giam dan <br>";
print_r(xap_xep_giam_dan($arr));

function xap_xep_gai_dan($arr)
{
	$n = count($arr);
	for ($i=0; $i < $n; $i++) { 
		for ($j=($i + 1); $j < $n; $j++) { 
			if($arr[$i] < $arr[$j]) {
				$t = $arr[$j];
				$arr[$j] = $arr[$i];
				$arr[$i] = $t;
			}
		}
	}
	return $arr;
}

echo "<pre>";
echo "giam dan";
print_r(xap_xep_gai_dan($arr));


// Viet ham chen mot phan tu x bat ky vao vi tri y
	
	function chen_phan_tu($arr, $x, $y)
	{
		$n = count($arr);
		for ($i=$n; $i < $y; $i--) { 
			$arr[$i] = $arr[$i - 1];
		}
		$arr[$y] = $x;
		return $arr;
	}
?>
