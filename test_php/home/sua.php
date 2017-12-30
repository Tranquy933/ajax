<?php 
include ('../inc/myconnect.php');
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
    	header('Location:/home/index.php');
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