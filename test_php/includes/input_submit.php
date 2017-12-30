<?php 
	$chuoi_moi = '';	
	if (isset($_POST['submit'])) {
		$chuoi = $_POST['chuoi'];
		$chen = $_POST['chen'];
		$vi_tri = $_POST['vi_tri'];
		$chuoi_moi = substr_replace($chuoi, $chen, $vi_tri, 0);
	}
?>
<div class="xuat_hien">
	<form name="toan_tu" method="POST">
		<table>
			<tr>
				<td><label>Nhap chuoi</label></td>
				<td><input type="text" name="chuoi" value="<?php if(isset($chuoi)){ echo $chuoi; } ?>"></td>
			</tr>
			<tr>
				<td><label>Chuoi can chen</label></td>
				<td><input type="text" name="chen" value="<?php if(isset($chen)){ echo $chen; } ?>"></td>
			</tr>
			<tr>
				<td><label>Vi tri chen</label></td>
				<td><input type="text" name="vi_tri" value="<?php if(isset($vi_tri)){ echo $vi_tri; } ?>"></td>
			</tr>
			<tr>
				<td class="td_submit" colspan="2"><input type="submit" name="submit" value="Xem ket qua"></td>
			</tr>
		</table>
	</form>
</div>

<div class="ket_qua">
	<p><?php echo $chuoi_moi ?></p>
</div>

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