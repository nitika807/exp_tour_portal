<?php
@session_start();
include("includes/connect.php");
$msg = "";
?>
	<div class="contact">
		<div class="container">
			<div class="row">
				<div class="col">
				<h2>Log in</h2><br>

				<form action="checkout.php" method="post">
				<div class="form-group">
				<label>Email address</label>
				<input type="email" name="c_email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required placeholder="Enter Your Email"/>
				<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
				</div>
				
		<div class="form-group">
			<label for="exampleInputPassword1">Password</label>
			<input type="password" name="c_pass" class="form-control" id="exampleInputPassword1" required placeholder="Enter Your Password"/>
		</div>
		
			  <div class="form-check">
				</div>
				<div class="contact_text"><a href="change_pass.php">Forgot Password? <br> </a></div></br>
			  <input type="submit" name="c_login" value="Submit" class="btn btn-primary"/> 
			</form><br>

			<div class="contact_subtitle"> <b>Do not have an account?</b></div>
			<div>
			<div class="contact_text"><a href="signup.php"> Create an account </a></div></div>
<?php 

if(isset($_POST['c_login'])){
	$customer_email = $_POST['c_email'];
	$customer_pass = $_POST['c_pass'];
	$sel_customer = "select * from customers where customer_email='$customer_email' AND customer_pass='$customer_pass'";
	$run_customer = mysqli_query($con, $sel_customer);
	
	$check_customer = mysqli_num_rows($run_customer);
	$get_ip = getUserIpAddr();
	
	$sel_cart = "select * from cart where ip_add = '$get_ip'";
	$run_cart = mysqli_query($con, $sel_cart);
	$check_cart = mysqli_num_rows($run_cart);
	if($check_customer==0){
		echo "<script>alert('Password or Email address is not correct, try again !')</script>";
		
	}else{
	if($check_customer==1 AND $check_cart==0){
		$_SESSION['customer_email']= $customer_email;
		echo "<script> window.open('customer/my_account.php', '_self')</script>";
	}
	else{
		$_SESSION['customer_email']= $customer_email;
		echo "<script> window.open('customer/my_account.php', '_self')</script>";
	
	}
	}
	
	}


?>			
			</div>
			</div>
			</div>
			</div>