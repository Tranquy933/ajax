<?php 
	include ('../inc/connect.php');
	
	$sql = 'SELECT product.*, category.name AS category_name FROM product LEFT JOIN category ON product.id_cate = category.id ORDER BY product.id';
	$result = mysqli_query($conn, $sql);
	if (!$result) {
		die('cau truy van bi sai');		
	}

	$products = [];
	while($row = mysqli_fetch_assoc($result)){
		$products[] = $row;
	}
	mysqli_free_result($result);
?>
<div class="content-wrapper">
	<div id="container_body">
		<div class="container">
			<div class="row">
		        <div class="col-md-11">
		        	<h4>List-Product</h4>
		        	<div class="table-responsive">
	      				<table id="mytable" class="table table-bordred table-striped">
	           				<thead>
			                  	<th>Id</th>
			                  	<th>Code</th>
			                    <th>Name</th>
			                    <th>Price</th>
			                    <th>Qty</th>
			                    <th>Description</th>
			                    <th>Rate</th>
			                    <th>Name_cate</th>
			                    <th>Created_at</th>
			                    <th>Uppdated_at</th>
			                    <th>Edit</th>
			                    <th>Delete</th>
			                </thead>
						    <tbody>
						    	<tr>
						    		  <?php foreach($products as $item): ?>
							        <tr>
							          	<?php $id = $item['id']; ?>
							          	<td><?php echo $item['id'] ?></td>   
							            <td><?php echo $item['code'] ?></td>    
							            <td><?php echo $item['name'] ?></td>
							            <td><?php echo $item['price'] ?></td>
							            <td><?php echo $item['qty'] ?></td>
							            <td><?php echo $item['description'] ?></td>
							            <td><?php echo $item['rate'] ?></td>
							            <td><?php echo $item['category_name'] ?></td>
							            <td><?php echo $item['created_at'] ?></td>
							            <td><?php echo $item['updated_at'] ?></td>
								            <td>
								            	<?php echo "<a href = 'http://localhost/admin/pages/sua.php?id=$id'><button class='btn btn-primary btn-xs' ><i class='fa fa-pencil-square-o' aria-hidden='true'></i></button></a>"?>
								            </td>

											<td>
								            	<?php echo "<a href = 'http://localhost/admin/pages/xoa.php?id=$id'><button class='btn btn-danger btn-xs' ><i class='fa fa-trash-o' aria-hidden='true'></i></button></a>"?>
								            </td>

								   				
								        </tr>
							        <?php endforeach; ?>
								    
						    	</tr>
						    </tbody>
						</table>
					<div class="clearfix"></div>
						<ul class="pagination pull-right">
						  <li><a href="#"><i class="fa fa-chevron-left" aria-hidden="true"></i></a></li>
						  <li class="active"><a href="#">1</a></li>
						  <li><a href="#">2</a></li>
						  <li><a href="#">3</a></li>
						  <li><a href="#">4</a></li>
						  <li><a href="#">5</a></li>
						  <li><a href="#"><i class="fa fa-chevron-right" aria-hidden="true"></i></span></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</div> 



