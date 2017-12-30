<div class="wrapper_content">
	<div class="container">
		<div class="profile">
			<table class="table_user">
				<tr>
					<th>Username</th>
					<th>Fullname</th>
					<th>Sex</th>
					<th>Email</th>
					<th>Phone</th>
					<th>Addres</th>
					<th>Birthday</th>
					<th>Introduce Yourself</th>
					<th>Avatar</th>
				</tr>
				<?php 
				$filetxt = "../file/user.txt";
					if(file_exists($filetxt)){
						$arr_data = array();
						$value_txt = file_get_contents($filetxt);
						$arr_data = json_decode($value_txt, true);
						$number_arr_data = count($arr_data);
						for ($i = 0; $i < $number_arr_data; $i++){
							if($_SESSION['username']==$arr_data[$i]['username']){
								$user_name= $arr_data[$i]['username'];
								$full_name= $arr_data[$i]['fullname'];
								$sex = $arr_data[$i]['sex'];
								$email=$arr_data[$i]['email'];
								$phone=$arr_data[$i]['phone'];
								$addres=$arr_data[$i]['addres'];
								$day=$arr_data[$i]['birthday']['day'];
								$month=$arr_data[$i]['birthday']['month'];
								$year=$arr_data[$i]['birthday']['year'];
								$yourself=$arr_data[$i]['introduce yourself'];
								$big_avatar=$arr_data[$i]['big_avatar'];
								$small_avatar=$arr_data[$i]['small_avatar'];
							}
						}	
					}

				 ?>
				 <tr>
				 	<td><?php echo $user_name; ?></td>
				 	<td><?php echo $full_name; ?></td>
				 	<td><?php echo $sex; ?></td>
				 	<td><?php echo $email; ?></td>
				 	<td><?php echo $phone; ?></td>
				 	<td><?php echo $addres; ?></td>
				 	<td><?php echo $day.'/'.$month.'/'.$year ?></td>
				 	<td><?php echo $yourself ?></td>
				 	<td><img src="../avatar/small_img/<?php echo $small_avatar ?>" width="100px"></td>
				 </tr>
			</table>
		</div>
	</div>
</div>