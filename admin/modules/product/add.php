<?php 	

include ('../../inc/connect.php');
$codeErr = $nameErr = $priceErr = $qtyErr = $desErr = $rateErr = $optionErr = "";


if (isset($_POST['submit'])) 
{	
	$errors = [];
	// $img = "http://localhost:8002/ta_ta/".basename($_FILES['fileUpload']['name']);
	$targetDir = '/var/www/html/shop/img/product_img/';	
	$targetFile = $targetDir.basename($_FILES['fileUpload']['name']);
	$imgName = $_FILES['fileUpload']['name'];
	$fileType = pathinfo($_FILES['fileUpload']['name'], PATHINFO_EXTENSION);
	$fileTypeAllow = array("jpg", "png", "gif", "jpeg");

	if ($fileType == NULL) {
		$errors[] = "Yeu cau nhap file anh <br>";
	}
	else if (!in_array(strtolower($fileType), $fileTypeAllow)) 
	{
		$errors[] = "Yeu cau nhap dung dinh dang anh <br>";

	}
	
	if ($_FILES['fileUpload']['size'] > 160000) 
	{
		$errors[] = "chi duoc upload duoi 1,6mb <br>";
	} 
		
	if (empty($errors)) {
		if(move_uploaded_file($_FILES['fileUpload']['tmp_name'], $targetFile))
		{
			echo "thanh cong";
			$flag = true;
		}
		else
			{
			echo "that bai";
			}	
	}

	$code 	= $_POST['code'];
    $name 	= $_POST['name'];
    $price 	= $_POST['price'];
    $priceSale = $_POST['sale_hot'];
    $qty 	= $_POST['qty'];
    $option	= $_POST['option'];
    $saleHot    = $_POST['sale_hot'];
    $sale    = $_POST['sale'];
    $des	= $_POST['description'];
    $rate	= $_POST['rate'];
 	$date 	= date('Y-m-d H:i:s');
	$sql 	= 'INSERT INTO `product`(code, name, price,price_sale, qty, id_cate,hot,sale,description,rate,created_at, updated_at, img ) VALUES ("'.$code.'","'.$name.'","'.$price.'","'.$priceSale.'","'.$qty.'","'.$option.'","'.$saleHot.'", "'.$sale.'", "'.$des.'","'.$rate.'", "'.$date.'",  "'.$date.'","'.$imgName.'")';
	if (trim($_POST['code'])== '') {
		$codeErr = "* Vui long nhap ma san pham ";
	}
	if (trim($_POST['name'])== '') {
		$nameErr = "* Vui long nhap ten san pham";
	}
 	if(trim($_POST['price'])== ''){
		$priceErr = "* Vui long nhap gia san pham";
	}
	if(trim($_POST['qty'])== ''){
		$qtyErr = "* Vui long nhap so luong san pham";
	}
	if(trim($_POST['description'])== ''){
		$desErr = "* Vui long nhap thong tin san pham";
	}
	if(trim($_POST['rate'])== ''){
		$rateErr = "* Vui long danh gia san pham";
	}
	if (trim($_POST['option'])=='') {
		$optionErr = "* Vui long chon danh muc san pham";
	}
	else if(mysqli_query($conn, $sql))
	{
		header('Location:/admin/modules/product/index.php');
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
							        <form role="form" method="POST" enctype="multipart/form-data">
							        	<br style="clear:both">
					                    <h3 class="green-text mb-5 mt-4 font-bold" >Add product</h3>
					                    <div class="form-group">
					                    	<label for="name">Code</label>
											<input type="text" class="form-control" id="code" name="code" value="">
											<div class="help-inline text-danger"><?php echo $codeErr; ?></div>
										</div>
					    				<div class="form-group">
					    					<label for="name">Name</label>
											<input class="form-control" type="text" id="name" name="name" value="">
											<div class="help-inline text-danger"><?php echo $nameErr; ?></div>
										</div>
										<div class="form-group">
											<label for="name">Price</label>
											<input class="form-control" type="text" id="price" name="price" value="">
											<div class="help-inline text-danger"><?php echo $priceErr; ?></div>
										</div>
										<div class="form-group">
											<label for="name">Price-Sale</label>
											<input class="form-control" type="text" id="price" name="price_sale" value="">
											<div class="help-inline text-danger"><?php echo $priceErr; ?></div>
										</div>
										<div class="form-group">
											<label for="name">Qty</label>
											<input class="form-control" type="text" id="qty" name="qty" value="">
											<div class="help-inline text-danger"><?php echo $qtyErr; ?></div>
										</div>
										<div class="form-group">
											<label for="name">Description</label>
											<input class="form-control" type="text" id="description" name="description" value="">
											<div class="help-inline text-danger"><?php echo $desErr; ?></div>
										</div>
					                    <div class="form-group">
					                    	<label for="name">Rate</label>
											<input class="form-control" type="text" id="rate" name="rate" value="">
											<div class="help-inline text-danger"><?php echo $rateErr; ?></div>
										</div>
										<div class="form-group">
											<label for="name">Category</label>
								            <select name="option" class="form-control">
								            	<option value="">---Chon---</option>
											<?php foreach ($category as $item) { ?>
												<option value="<?php echo $item['id'] ?>"><?php echo $item['name']; ?></option>

											<?php } ?>
											</select>
											<div class="help-inline text-danger"><?php echo $optionErr; ?></div>
										</div>
										<div class="form-group">
											<label for="name">Hot</label>
								            <select name="sale_hot" class="form-control">
								            	<option >---Chon---</option>
												<option value="1">hot</option>
												<option value="0">no hot</option>
											</select>
											<div class="help-inline text-danger"><?php echo $optionErr; ?></div>
										</div>
										<div class="form-group">
											<label for="name">Sale</label>
								            <select name="sale" class="form-control">
								            	<option >---Chon---</option>
												<option value="1">sale</option>
												<option value="0">no sale</option>
											</select>
											<div class="help-inline text-danger"><?php echo $optionErr; ?></div>
										</div>
										<div class="form-group">
					                    	<label for="name">Upload</label>
											<input type="file" name="fileUpload">
											<div class="help-inline text-danger"><?php if (isset($errors)) { ?>
										      		<p style="color: red"><?php foreach ($errors as $key => $value) {
										      			echo $value;
										      		}?>
										      		</p>	
											      	<?php } ?>
											</div>
											<div class="help-inline text-danger"><?php echo $optionErr; ?></div>
										</div>
											
								        <input style="margin-top: 20px;" type="submit" name="submit" class="btn btn-success btn-block btn-rounded z-depth-1 waves-effect waves-light" value="Add"></input>
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