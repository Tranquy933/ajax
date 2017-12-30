	
<?php 
	session_start();
	if (isset($_SESSION['user']) && isset($_SESSION['pass'])) {
		echo ("userNam la :".$_SESSION['user']). "<br>";
		echo ("Password la :".$_SESSION['pass']);
	}
	else
	{
		echo "session khong ton tai";
	}
?>
<br><a href="session.php">Tro ve trang session</a>
<br><a href="delete_session.php">Huy session</a>
