<!-- <?php
	$arr = array(
		'1' => 'thang 1',
		'2' => 'thang 2',
		'3' => 'thang 3',
		'4' => 'thang 4',
		'5' => 'thang 5',
		'6' => 'thang 6',
		'7' => 'thang 7',
		'8' => 'thang 8',
		'9' => 'thang 9',
		'10' => 'thang 10',
		'11' => 'thang 11',
		'12' => 'thang 12',
	);
	$ngay = range(1 ,31);
	$nam = range(1990, 2000);
?>


<div class="time">
	<select>
		<?php foreach ($arr as $key => $value) {
		?>
			<option><?php echo $value; ?></option>
		<?php
		} 
		?>
		
	</select>
	<select>
		<?php foreach ($ngay as $key => $value) {
		?>
			<option><?php echo $value ?> </option>
		<?php
		}			
		?>
		
	</select>
	<select>
		<?php  foreach ($nam as $key => $value) {
		?>
			<option><?php echo $value ?></option>
		<?php
		} 
		?>
	</select>
</div> -->


<?php 
	//bai tap tinh diem trung binh hoc tap cua hoc sinh
	//yeu cau:
	// Cong thuc tinh diem trung binh hoc sinh &tb = ($hk1 + $hk2 * 2) /3
	// neu diem trung binh < 5 thi o lai lop
	// neu diem trung binh >= 5 thi duoc len lop
	//- xep loai hoc luc cho hoc sinh
	// neu diem trung binh >=8 hoc sinh gioi
	// neu diem trung binh >=6.5 va < 8 thi xep loai kha
	// neu diem trung binh >= 5 va <6 thi xep loai trung binh
	//neu diem trung binh <5 thi xep loai yeu
					//giai 
	if(isset($_POST['submit'])){
		if(isset($_POST['hk1']) && isset($_POST['hk2'])){
			$hk1 = $_POST['hk1'];
			$hk2 = $_POST['hk2'];
			$tb = ($hk1 + $hk2*2)/3;
			$tb = round($tb,2);
			if($tb >= 5)
				$kq = "duoc len lop";
			else
				$kq = "khong duoc len lop";
			if ($tb >= 8) {
				$xl = "hoc sinh gioi";
			}
			else if ($tb >= 6.5 && $tb < 8){
				$xl = "hoc sinh kha";
			}
			else if($tb >= 5 && $tb <= 6){
				$xl = "hoc sinh trung binh";
			}
		}
		else {
			$xl = "hoc sinh yeu";	
		}
	}
?>

<div class="diem_tb">
	<form name="xep_loai_tb" method="POST">
		<table>
			<tr>
				<td class="diem" colspan="2">Diem trung binh cho hoc sinh</td>
			</tr>
			<tr>
				<td><label>Diem hoc ky 1</label></td>
				<td><input type="text" name="hk1" value="<?php if(isset($hk1)){ echo $hk1; } ?>"></td>
			</tr>
			<tr>
				<td><label>Diem hoc ky 2</label></td>
				<td><input type="text" name="hk2" value="<?php if(isset($hk2)){ echo $hk2; } ?>"></td>
			</tr>
			<tr>
				<td><label>Diem trung binh</label></td>
				<td><input type="text" name="tb" value=" <?php if(isset($tb)){echo $tb;} ?>" disabled = true;></td>
			</tr>
			<tr>
				<td><label>Ket qua</label></td>
				<td><input type="text" name="kq" value="<?php  if(isset($kq)){ echo $kq; }?>" disabled = true;></td>
			</tr>
			<tr>
				<td><label>Xep loai</label></td>
				<td><input type="text" name="xl" value="<?php  if(isset($xl)){ echo $xl; }?>" disabled = true;></td>
			</tr>
			<tr>
				<td class="td_submit" colspan="2"><input type="submit" name="submit" value="Xem ket qua"></td>
			</tr>
		</table>
	</form>
</div>

<style type="text/css">
	.diem_tb table{
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
</style>