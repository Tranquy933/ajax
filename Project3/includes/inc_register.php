<?php
$arrErrorMsg = array();
$action = isset($_POST["action"]) ? $_POST["action"] : "";

include "../functions/functions.php";
$use_name = getValue("username");
$pass_word = getValue("password");
$re_pass = getValue("repassword");
$full_name = getValue("fullname");
$sex = getValue("sex");
$email = getValue("email");
$phone = getValue("phone");
$addres = getValue("addres");
$day = getValue("day");
$month = getValue("month");
$year = getValue("year");
$yourself = getValue("yourself");
$image = getValue("image");
if ($action == "execute") {
	// username
		if ($use_name == "") {
			$arrErrorMsg[] .= "Không được để trống username";
		} else if (strlen($use_name) < 3) {
			$arrErrorMsg[] .= "Username phải trên 3 ký tự";
		}

		// password
		if ($pass_word == "") {
			$arrErrorMsg[] .= "Không được để trống password";
		} else if (strlen($pass_word) < 6) {
			$arrErrorMsg[] .= "Password phải trên 6 ký tự";
		}

		// repassword
		if ($re_pass == "") {
			$arrErrorMsg[] .= "Không được để trống re-password";
		} else if ($re_pass != $pass_word) {
			$arrErrorMsg[] .= "2 password không trùng nhau";
		}

		// fullname
		if ($full_name == "") {
			$arrErrorMsg[] .= "Không được để trống Fullname";
		}

		// sex
		if ($sex == "") {
			$arrErrorMsg[] .= "Không được để trống giới tính";
		}

		// email
		if ($email == "") {
			$arrErrorMsg[] .= "Không được để trống email";
		} else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
			$arrErrorMsg[] .= "Email không đúng định dạng";
		}

		// phone
		if ($phone == "") {
			$arrErrorMsg[] .= "Không được để trống số điện thoại";
		} else if (!preg_match('/^[0-9]+$/', $phone)) {
			$arrErrorMsg[] .= "Số điện thoại phải là số";
		}

		// addres
		if ($addres == "") {
			$arrErrorMsg[] .= "Không được để trống số địa chỉ";
		} else if (strlen($addres) < 3) {
			$arrErrorMsg[] .= "Địa chỉ phải trên 3 ký tự";
		}

		// birthday
		if ($day == "") {
			$arrErrorMsg[] .= "Không được để trống số ngày sinh";
		}

		if ($month == "") {
			$arrErrorMsg[] .= "Không được để trống số tháng sinh";
		}

		if ($year == "") {
			$arrErrorMsg[] .= "Không được để trống số năm sinh";
		}

		// introduce yourself
		if ($yourself == "") {
			$arrErrorMsg[] .= "Không được để trống giới thiệu bản thân";
		} else if (strlen($yourself) >100) {
			$arrErrorMsg[] .= "Tối đa 100 kí tự";
		}

		// avatar
		$img_name =$_FILES['image']['name'];
		$img_type =$_FILES['image']['type'];
		$img_size =$_FILES['image']['size'];
		$img_tmp_name =$_FILES['image']['tmp_name'];
		$imgAvt = explode(".", $_FILES["image"]["name"]);
		$big_img ='big_img'.rand().'.'.end($imgAvt);
		$small_img = 'small_img-'.rand().'.'.end($imgAvt);
		$allowed = array("image/jpeg", "image/gif", "image/png");
		if($img_name==""){
			$arrErrorMsg[] .= "Không được để trống avatar";
		}
		else if(in_array($img_type, $allowed)==false){
			$arrErrorMsg[] .= "Không đúng định dạng ảnh";
		}
		else if($img_size>1048576){
			$arrErrorMsg[] .= "Vượt quá dung lượng cho phép";
		}
		// kiểm tra , nếu ko còn lỗi thì submit
		if (count($arrErrorMsg)==0){
			$filetxt = "../file/user.txt";
			$formdata = [
				'username' => $use_name,
				'password'=>md5($pass_word),
				'fullname' => $full_name,
				'sex' => $sex,
				'email' => $email,
				'phone' => $phone ,
				'addres' => $addres,
				'birthday' => [
					'day' => $day ,
					'month' => $month,
					'year' => $year,
				],
				'introduce yourself' => $yourself,
				'big_avatar'=> $big_img,
				'small_avatar'=>$small_img
			];
			$arr_data = array();
			if (file_exists($filetxt)) {
				$value_txt = file_get_contents($filetxt);
				$arr_data = json_decode($value_txt, true);
				$number_arr_data = count($arr_data);
				$name = array();

				for ($i = 0; $i < $number_arr_data; $i++) { 
					$name[] = $arr_data[$i]['username'];
				}
				if (in_array($formdata['username'],$name)==true) {
					echo '<script language="javascript">alert("Username đã tồn tại")</script>';
				}
				else{
					$upload_big="../avatar/big_img/".$big_img;
					resizeImages($img_tmp_name,500, $upload_big);
					$upload_small="../avatar/small_img/".$small_img;
					resizeImages($img_tmp_name,100, $upload_small);
					$arr_data[] = $formdata;
					$value_txt = json_encode($arr_data, JSON_PRETTY_PRINT);
					file_put_contents($filetxt, $value_txt);
					header("Location: ../home/list_user.php");
				}

			}
			
		}


	};
	?>
