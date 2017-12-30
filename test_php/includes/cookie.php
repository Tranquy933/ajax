
 <div class="xuat_hien">
	<form name="toan_tu" method="POST">
		<table>
			<tr>
				<td><label>UserName</label></td>
				<td><input type="text" name="user" value=""></td>
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

	<?php 

		if (isset($_POST['submit'])) {
			setcookie('user',$_POST['user'], time() +3000 );
			setcookie('password', $_POST['pass'], time() +3000);
			header('location:/home/show_cookie.php');
		}

	 ?>
</div>