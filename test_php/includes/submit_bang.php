<!-- 
	

<?php
$arr = array();
for ($a=0; $a < 30; $a++) { 
	$arr[] = rand(0,30);
}
echo "<pre>";
print_r($arr);
$t = [];
if (isset($_POST['submit'])) {
		$cot  = $_POST['cot'];
		$hang = $_POST['hang'];
		for($tr=1;$tr<=$cot;$tr++){ 
	        for($td=1;$td<=$hang;$td++){ 
	               $t[] = $tr*$td;
	        } 
	    print_r($t);
		}

	}
?>

<table>
	<tr>
		<td><label>Nhap So Hang</label></td>
		<td><input type="text" name="cot" value="<?php if(isset($cot)){ echo $cot; } ?>"></td>
	</tr>
	<tr>
		<td><label>Nhap So Cot</label></td>
		<td><input type="text" name="hang" value="<?php if(isset($hang)){ echo $hang; } ?>"></td>
	</tr>
	<tr>
		<td class="td_submit" colspan="2"><input type="submit" name="submit" value="Xem ket qua"></td>
	</tr>
</table>

<?php foreach($t as $k => $v): ?>
    <tr>
        <td><?php echo $k ?></td> 
        <td><?php echo $v ?></td> 
    </tr>
<?php endforeach; ?>


<style type="text/css">
	.ket_qua{
		    width: 500px;
		    margin: 0 auto;
		    height: 200px;
		    margin-top: 50px;
		    border: 1px solid #284a28;
		    background: #ececec;
	}
	.ket_qua p{
		    color: #000;
    		padding: 10px 20px;
	}
	.xuat_hien table{
			margin: 0 auto;
	}
	.td_submit{
			text-align: center;
	}
	.td_submit input{
			padding: 10px 10px;
			background: #00ffff;
	}
	.diem{
			text-align: center;
		    font-size: 15px;
		    text-transform: uppercase;
		    font-weight: bold;

	}
	input{
		    padding: 7px;
	}



<?php 

$rows = 10; // amout of tr 
$cols = 10;// amjount of td 
function drawTable($rows, $cols){
echo "<table border='1'>"; 

for($tr=1;$tr<=$rows;$tr++){ 
     
    echo "<tr>"; 
        for($td=1;$td<=$cols;$td++){ 
               echo "<td align='center'>".$tr*$td."</td>"; 
        } 
    echo "</tr>"; 
} 

echo "</table>";
}	
?> -->



<?php
	$table = '';
	if ($_POST) {// kiem tra xem da dc goi thong qua post
        $table .= '<table border="1">';
        for ($i = 0; $i < $_POST['hang']; $i++) {
            $table .= '<tr>';
            for ($j = 0; $j < $_POST['cot']; $j++) {
            	$n = rand(0,10);
                $table .= "<td>".$n."</td>";
            }
            $table .= '</tr>';
        }
        $table .= '</table>';
	}
?>
    <form action="" method="post">
        <table >
            <tr>
                <td ><label>Nhap So Cot</label></td>
                <td width="120"><input type="text" name="cot"></td>
            </tr>
            <tr>
                <td><label>Nhap So Hang</label></td>
                <td><input type="text" name="hang"></td>
            </tr>
            <tr>
                <td colspan="2" align="right"><input type="submit" value="Tao Bang"></td>
            </tr>
        </table>    
    </form>
    <br />
    <br />
<?php
    echo $table;
?>	

<style type="text/css">
	
	input{
		    padding: 7px;
	}
</style>