<div class="wrapper_content">
	<div class="container">
		<!-- register -->
		<div class="wrapper_register">
			<div class="error_register">
				<?php 
				foreach ($arrErrorMsg as $error) {
					echo $error.'<br>';
				}
				?>
			</div>
			<div class="register">
				<h1>Register</h1>
				<form method="post" action="" enctype="multipart/form-data" id="formvld">
					<div class="wrapper">
						<label>Username :</label>
						<input type="text" class="txt_user" name="username" placeholder="Enter your Username" value="<?php if (isset($use_name)) {
							echo $use_name;
						}
						?>">
					</div>

					<div class="wrapper">
						<label>Password :</label>
						<input type="password" class="txt_password" name="password" placeholder="Enter your password">
					</div>

					<div class="wrapper">
						<label>Re-Password :</label>
						<input type="password" class="txt_repassword" name="repassword" placeholder="Repeat your password">
					</div>

					<div class="wrapper">
						<label>Full Name :</label>
						<input type="text" class="txt_fullname" name="fullname" placeholder="Enter your full name" value="<?php if (isset($full_name)) {
							echo $full_name;
						}
						?>">
					</div>

					<div class="wrapper wrapper_sex">
						<label>Sex :</label>
						<select class="select_sex" name="sex">
							<option value="">Sex</option>
							<option value="female">Female</option>
							<option value="male">Male</option>
						</select>
					</div>

					<div class="wrapper">
						<label>Email :</label>
						<input type="text" class="txt_email" name="email" placeholder="Enter your email" value="<?php if (isset($email)) {
							echo $email;
						}
						?>">
					</div>

					<div class="wrapper">
						<label>Phone :</label>
						<input type="text" class="txt_phone" name="phone" placeholder="Enter your phone" value="<?php if (isset($phone)) {
							echo $phone;
						}
						?>">
					</div>

					<div class="wrapper">
						<label>Addres :</label>
						<input type="text" class="txt_addres" name="addres" placeholder="Enter your Addres" value="<?php if (isset($addres)) {
							echo $addres;
						}
						?>">
					</div>

					<div class="wrapper wrapper_birthday">
						<label>Birthday :</label>
						<select class="bd_day" name="day">
							<option value="">Day</option>
							<option value="10">10</option>
							<option value="11">11</option>
							<option value="12">12</option>
						</select>
						<select class="bd_m" name="month">
							<option value="">Month</option>
							<option value="September">September</option>
							<option value="October">October</option>
							<option value="November">November</option>
						</select>
						<select class="bd_y" name="year">
							<option value="">Year</option>
							<option value="1995">1995</option>
							<option value="1994">1994</option>
							<option value="1993">1993</option>
						</select>
					</div>

					<div class="wrapper">
						<label>Introduce Yourself :</label>
						<textarea class="txt_yourself" name="yourself"><?php if(isset($yourself)) echo $yourself; ?></textarea>
					</div>

						<div class="wrapper wrapper_avatar">
							<label>Avatar :</label>
							<input type="file" name="image" class="img_upload" onchange="validate_img_upload(this)">
							<div class="thum_img">
								<img src="" class="avatar_img">
							</div>
						</div>
						<div class="btn_register">
							<button type="button" class="btn_cancel">Cancel</button>
							<button type="submit" class="btn_signup" name="submit_form">Sign Up</button>
							<input type="hidden" name="action" value="execute">
						</div>
					</form>

				</div>
			</div>
			<!-- end regiser -->
		</div>
	</div>