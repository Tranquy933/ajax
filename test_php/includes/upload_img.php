

<?php
	if ($_SERVER['REQUEST_METHOD'] == "POST") 
	{
		$errors = [];
		$img = "http://localhost:8002/ta_ta/".basename($_FILES['fileUpload']['name']);
		$target_dir = '/var/www/html/test_php/ta_ta/';	
		$target_file = $target_dir.basename($_FILES['fileUpload']['name']);
		$file_type = pathinfo($_FILES['fileUpload']['name'], PATHINFO_EXTENSION);
		$file_type_allow = array("jpg", "png", "gif", "jpeg");

		if ($file_type == NULL) {
			$errors[] = "Yeu cau nhap file anh <br>";
		}
		else if (!in_array(strtolower($file_type), $file_type_allow)) 
		{
			$errors[] = "Yeu cau nhap dung dinh dang anh <br>";

		}
		
		if ($_FILES['fileUpload']['size'] > 160000) 
		{
			$errors[] = "chi duoc upload duoi 1,6mb <br>";
		} 

		if (is_file($target_file)) 
		{
			$errors[] = "file da ton tai tren he thong";
		
		}
			
		if (empty($errors)) {
			if(move_uploaded_file($_FILES['fileUpload']['tmp_name'], $target_file))
			{
				echo "thanh cong";
				$flag = true;
			}
			else
				{
				echo "that bai";
				}	
		}
	}
 ?>

<form name="newad" method="post" enctype="multipart/form-data" ation=""> <!-- enctype: dùng để xác định loại nội dung được dùng để submit form -->
   <table>
      <tr>
         <td><input type="file" name="fileUpload"></td>
      </tr>
      <tr>
         <td><input name="Submit" type="submit" value="Upload"></td>
      </tr>
      	<?php if (isset($errors)) {

      	?>
      		<p style="color: red"><?php foreach ($errors as $key => $value) {
      			echo $value;
      		} ?></p>	
      		
      	<?php

      		} 
      	?>
      
   </table>
</form>

<?php 
	if (isset($flag)) {
		?>
		<img src="<?php echo $img; ?>">
		<?php
	}
	
?>

      