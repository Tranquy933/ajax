<div class="clearfix"></div>

	<ul class="pagination pull-right">
		<li> 
		  	<?php 

		  		if ($currentPage > 1 && $totalPage > 1)
			  	{
			?>
				<?php echo '<a href="index.php?page='.($currentPage-1).'"><i style="font-size: 20px;" class="fa fa-chevron-left" aria-hidden="true"></i></a>
					'?>
			<?php
				}
				else
				{
					echo '<span><i style="font-size: 20px;" class="fa fa-chevron-left" aria-hidden="true"></i></span>';
				}
			?>
				
		</li>
		<li>
    	<?php 
    		if(!isset($_GET['page'])) $_GET['page'] = 1;
            if($totalPage <= 10) {                
                for($i = 1; $i <= $totalPage; $i ++) {
                    if ($_GET['page'] == $i)
                    {
                        echo '<li class="active"><a href="index.php?page='.$i.'" >'.$i.'</a></li>'; 
                    }
                    else
                    {
                        echo '<li><a href="index.php?page='.$i.'">'.$i.'</a></li>';   
                    }
                }
            } 
            else 
            {
                if($currentPage > 4) {
                    for ($i = 1; $i <= 3; $i++)
                    {
                        if ($_GET['page'] == $i)
                        {
                            echo '<li class="active"><a href="index.php?page='.$i.'" >'.$i.'</a></li>'; 
                        } 
                        else
                        {
                            echo '<li><a href="index.php?page='.$i.'">'.$i.'</a></li>';   
                        }
                                
                    }
                    echo '<li><a>...</a></li>';
                }

                $startLoop  = $currentPage - 1;
                $endLoop    = $currentPage + 1;

                if($startLoop <= 0) 
                {
                    $startLoop = 1;
                }

                if($endLoop >= $totalPage) 
                {
                    $endLoop = $totalPage;
                }

                for($i = $startLoop; $i <= $endLoop; $i ++) 
                {
                    if ($_GET['page'] == $i)
                    {
                        echo '<li class="active"><a href="index.php?page='.$i.'" >'.$i.'</a></li>'; 
                    }
                    else
                    {
                        echo '<li><a href="index.php?page='.$i.'">'.$i.'</a></li>';   
                    }
                }
                
                if($currentPage < $totalPage - 3 && $startLoop < $totalPage-10) {
                    echo '<li><a>...</a></li>';
                    for ($i = $totalPage-2; $i <= $totalPage; $i++)
                    {
                        if ($_GET['page'] == $i)
                        {
                            echo '<li class="active"><a href="index.php?page='.$i.'" >'.$i.'</a></li>'; 
                        }
                        else
                        {
                            echo '<li><a href="index.php?page='.$i.'">'.$i.'</a></li>';   
                        }         
                    }
                }
            }       
        ?>
		</li>
		<li>
	   	<?php 	if ($currentPage < $totalPage && $totalPage > 1)
	   			{
	   	?>
           			<?php echo '<a href="index.php?page='.($currentPage+1).'"><i style="font-size: 20px;" class="fa fa-chevron-right" aria-hidden="true"></i></a>'?>
        <?php
        		}
        		else
        		{
					echo '<span><i style="font-size: 20px;" class="fa fa-chevron-right" aria-hidden="true"></i></span>';
				}
        ?>
    	</li>
	</ul>


