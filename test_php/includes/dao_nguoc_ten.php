<?php 

// $str = "tran van quy";
// $str1 = explode(" ",$str);
// for($i=count($str1)-1; $i>=0; $i--){
// 	echo $str1[$i]." ";
// }

// $string="tran van quy"; 
// echo strrev($string); 

$str='tran van quy que quan phu tho';
$chars=str_split($str);
$n = count($chars);
$t = [];
    for ($i=0; $i < $n; $i++) { 
    	$count=0;
    	for ($j=0; $j < $n; $j++) { 
    		if($chars[$i]== $chars[$j])
    		{
  				$count++;
   	 		}
    	}
    	$t[$chars[$i]] = $count;
    }
?>

<table>
	<tr>
		<td><span>Ky tu</span></td>
		<td><span>So lan xuat hien</span></td>
	</tr>
<?php foreach($t as $k => $v): ?>
    <tr>
        <td><?php echo $k ?></td> 
        <td><?php echo $v ?></td> 
    </tr>
<?php endforeach; ?>
</table>