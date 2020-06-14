<!DOCTYPE html>
<?php
session_start();
include("includes/connect.php");
 if(!isset($_SESSION['customer_email'])){
	@session_start();
	echo"<script>window.open('checkout.php','_self')</script>";
	
}
else{
?><html>
<head></head>
<body>

<h2>Welcome Guest!</h2>
<h3> You have successfully paid for this product</h3>
<b>Please go to your account</b></br>
<a href="http://www.qxadia.com.au/goutam/customer/my_account.php">Go to My Account</a>


</body>


</html>
<?php } ?>