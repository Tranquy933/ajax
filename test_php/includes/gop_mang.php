<?php 
	include("../includes/inc_mang.php");
	$arr1 = array(0,1,2,3,4,5,6,7,8,9);
	$arr2 = array(5,6,7,8,9,10,11);	
	$ar = mix_array($arr1, $arr2);
	$n = array_unique($ar);
	$a = implode(',', $arr1);
	$b = implode(',', $arr2);
	$c = implode(',', $ar);
	$d = implode(',', $n);
?>
<p><span>Mang a:</span> <?php echo $a; ?> </p>
<p><span>Mang b:</span> <?php echo $b; ?> </p>
<p><span>Mang c=a+b:</span> <?php echo $c; ?> </p>
<p><span>Mang c=unique(c):</span> <?php echo $d; ?> </p>