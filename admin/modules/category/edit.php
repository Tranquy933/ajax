
<?php 
include ('../../inc/connect.php');
if(isset($_GET['id']))
{	
	$ss = (int)$_GET['id'];
	$sql = "SELECT * FROM category WHERE id =".$ss;
	$result = mysqli_query($conn,$sql);
	if(mysqli_num_rows($result) > 0){
		$row 	= mysqli_fetch_assoc($result);
		$name 	= $row['name']; 
		$date 	= date('Y-m-d H:i:s');
	}

	else
	{
		echo "LOI";
		die();
	}

}
$nameErr = '';
if (isset($_POST['submit'])) 
{	
	
	$id 	= $_GET['id'];
	$name 	= $_POST['name'];
	$slug = preg_replace('/[^A-Za-z0-9-]+/', '-', $name);
	$sql 	= "UPDATE `category` SET  name = '".$name."', slug = '".$slug."' WHERE id = ".$id." ";
  	if (trim($_POST['name']) == '') {
		$nameErr = "* Vui long nhap ten danh muc";
	}
	else if (mysqli_query($conn, $sql)) 
	{
    	header('Location:/admin/modules/category/index.php');
	}
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
						<!-- start form bootrap -->
						<div class="container">
							<div class="col-md-5">
							    <div class="form-area">  
							        <form role="form" method="POST">
							        	<br style="clear:both">
					                    <h3 class="green-text mb-5 mt-4 font-bold" >Edit Category</h3>
					    				<div class="form-group">
					    					<label for="name">Name</label>
											<input class="form-control" type="text" name="name" value="<?php echo $name ?>">
											<div class="help-inline text-danger"><?php echo $nameErr; ?></div>
										</div>
								        <input style="margin-top: 20px;" type="submit" name="submit" class="btn btn-success btn-block btn-rounded z-depth-1 waves-effect waves-light" value="Edit"></input>
							        </form>
			   				 	</div>
							</div>
						</div>
						<!-- end form bootrap -->
					</div>	
				</div>
            </div>
        </div>
    </body>
</html>