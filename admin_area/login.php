<?php 
session_start();
include("includes/connect.php");
?><!DOCTYPE html>
<html lang="en">
<head>
<title>Admin Login</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Destino project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="styles/login.css">
</head>
<body><div class="login">
	<h1>Login</h1>
    <form method="post">
    	<input type="text" name ="admin_email" placeholder="Username" required="required" />
        <input type="password" name="p" placeholder="Password" required="required" />
        <button type="submit" name="login" class="btn btn-primary btn-block btn-large" >Admin Login</button>
    </form>
</div>

</body>
</html>
<?php 
if(isset($_POST['login'])){
	
	$user_email = $_POST['admin_email'];
	$user_pass = $_POST['p'];
	
	$sel_admin ="select * from admin where admin_email='$user_email' AND admin_pass = '$user_pass'";
	$run_admin = mysqli_query($con, $sel_admin);
	$check_admin = mysqli_num_rows($run_admin);
	if($check_admin==1){
		
		$_SESSION['admin_email']=$user_email;
		echo "<script>window.open('index.php?logged_in=Welcome to the Admin Panel', '_self')</script>";
		
	}
	else{
		echo "<script>alert('Email or Password is wrong, try again!')</script>";
		
	}
	
	}


?>