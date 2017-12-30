<ul class="pull">
	<li>
		<?php 
			if ($current_page >1 && $total_page > 1) {
				echo '<a href="index.php?page='.($current_page - 1).'"><i style="font-size: 20px;" class="fa fa-chevron-left" aria-hidden="true"></i></a>';
			}
			else
			{
				echo '<span><i style="font-size: 20px;" class="fa fa-chevron-left" aria-hidden="true"></i></span>';
			}

			if ($total_page <= 12) {
				for ($i=1; $i < $total_page; $i++) { 
					echo '<li><a href = "index.php?page='.$i.'">'.$i.'</a></li>';
				}
			}
			else
			{
				if ($current_page > 6) {
					for ($i=1; $i < 3; $i++) { 
						echo '<li><a href = "index.php?page='.$i.'">'.$i.'</a></li>';
					}
					echo '<li><a>...</a></li>';
				}

				$starLoop = $current_page - 1;
				$endLoop = $current_page + 1;
				if ($starLoop <= 0) {
					$starLoop = $total_page;
				}
				if ($endLoop >= $total_page) {
					$endLoop = $total_page;
				}
				for ($i=$starLoop; $i < $endLoop ; $i++) { 
					echo '<li><a href = "index.php?page='.$i.'">'.$i.'</a></li>';
				}
				if ($current_page <= $total_page - 3 && $starLoop < $total_page -10) {
					echo '<li><a>...</a></li>';
				}
				for ($i=$total_page - 2; $i < $total_page; $i++) { 
						echo '<li><a href = "index.php?page='.$i.'">'.$i.'</a></li>';
				}
			}

			if ($current_page < $total_page && $total_page >1) {
				echo '<a href = "index.php?page = '.($current_page + 1).'"><i style="font-size: 20px;" class="fa fa-chevron-right" aria-hidden="true"></i></a>';
			}
			else
			{
				echo '<span><i style="font-size: 20px;" class="fa fa-chevron-right" aria-hidden="true"></i></span>';
			}
		 ?>
	</li>

</ul>