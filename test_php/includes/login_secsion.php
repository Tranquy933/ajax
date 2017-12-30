<?php 
	session_start();
	include ('../inc/myconnect.php');
	if (isset($_POST['submit'])) {
		$name = $_POST['name'];
		$pass = md5($_POST['pass']);
		$sql = 'SELECT login_name,password FROM user WHERE login_name = "'.$name.'" AND  password = "'.$pass.'" ';
		$result = mysqli_query($conn, $sql);
		if (mysqli_num_rows($result) > 0) {
			$row = mysqli_fetch_assoc($result);
			$_SESSION['name'] = $row['login_name'];
			$_SESSION['pass'] = $row['password'];
			session_write_close();
			echo 'Xin chao ban "'.$_SESSION['name'].'" dang nhap thanh cong';
		}
		else
		{
			echo "Login failed";
			
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