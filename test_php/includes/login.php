<?php 
include ('../inc/myconnect.php');
if (isset($_POST['submit'])) {
	$name = $_POST['name'];
	$pass = md5($_POST['pass']);
	$sql = 'SELECT login_name,password FROM user WHERE login_name = "'.$name.'" AND  password = "'.$pass.'" ';

	$result = mysqli_query($conn, $sql);
	$row = mysqli_fetch_assoc($result);
	var_dump($row);
	if ($row == '') {
		echo "Sai UserName hoac Password";
	}
	else
	{
		echo"Dang nhap thanh cong";
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
				<td class="td_submit" colspan="2"><input type="submit" name="submit" value="Login"></td>
			</tr>
		</table>
	</form>
</div>