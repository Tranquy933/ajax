<?php session_start(); ?>
<?php 
	if(isset($_SESSION['username'])||isset($_COOKIE['username'])){
		header("Location: profile.php");
	}
	else{
 ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../css/css_main.css">
	<script type="text/javascript" src="../js/jquery-3.2.1.js"></script>
	<script type="text/javascript" src="../js/js_main.js"></script>
	<script type="text/javascript" src="../js/jquery.validate.min.js"></script>
	<script type="text/javascript" src="../js/additional-methods.min.js"></script>
	<link rel="stylesheet" type="text/css" href="../font_awesome/css/font-awesome.min.css">
</head>
<body>

<?php include "../includes/inc_header.php"; ?>

<?php 
	include "../functions/functions.php";
	$user_name_login=getValue("login_user");
	$pass_word_login=getValue("login_password");
	$pass_md5=md5(getValue("login_password"));
	$action = isset($_POST["action"]) ? $_POST["action"] : "";
	$arrErrorMsg = array();
	$check_member = isset($_POST['check_member']) && $_POST['check_member']  ? "1" : "0";
	$filetxt = "../file/user.txt";
	$error_fail ="";
	if($action=="execute"){
		if($user_name_login=="") $arrErrorMsg[] .= "Không được để trống username";
		if($pass_word_login=="") $arrErrorMsg[] .= "Không được để trống password";
		if(count($arrErrorMsg)==0){
			if(file_exists($filetxt)){
				$arr_data = array();
				$value_txt = file_get_contents($filetxt);
				$arr_data = json_decode($value_txt, true);
				$number_arr_data = count($arr_data);
				for ($i = 0; $i < $number_arr_data; $i++)
				if($user_name_login==$arr_data[$i]['username']&&$pass_md5==$arr_data[$i]['password']){
					$_SESSION['username']=$user_name_login;
					if($check_member==1) setcookie("username",$user_name_login,time()+3600);
					header("Location: profile.php");
				}
				else {
					$error_fail= "Tài khoản hoặc mật khẩu không đúng";
				}
			}
		}
	}
	
?>
<div class="wrapper_login">
	<div class="container">
		<div class="login">
			<?php 
				foreach ($arrErrorMsg as $error) {
					echo $error.'<br>';
				}
				if(isset($error_fail)) echo $error_fail;
			?>
			<div class="image_login">
				<img src="../images/image_login.jpg" class="img_login">
			</div>
			<form method="POST" id="form_login">
				<label><b><p>Username</p></b></label>
				<input type="text" name="login_user" placeholder="Enter Username" class="login_user">

				<label><b><p>Password</p></b></label>
				<input type="password" name="login_password" placeholder="Enter Password" class="login_pass">


				<div class="check_member">
					<p class="text_check_box"><b>Remeber Login</b><input type="checkbox" name="check_member" value="1" style="vertical-align: middle;"></p>
				</div>
				<div class="btn_login">
					<button type="button" class="login_cancel">Cancel</button>
					<button type="submit" class="login_login">Login</button>
					<input type="hidden" name="action" value="execute">
				</div>
			</form>
		</div>
	</div>
</div>


<?php include "../includes/inc_footer.php"; ?>



<div class="wrapper_back_to_top">
	<img src="../images/icon_back_to_top.png" class="back_to_top"><br>
	<span class="text_back_to_top">Top</span>
</div>
 </body>
</html>
<?php } ?>