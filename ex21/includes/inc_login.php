<?php 
include("../funtions/functions.php");
$action = isset($_POST["action"]) ? $_POST["action"] : "";
if ($action == "execute") {
	$username  = getValue('username');
	$password  = md5(getValue('password'));
	$errors = '';

	if ($password == '' || $username == '')
	{
		$errors = 'Vui lòng điền đầy đủ thông tin';
	} 
	else 
	{
		$urlfile = '../file/user.txt';
		if (file_exists($urlfile))
		{
			$jsondata = file_get_contents($urlfile);
			$arr_data = json_decode($jsondata, true);
			for ($i = 0; $i < count($arr_data) ; $i++)
			{ 
				if ($arr_data[$i]['username'] == $username && $arr_data[$i]['password'] == $password)
				{
					$_SESSION['username'] = $username;
					if ($_POST['remember'] == '1') {
						setcookie('namecookie', $username, time() + 3600);
					}
					header('Location: ../home/detail_login_user.php');

				}
				else {
					$errors = 'Tài khoản không tồn tại';
				}
			}
		} 
	}	 
}
?>
<div class="container_width">
	<div id="loginform">
		<form id="login_form" class="form" name="form" method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" accept-charset="utf-8">
			<div class="er">
				<?php if (isset($errors)) echo $errors; ?>
			</div>
			<h3>Login Form</h3><hr/>
			<br/>
			<label>Username : </label>
			<br/>
			
			<input type="text" name="username" id="username" placeholder=""/><br/>
			<br/>
			<label>Password : </label>
			<br/>
			<input type="password" name="password" id="password" placeholder=""/><br/>
			<br/>
			<input type="checkbox" name="remember" id="remembers" value="1"><label>I want to</label>
			<input type="submit" name="dangnhap" id="loginbtn" value="Login"/>
			<input type="hidden" name="action" value="execute">
			<input type="submit" id="cancel" value="Cancel"/>
			<br/>
		</form>
	</div>
</div>