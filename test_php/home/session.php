

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
	session_start();
	if (isset($_POST['submit'])) {
		$_SESSION['user'] = $_POST['user'];
		$_SESSION['pass'] = $_POST['pass'];
		header('location:/home/show_session.php');
	}
?>
	
</div>