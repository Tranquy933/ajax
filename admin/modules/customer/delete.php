
<?php 
	include ('../../inc/connect.php');
	if (isset($_GET['id'])) {
		$id 	= $_GET['id'];
		$query 	= "DELETE FROM `customer` WHERE id = '".$id."'";
		if(mysqli_query($conn, $query)){
			
			header('Location:/admin/modules/customer/index.php');
		}
		else 
		{
		    echo "Error";
		}
	}

?>

