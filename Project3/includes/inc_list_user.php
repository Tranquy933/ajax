<div class="wrapper_content">
	<div class="container">
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
			if (file_exists($filetxt)) {
				$value_txt = file_get_contents($filetxt);
				$arr_data = json_decode($value_txt, true);
				foreach ($arr_data as $value) { ?>
			<tr>
				<td><?php echo $value['username'] ?></td>
				<td><?php echo $value['fullname'] ?></td>
				<td><?php echo $value['sex'] ?></td>
				<td><?php echo $value['email'] ?></td>
				<td><?php echo $value['phone'] ?></td>
				<td><?php echo $value['addres'] ?></td>
				<td><?php echo $value['birthday']['day'].'/'.$value['birthday']['month'].'/'.$value['birthday']['year']?></td>
				<td><?php echo $value['introduce yourself'] ?></td>
				<td><img src="../avatar/small_img/<?php echo $value['small_avatar']; ?>" width="100px"></td>
			</tr>
			<?php 
				}
			}
		?>
		</table>
	</div>
</div>