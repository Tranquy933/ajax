<?php 
for($i = 1; $i <=10; $i++){ 
?>
	<table style="float:left"> 
	<?php     
	    for($j = 1; $j <=10; $j++){ 
	        $t = $i * $j; 
	?> 
		<tr> 
			<td> <?php echo "$i x $j = $t"; ?> </td> 
		</tr> 
	<?php 
		} 
	?> 
	</table> 
<?php     
} 
?>


