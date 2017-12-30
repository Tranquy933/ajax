
<?php 
session_start();
    include ('inc/myconnect.php');
    if (isset($_POST['submit'])) {
        $name = $_POST['username'];
        $pass = md5($_POST['password']);
        $sql = 'SELECT user,password FROM admin WHERE user = "'.$name.'"';
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result);
        if (mysqli_num_rows($result) != 0) {
            $_SESSION['name'] = $row['user'];
            $_SESSION['password'] = $row['password'];
            header('Location:/admin/index.php/');
        }
        else
        {
            echo "Login failed";
            
        }
        
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
        <?php include('includes/inc_css_js.php');?>
    </head>
    <body>
        <div id="body">
            <div id="container_body">
                <div class="container">    
                	<div id="loginbox" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">         
                		<div class="panel panel-info" >
                            <div class="panel-heading">
                                <div class="panel-title">Sign In</div>
                            </div>    
                        	<div style="padding-top:30px" class="panel-body" >
                        		<form id="loginform" class="form-horizontal" role="form" method="POST">
                                    
                            		<div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-user" aria-hidden="true"></i></span>
                                        <input id="login-username" type="text" class="form-control" name="username" value="" placeholder="username">                                        
                                    </div>
                                
                            		<div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-unlock-alt" aria-hidden="true"></i></span>
                                        <input id="login-password" type="password" class="form-control" name="password" placeholder="password">
                                    </div>
                                    <div style="margin-top:10px" class="form-group">
                                        <div class="col-sm-12 controls">
                                          <a id="btn-login" class="btn btn-success"><input style="background: #5cb85c;border: none;" type="submit" name="submit" value="Login"></a>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div> 
                    </div> 
                </div> 
             </div>
        </div>
    </body>
</html> 