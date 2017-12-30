	
 <?php
	// hien thi danh sach sinh vien

	$schools = array(   'student'=>array(
							'SV01'=>array(
								'name'=>'tran van quy',
								'birthday'=>'29/06/1993',
								'gender'=>'nam'
							),
							'SV02'=>array(
								'name'=>'pham thi long',
								'birthday'=>'29/06/1993',
								'gender'=>'nam'
							),
							'SV03'=>array(
								'name'=>'tran dinh van',
								'birthday'=>'29/06/1993',
								'gender'=>'nam'
							),
							'SV04'=>array(
								'name'=>'pham hai nam',
								'birthday'=>'29/06/1993',
								'gender'=>'nam'
							),
							'SV06'=>array(
								'name'=>'luong van cong',
								'birthday'=>'29/06/1993',
								'gender'=>'nam'
							),
							'SV07'=>array(
								'name'=>'pham tuan hiep',
								'birthday'=>'29/06/1993',
								'gender'=>'nam'
							),
							'SV08'=>array(
								'name'=>'nguyen van anh',
								'birthday'=>'29/06/1993',
								'gender'=>'nam'
							),
							'SV09'=>array(
								'name'=>'hoang van thao',
								'birthday'=>'29/06/1993',
								'gender'=>'nam'
							),
							'SV010'=>array(
								'name'=>'le van chi',
								'birthday'=>'29/06/1993',
								'gender'=>'nam'
							),
						),
					);

?>

<div id="school">
	<?php foreach ($schools as $k => $v) {
		?>
	<h1 class="list_title"><?php echo $k; ?></h1>

	<ul class="list_chools">
		<?php 
			foreach ($v as $k1 => $v1) {
		?>

			<li class="list_sv">
				<p><span>MaSV:</span><?php echo $k1; ?></p>
				<p><span>Ten:</span><?php echo $v1['name']?></p>
				<p><span>Ngay Sinh:</span><?php echo $v1['birthday']?></p>
				<p><span>Gioi Tinh</span><?php echo $v1['gender']?></p>
			</li>

		<?php
			}
		 ?>
		
	</ul>
	<?php

	} ?>
</div>

<?php 
	
?>

