
<?php
$arrErrorMgs = array();
include("../funtions/functions.php");
$action   = isset($_POST["action"]) ? $_POST["action"] : "";
if($action   == "execute"){

   $username      = getValue('username', 'str', 'POST');
   $fullname      = getValue('fullname', 'str', 'POST');
   $email         = getValue('email', 'str', 'POST');
   $password      = getValue('password', 'str', 'POST');
   $enterPassword = getValue('enterPassword', 'str', 'POST');
   $phone         = getValue('phone', 'str', 'POST');
   $address       = getValue('address', 'str', 'POST');
   $month         = getValue('month', 'str', 'POST'); 
   $day           = getValue('day', 'str', 'POST'); 
   $year          = getValue('year', 'str', 'POST'); 
   $radiobutton   = getValue('radiobutton', 'str', 'POST');
   $message       = getValue('message', 'str', 'POST');
   $f_file        = getValue('f_file', 'str', 'POST');
   $accpet =array("image/jpeg","image/png","image/gif");

   if($username == '') $arrErrorMgs[] .= "Không được để trống username";
   else if(strlen($username) < 3) $arrErrorMgs[] .= "Username phải nhiều hơn 3 ký tự";


   if($fullname == '') $arrErrorMgs[] .= "Không được để trống full name";

   if($email == '') $arrErrorMgs[] .= "Không được để trống  email";
   else if(!filter_var($email, FILTER_VALIDATE_EMAIL)) $arrErrorMsg[] .= "Email không hợp lệ";

   if($password == '') $arrErrorMgs[] .= "Không được để password trống";
   else if(strlen($password) < 6) $arrErrorMgs[] .= "Password nhiều hơn 6 ký tự";

   if($enterPassword == '') $arrErrorMgs[] .= "Không được để trống enterPassword";
   else if(strlen($enterPassword)!= strlen($password)) $arrErrorMgs[] .= "Password không trùng nhau";

   if($address == '') $arrErrorMgs[] .= "Không được để trống address";
   else if(strlen($address) < 6) $arrErrorMgs[] .= "Address nhiều hơn 6 ký tự"; // strlen đếm số ký tự trong chuỗi

   if ($phone  == '') $arrErrorMgs[] .= "Không được để phone trống";
   else if(!preg_match("/[0-9]{11}/",$phone)) $arrErrorMgs[] .= "Phone không hợp lệ"; // tìm kiếm chuỗi 

   if($month == '') $arrErrorMgs[] .= "Nhập tháng";
   if($day   == '') $arrErrorMgs[] .= "Nhập ngày";
   if($year  == '') $arrErrorMgs[] .= "Nhập năm";

   if($radiobutton == "0") $arrErrorMgs[] .= "Nhập giới tính";

   if($message == '') $arrErrorMgs[] .= "Không được để trống messge";
   else if(strlen($message) > 100) $sarrErrorMgs[]    .= "Nhập messge lớn hơn 100 ký tự";
   if ($_FILES["f_file"]["name"] =="") $arrErrorMgs[] .= "Vui lòng chọn ảnh";
   else if($_FILES["f_file"]["size"] >1000000) $arrErrorMgs[] .= "Vượt quá dung lương";
   else if(in_array($_FILES["f_file"]["type"],$accpet) == false) $arrErrorMgs[] .= "Khồng đúng định dạng"; // tìm kiếm một value cụ thể trong 1 mảng
   if(count($arrErrorMgs) == 0){
     $birthday = $_POST['month'].'-'.$_POST['day'].'-'.$_POST['year'];
     $imgAvt = explode(".", $_FILES["f_file"]["name"]);
      $newfilename = 'quy'.'.'.end($imgAvt);
     $formdata = array(
      'username'    =>  $_POST['username'],
      'fullname'    =>  $_POST['fullname'],
      'email'       =>  $_POST['email'],
      'password'    =>  md5($_POST['password']),
      'phone'       =>  $_POST['phone'],
      'address'     =>  $_POST['address'],
      'radiobutton' =>  $_POST['radiobutton'],
      'message'     =>  $_POST['message'],
      'f_file'      =>  $_FILES["f_file"]["name"],
      'birthday'     => $birthday,
      'image_name'    => $newfilename
      );

     $urlfile = '../file/user.txt';
      $urlUp   = "../file/avatar/".basename($_FILES["f_file"]["name"]); 
       $urlUps   = "../file/imagesmall/".basename($newfilename);// khai báo đường dẫn lưu ảnh avatar , basename lấy về phần đuôi của đường dẫn
      resize_image($_FILES["f_file"]["tmp_name"], 500, 100,$urlUp);
        resize_image($_FILES["f_file"]["tmp_name"], 100, 100,$urlUps);
      // move_uploaded_file($_FILES["f_file"]["tmp_name"], $urlUp); // thực hiện lưu avatar
      $arr_data = array();
       // resize_image_force($urlUp, 50,50);  

      if (file_exists($urlfile)){ // kiểm tra xem có tồn tại file txt k ? nếu có sẽ thực thi hành động sau
         $jsondata = file_get_contents($urlfile); // đọc nội dung file txt
         $arr_data = json_decode($jsondata,true); // chuyển nội dung đó sang dạng mảng rồi lưu vào mảng arr_data
      $name = array(); // tạo mảng chứa tên của tất cả các user đã đăng kí

   for($i = 0; $i < count($arr_data); $i++) {  // duyệt mảng arr_data để lấy ra tên các user đã đăng kí
      $name[] = $arr_data[$i]['username']; // thêm tên đó vào mảng name
   }

   if (in_array($formdata['username'], $name)) { // tìm kiếm tên người đăng kí nhập xem đã có trong fle txt chưa
      $errors = 'Username đã tồn tại'; // nếu có báo đã có
   }
   else { // nếu chưa có

      $arr_data[] = $formdata; // lưu mảng con chứa thông tin user đang đăng kí
      $jsondata   = json_encode($arr_data, JSON_PRETTY_PRINT);  //  chuyển mảng vừa cập nhật sang dạng chuỗi JSON
      file_put_contents($urlfile, $jsondata); // tiến hành lưu chỗi đó vào file txt
   }

}

else{
   echo "loi";
}
}

}
?>
<div id="validate_rg">
   <div class="container_width">
      <div id="form_name">
      <div class="eros" style="color: red">
            <?php 
            foreach ($arrErrorMgs as $value) {
               echo $value.'<br>';
            }

            if(isset($errors)){
              echo '<span class="ero">'.$errors.'</span>';
           }
           ?>
        </div>
        <form name="form" enctype="multipart/form-data" method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" accept-charset="utf-8" id="form_registration">
          <h1>Registration form</h1>
          <div id="errorBox">
           <div class="names">
             <span>Username <span class="required">*</span></span>
             <input type="text" name="username" id="user" value="" placeholder="Username"  class="input_name">
             <p class="requi"></p>
          </div>
          <div class="fullname">
           <span>Full name <span class="required">*</span></span>
           <input type="text" name="fullname" value="" placeholder="Full name" id="full_user" class="input_name">
           <p class="full_name"></p>
        </div>
     </div> 

     <div id="email_form">
       <span>Your Email<span class="required">*</span></span>
       <input type="email" name="email" value="" id="mail" placeholder="Your Email" class="input_email" ><p class="full_mail"></p>
    </div>

    <div id="password_form">
      <span>Password</span><span class="required">*</span><input type="password" name="password" value=""  placeholder="New Password" id="password1" class="input_password" > <p class="input_pas"></p>
   </div>

   <div id="Re_pasword_form">
      <span>Re-Passw<span class="required">*</span></span><input type="password" name="enterPassword" value=""  placeholder="Re-enter Password" id="password2" class="input_Re_password" ><p class="errmsg"></p>
      <p class="input_re"></p>
   </div>

   <div id="address">
    <span>Address <span class="required">*</span><input type="text" name="address" value="" placeholder="Address " id="add" class="input_address" ><p class="input_add"></p>
 </div>

 <div id="phone">
    <label><span>Phone <span class="required">*</span></span>
       <input type="text" name="phone" id="phones" maxlength="15" data-required="true" />
       <p class="input_phone"></p>
    </label>
 </div>

 <!--birthday details start-->
 <div class="birthday">
    <span>Birthday<span class="required">*</span></span>
 </div>

 <div class="month">
    <div class="birmonth">
       <select id="birthday_month" name="month">
        <option value="" selected >Month</option>
        <option value="1">Jan</option>
        <option value="2">Feb</option>
        <option value="3">Mar</option>
        <option value="4">Apr</option>
        <option value="5">May</option>
     </select>
     <p class="input_month"></p>
     &nbsp;&nbsp;
  </div>

  <div class="birday">
    <select id="birthday_day" name="day" >
     <option value="" selected>Day</option>
     <option value="1">1</option>
     <option value="2">2</option>
     <option value="3">3</option>
     <option value="4">4</option>
     <option value="5">5</option>
  </select>
  <p class="input_day"></p>
  &nbsp;&nbsp;
