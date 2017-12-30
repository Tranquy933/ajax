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
<table>
    <tbody>
        <tr>
            <td><span>Code</span></td>
            <td><span>Name</span></td>
            <td><span>Price</span></td>
            <td><span>Rate</span></td>
            <td><span>Name_cate</span></td>
            <td><span>Created_at</span></td>
            <td><span>Uppdated_at</span></td>
            <td><span>Sua / Xoa</span></td>
        </tr>
        <?php foreach($products as $item): ?>
        <tr>
          	<?php $id = $item['id']; ?>
            <td><?php echo $item['code'] ?></td>    
            <td><?php echo $item['name'] ?></td>
            <td><?php echo $item['price'] ?></td>
            <td><?php echo $item['rate'] ?></td>
            <td><?php echo $item['category_name'] ?></td>
            <td><?php echo $item['created_at'] ?></td>
            <td><?php echo $item['updated_at'] ?></td>
            <td><?php echo "<a href='sua.php?id=$id'>Sua</a>
            				<a href='xoa.php?id=$id'>Xoa</a>" ?>
            </td>
      
        </tr>

        <?php endforeach; ?>
    </tbody>
</table>