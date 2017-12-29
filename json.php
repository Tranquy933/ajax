<?php 
include ('inc/connect.php');
// Get List Member
$student = [];
$result = mysqli_query($conn, "SELECT * FROM student");
    while ($row = mysqli_fetch_assoc($result)){
       	$student[] = $row;
    }
	echo json_encode($student);
?>

<html>
	
	<h1>kmjxcloskdmf</h11>
	<p>sdfsdfsd</p>

	<p>lam viec voi git cho nguoi moi lam</p>
	
</html>
