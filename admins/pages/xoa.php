<?php 
	include ('../inc/connect.php');
	if (isset($_GET['id'])) {
		$id 	= $_GET['id'];
		$query 	= "DELETE FROM `product` WHERE id = '".$id."'";
		if(mysqli_query($conn, $query)){
			header('Location:/admin/pages/home.php');
		}
		else 
		{
		    echo "Error";
		}
	}

?>

