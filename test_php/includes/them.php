<?php 	

include ('../inc/myconnect.php');
if (isset($_POST['submit'])) 
{
	$code 	= $_POST['code'];
    $name 	= $_POST['name'];
    $price 	= $_POST['price'];
    $qty 	= $_POST['qty'];
    $option	= $_POST['option'];
    $des	= $_POST['description'];
    $rate	= $_POST['rate'];
 	$date 	= date('Y-m-d H:i:s');
	$sql 	= 'INSERT INTO `product`(code, name, price, qty, id_cate,description, rate,created_at, updated_at ) VALUES ("'.$code.'","'.$name.'","'.$price.'","'.$qty.'","'.$option.'","'.$des.'","'.$rate.'", "'.$date.'",  "'.$date.'")';
	if(mysqli_query($conn, $sql))
	{
		header('Location:/home/index.php');
	}
	else
	{
		echo"Error";
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
				<td><input type="text" name="code" value=""></td>
			</tr>
			<tr>
				<td><label>Name</label></td>
				<td><input type="text" name="name" value=""></td>
			</tr>
			<tr>
				<td><label>Price</label></td>
				<td><input type="text" name="price" value=""></td>
			</tr>
			<tr>
				<td><label>Description</label></td>
				<td><input type="text" name="description" value=""></td>
			</tr>
			<tr>
				<td><label>Qty</label></td>
				<td><input type="text" name="qty" value=""></td>
			</tr>
			<tr>
				<td><label>Rate</label></td>
				<td><input type="text" name="rate" value=""></td>
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
				<td class="td_submit" colspan="2"><input type="submit" name="submit" value="Them"></td>
			</tr>
		</table>
	</form>
</div>