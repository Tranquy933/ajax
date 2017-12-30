<?php 
	include('../../inc/connect.php');
	$query = 'SELECT COUNT(id) AS total FROM category';
	$resultRecords = mysqli_query($conn, $query);
	$rowRecords = mysqli_fetch_assoc($resultRecords);
	$totalRecords = $rowRecords['total'];
	$currentPage = isset($_GET['page']) ? $_GET['page'] : 1;
    $limit = 2;
    $totalPage = ceil($totalRecords / $limit); // tong so trang
    // $totalPage = 100;
    if ($currentPage > $totalPage){
            $currentPage = $totalPage;
        }
    else if ($currentPage < 1){
            $currentPage = 1;
        }
    $start = ($currentPage - 1) * $limit;
    $result = mysqli_query($conn, "SELECT * FROM category LIMIT $start, $limit");
    $categories = [];
    while ($row = mysqli_fetch_assoc($result)){
       	$categories[] = $row;
    }
?>
<!DOCTYPE>
<html xmlns="http://www.w3.org/1999/xhtml" lang="vn-VI">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="https://fonts.googleapis.com/css?family=Roboto:300,500,700,900&amp;subset=vietnamese" rel="stylesheet">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
        <meta http-equiv="Content-Type" content="wtext/html; charset=utf-8" />
        <title>Admin</title>
        <meta name="keywords" content="keywords cua wweb" />
        <meta name="description" content="description cua wweb" />
        <?php include('../../includes/inc_css_js.php');?>
    </head>
    <body class="hold-transition skin-blue sidebar-mini">
        <div id="body">
            <div id="container_body">
                <div class="wrapper">
					<?php include("../../includes/inc_header.php");?>
					<?php include("../../includes/inc_sideba.php");?>
					<div class="content-wrapper">
						<div id="container_body">
							<div class="container">
								<div class="row">
							        <div class="col-md-11">
							        	<h4>
							        		List-Category 
							        		<a class="btn btn-primary btn-xs pull-right" href = 'http://localhost/admin/modules/category/add.php'>
							        		Add Category</a>
							        	</h4>
							        	<div class="table-responsive">
						      				<table id="mytable" class="table table-bordred table-striped">
						           				<thead>
								                  	<th>Id</th>
								                    <th>Name</th>
								                    <th>Slug</th>
								                    <th>Created_at</th>
								                    <th>Uppdated_at</th>
								                    <th>Edit</th>
								                    <th>Delete</th>
								                </thead>
											    <tbody>
										    		<?php foreach($categories as $item): ?>
											        <tr>
											          	<?php $id = $item['id']; ?>
											          	<td><?php echo $item['id'] ?></td>      
											            <td><?php echo $item['name'] ?></td>
											            <td><?php echo $item['slug'] ?></td>
											            <td><?php echo $item['created_at'] ?></td>
											            <td><?php echo $item['updated_at'] ?></td>
											            <td>
															<a class='btn btn-primary btn-xs' href = "http://localhost/admin/modules/category/edit.php?id=<?php echo $id ?>" >
														 		<i class='fa fa-pencil-square-o' aria-hidden='true'></i>
														 	</a>
											            </td>
														<td>
															<a class='btn btn-danger btn-xs' onclick="return confirm('Ban co muon xoa san pham nay khong ?');" href = "http://localhost/admin/modules/category/delete.php?id=<?php echo $id ?>" >
														 		<i class='fa fa-trash-o' aria-hidden='true'></i>
														 	</a>
											            </td>	
												    </tr>
											        <?php endforeach; ?>
											    </tbody>
											</table>
										</div>
											<?php include('../../includes/paging.php'); ?>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div> 
				</div>
            </div>
        </div>
    </body>
</html>
<style type="text/css">
	.active{
		background: #3ea2b2 !important;
	} 
</style>