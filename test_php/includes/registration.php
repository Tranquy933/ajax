<?php 
include ('../inc/myconnect.php');

if (isset($_POST['submit'])) {
	$name = $_POST['name'];
	$pass = $_POST['pass'];
	$reset_pass = $_POST['repeat_pass'];
	$date = date('Y-m-d H:i:s');
	if ($pass == $reset_pass) {
		$sql = 'INSERT INTO `user`(login_name, password, created_at, updated_at) VALUES ("'.$name.'", "'.md5($pass).'","'.$date.'",  "'.$date.'") ';
		if (mysqli_query($conn, $sql)) {
			header('Location:/home/index.php');
		}
		else
		{
			echo "LOi to dung";
		}
	}
	else
	{
		echo "Khong trung pass";
	}
}

 ?>

 <div class="xuat_hien">
	<form name="toan_tu" method="POST">
		<table>
			<tr>
				<td><label>UserName</label></td>
				<td><input type="text" name="name" value=""></td>
			</tr>
			<tr>
				<td><label>Password</label></td>
				<td><input type="password" name="pass" value=""></td>
			</tr>
			<tr>
				<td><label>Repeat_pass</label></td>
				<td><input type="password" name="repeat_pass" value=""></td>
			</tr>
			<tr>
				<td class="td_submit" colspan="2"><input type="submit" name="submit" value="Registration"></td>
			</tr>
		</table>
	</form>
</div>		