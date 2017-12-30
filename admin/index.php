<?php 
	session_start();
	if (isset($_SESSION['name']) === false) 
	{
	 	header('Location:/admin/login.php/');
	 	exit();
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
        <?php include('includes/inc_css_js.php'); ?>
    </head>
    <body class="hold-transition skin-blue sidebar-mini">
        <div id="body">
            <div id="container_body">
                <div class="wrapper">
                    <div id="header" class="clearfix"><?php include("includes/inc_header.php");?></div>
                    <div id="sideba" class="clearfix"><?php include("includes/inc_sideba.php");?></div>
                    <div id="content" class="clearfix"><?php include("includes/inc_content.php");?></div>
                </div>
            </div>
        </div>
    </body>
</html>