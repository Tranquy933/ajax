

<?php 
include ('../inc/connect.php');

if(isset($_GET['id']))
{	
	$ss = (int)$_GET['id'];
	$sql = "SELECT * FROM product WHERE id =".$ss;
	$result = mysqli_query($conn,$sql);
	if(mysqli_num_rows($result) > 0){
		$row 	= mysqli_fetch_assoc($result);
		$code 	= $row['code'];
		$name 	= $row['name']; 
		$price 	= $row['price'];
		$qty 	= $row['qty'];
		$des	= $row['description'];
		$rate	= $row['rate'];
		$date 	= date('Y-m-d H:i:s');
	}

	else
	{
		echo "LOI";
		die();
	}

}
if (isset($_POST['submit'])) 
{	
	$id 	= $_GET['id'];
	$code 	= $_POST['code'];
	$name 	= $_POST['name'];
	$price 	= $_POST['price'];
	$qty 	= $_POST['qty'];
	$des	= $_POST['description'];
    $rate	= $_POST['rate'];
    $option	= $_POST['option'];
    $date 	= date('Y-m-d H:i:s');

	$sql 	= "UPDATE `product` SET code = '".$code."', name = '".$name."', price = '".$price."', qty = ".$qty.", description = '".$des."', rate = '".$rate."', id_cate = ".$option.", updated_at = '".$date."' WHERE id = ".$id."";
	if (mysqli_query($conn, $sql)) 
	{
    	header('Location:/admin/pages/home.php');
    	exit();
	} 
	else 
	{
	    echo "Error";
	}
}
$cate 		= 'SELECT * FROM category';
$result 	= mysqli_query($conn, $cate);
$category 	= [];
while($row 	= mysqli_fetch_assoc($result))
{
	$category[] = $row;
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
        <?php include('../includes/inc_css_js.php');?>
    </head>
    <body class="hold-transition skin-blue sidebar-mini">
        <div id="body">
            <div id="container_body">
                <div class="wrapper">
					<?php include("../includes/inc_header.php");?>
					<?php include("../includes/inc_sideba.php");?>
					<div class="content-wrapper">
						<div class="xuat_hien">
							<form name="toan_tu" method="POST">
								<table>
									<tr>
										<td><label>Code</label></td>
										<td><input type="text" name="code" value="<?php echo $code ?>"></td>
									</tr>
									<tr>
										<td><label>Name</label></td>
										<td><input type="text" name="name" value="<?php echo $name ?>"></td>
									</tr>
									<tr>
										<td><label>Price</label></td>
										<td><input type="text" name="price" value="<?php echo $price ?>"></td>
									</tr>
									<tr>
										<td><label>Qty</label></td>
										<td><input type="text" name="qty" value="<?php echo $qty ?>"></td>
									</tr>
									<tr>
										<td><label>Description</label></td>
										<td><input type="text" name="description" value="<?php echo $des ?>"></td>
									</tr>
									<tr>
										<td><label>Rate</label></td>
										<td><input type="text" name="rate" value="<?php echo $rate ?>"></td>
									</tr>
									<tr>
										<td><label>Category</label></td>
										<td>
											<select name="option">
											<?php foreach ($category as $item) { ?>

												<option value="<?php echo $item['id'] ?>"><?php echo $item['name']; ?></option>

											<?php } ?>
											</select>
											
										</td>
									</tr>
									<tr>
										<td class="td_submit" colspan="2"><input type="submit" name="submit" value="Sua"></td>
									</tr>
								</table>
							</form>
						</div>
					</div>	
				</div>
            </div>
        </div>
    </body>
</html>