<?php 
include ('../inc/myconnect.php');


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

	$sql 	= "UPDATE `product` SET code = '".$code."', name = '".$name."', price = '".$price."', qty = '".$qty."', description = '".$des."', rate = '".$rate."', id_cate = '".$option."', created_at = '".$date."', updated_at = '".$date."' WHERE id = '".$id."'";
	if (mysqli_query($conn, $sql)) 
	{
    	header('localhost:8002/home/index.php');
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
				<td><input type="text" name="code" value="<?php $_GET['id'] ?>"></td>
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
				<td><label>Qty</label></td>
				<td><input type="text" name="qty" value=""></td>
			</tr>
			<tr>
				<td><label>Description</label></td>
				<td><input type="text" name="description" value=""></td>
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
				<td class="td_submit" colspan="2"><input type="submit" name="submit" value="Sua"></td>
			</tr>
		</table>
	</form>
</div>