</div>
<div class="biryear">
 <select id="birthday_year" name="year">
  <option value="" selected>Year</option>
  <option value="2013">2013</option>
  <option value="2012">2012</option>
  <option value="2011">2011</option>
  <option value="2010">2010</option>
  <option value="2009">2009</option>
</select><p class="input_year"></p>
</div>
</div>
<!--birthday details ends-->
<div class="imgs">
 <label><span>Attachment</span><span class="required">*</span></label>
 <div id="upload">
  <input type="file" name="f_file" id="f_file"  onchange="readURL(this)" />
  <p class="input_image"></p>
</div>  
<div id="thumb_box">
  <img height="70" width="100" margin-left= "16" margin-top= "10" alt="" id="image_thumb" />
</div>
</div>
<div id="radio_button">
 <input type="radio" name="radiobutton" value="Female" id="femal" >
 <p class="input_femal"></p>
 <label >Female</label>
 &nbsp;&nbsp;&nbsp;
 <input type="radio" name="radiobutton" value="Male" id="men" >
 <label >Male</label>
</div>
<div class="input_men"></div>
<div>
   <div id="messger">
      <span>Message <p class="required">*</p></span>
      <label for="message">
       <textarea name="message" id="mess" data-required="true" ></textarea>
       <p class="input_messenger"></p>
    </label>
    <label><span>&nbsp;</span>
    </label>
 </div>
</div>
<input class="submits" type="submit" name="submit" value="Submit" />
<input type="hidden" name="action" value="execute">
</form>
</div>
</div>
</div>




