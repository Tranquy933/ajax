
<?php 
include ('../../inc/connect.php');

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
		$priceSale = $row['price_sale'];
		$qty 	= $row['qty'];
		$des	= $row['description'];
		$rate	= $row['rate'];
		$idCate = $row['id_cate'];
		$img	= $row['img'];
		$date 	= date('Y-m-d H:i:s');
	}
	else
	{
		echo "LOI";
		die();
	}

}

$nameErr = $priceErr= $optionErr = "";
if (isset($_POST['submit'])) 
{
	if ($_POST['fileUpload']) {
	$targetFile = basename($_POST['fileUpload']);
	$imgName =  $targetFile;
	}
	else
	{
		$imgName = $img;
	}

	$id 	= $_GET['id'];
	$code 	= $_POST['code'];
	$name 	= $_POST['name'];
	$price 	= $_POST['price'];
	$priceSale = $_POST['price_sale'];
	$qty 	= $_POST['qty'];
	$des	= $_POST['description'];
    $rate	= $_POST['rate'];
    $option	= $_POST['option'];
    $saleHot = $_POST['sale_hot'];
    $sale   = $_POST['sale'];

	$sql 	= "UPDATE `product` SET code = '".$code."', name = '".$name."', price = '".$price."', price_sale = '".$priceSale."', qty = ".$qty.", description = '".$des."', rate = '".$rate."', id_cate = ".$option." ,hot = ".$saleHot.", sale = ".$sale.",  img = '".$imgName."' WHERE id = ".$id."";

  	if (trim($_POST['name']) == '') {
		$nameErr = "* Vui long nhap ten san pham";
	}
 	if(trim($_POST['price']) == ''){
		$priceErr = "* Vui long nhap gia san pham";
	}
	if (trim($_POST['option']) == '') {
		$optionErr = "* Vui long chon danh muc san pham";
	}
	else if (mysqli_query($conn, $sql)) 
	{
    	header('Location:/admin/modules/product/index.php');
	}
// }
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
							        <form role="form" method="POST">
							        	<br style="clear:both">
					                    <h3 class="green-text mb-5 mt-4 font-bold" >Edit product</h3>
					                    <div class="form-group">
					                    	<label for="name">Code</label>
											<input type="text" class="form-control" id="code" name="code" value="<?php echo $code ?>">
										</div>
					    				<div class="form-group">
					    					<label for="name">Name</label>
											<input class="form-control" type="text" name="name" value="<?php echo $name ?>">
											<div class="help-inline text-danger"><?php echo $nameErr; ?></div>
										</div>
										<div class="form-group">
											<label for="name">Price</label>
											<input class="form-control" type="text" id="price" name="price" value="<?php echo $price ?>">
											<div class="help-inline text-danger"><?php echo $priceErr; ?></div>
										</div>
										<div class="form-group">
											<label for="name">Price-Sale</label>
											<input class="form-control" type="text" id="price" name="price_sale" value="<?php echo $priceSale ?>">
											<div class="help-inline text-danger"><?php echo $priceErr; ?></div>
										</div>
										<div class="form-group">
											<label for="name">Qty</label>
											<input class="form-control" type="text" id="qty" name="qty" value="<?php echo $qty ?>">
										</div>
										<div class="form-group">
											<label for="name">Description</label>
											<input class="form-control" type="text" id="description" name="description" value="<?php echo $des ?>">
										</div>
					                    <div class="form-group">
					                    	<label for="name">Rate</label>
											<input class="form-control" type="text" id="rate" name="rate" value="<?php echo $rate ?>">
										</div>
											<label for="name">Category</label>
								            <select name="option" class="form-control" >
								            	<option value="">---Chon---</option>
											<?php foreach ($category as $item) 
												{
											?>
												<option value="<?php echo $item['id'] ?>" <?php if($idCate == $item['id']) echo "selected" ?>>
													<?php echo $item['name']; ?>											
												</option>
											<?php 
												} 
											?>
											</select>
											<div class="help-inline text-danger"><?php echo $optionErr; ?></div>
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