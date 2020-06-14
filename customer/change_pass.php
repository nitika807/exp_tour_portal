<?php
include("includes/connect.php");
@session_start();
include("includes/connect.php");
if(!isset($_SESSION['customer_email'])){
	@session_start();
	echo"<script>window.open('../checkout.php','_self')</script>";
	
}
else{
?>
<link rel="stylesheet" type="text/css" href="styles/offers_styles.css">
<link rel="stylesheet" type="text/css" href="styles/offers_responsive.css">


<script>
var check = function() {
  if (document.getElementById('password').value ==
    document.getElementById('confirm_password').value) {
    document.getElementById('message').style.color = 'green';
    document.getElementById('message').innerHTML = 'matching';
  } else {
    document.getElementById('message').style.color = 'red';
    document.getElementById('message').innerHTML = 'not matching';
  }
}
</script>

<div style="text-align:center;"><b><h3>Change Your Password</h3></b></div>
<div class="container1">
<form action="" method="post">
				<div class="row">
					
						
						<div class="col"><label>Current Password:</label><input type="password" name="old_pass" required></b></div></div>
				<div class="row">
						<div class="col"><label>New Password:</label><input type="password" name="new_pass" id="password" onkeyup='check();' required></b></div></div>
				<div class="row">
						<div class="col"><label>Confirm New Password:</label><input type="password" name="new_pass_again" id="confirm_password" onkeyup='check();' required></b><span id='message'></span></div></div>
				<div class="row"><div class="col"><input type="submit" name="change_pass" value="Change Password" ></div></div>
					</div>						
				</form>
<?php 

include("includes/connect.php");
$c= $_SESSION['customer_email'];

if(isset($_POST['change_pass'])){
	
	$old_pass= $_POST['old_pass'];
	$new_pass = $_POST['new_pass'];
	$new_pass_again = $_POST['new_pass_again'];
	$uppercase = preg_match('@[A-Z]@', $new_pass);
	$lowercase = preg_match('@[a-z]@', $new_pass);
	$number    = preg_match('@[0-9]@', $new_pass);
	$specialChars = preg_match('@[^\w]@', $new_pass);
	
	
	$get_real_pass = "select * from customers where customer_pass = '$old_pass'";

	$run_real_pass = mysqli_query($con, $get_real_pass);
	
	if(mysqli_num_rows($run_real_pass)==0){
		
		echo "<script>alert('Current Password is not valid')</script>";
		exit();
	}
	if($new_pass!==$new_pass_again){
		echo "<script>alert('New Password did not match, try again!')</script>";
		exit();
		
	}
	if(!$uppercase || !$lowercase || !$number || !$specialChars || strlen($new_pass) < 8) {
				echo "<script>alert('Password should be at least 8 characters in length and should include at least one upper case letter, one number, and one special character.')</script>";
				exit();
		}
	else{
		
		$update_pass = "update customers set customer_pass='$new_pass', customer_confpass='$new_pass_again' where customer_email='$c'";
		$run_pass = mysqli_query($con, $update_pass);
		
		echo "<script>alert('Your Password has been successfully changed!')</script>";
		echo "<script>window.open('my_account.php','_self')</script>";
	}
	
	}
}


 ?>