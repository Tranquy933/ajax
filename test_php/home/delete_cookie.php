<?php 
	setcookie('user', $_POST['user'], time()-3600);
	setcookie('password', $_POST['pass'], time()-3600);

 ?>