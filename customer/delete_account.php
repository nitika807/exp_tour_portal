<?php if(!isset($_SESSION['customer_email'])){
	@session_start();
	echo"<script>window.open('../checkout.php','_self')</script>";
	
}
else{?>


<form action="" method="post">
	</br></br></br></br><h2>Do you really want to delete your account?</h2>
	<input type="submit" name="yes" class = "btn btn-primary" value = "Yes"></br></br>
	<input type="submit" name="no" class="btn btn-primary" value = "No">
	</br></br><h4>Before deleting your account, please have a look at our latest <a href="../offers.php">offers</a>. Do not 
	miss the opportunity to explore new destinations!</h4>
</form>

<?php 
include("includes/connect.php");
$c = $_SESSION['customer_email'];
if(isset($_POST['yes'])){
	$delete_customer = "delete from customers where customer_email='$c'";
	$run_delete = mysqli_query($con, $delete_customer);
	
	if($run_delete){
		session_destroy();
		
		echo "<script>alert('Your account has been deleted, Good Bye!')</script>";
		echo "<script>window.open('../index.php','_self')</script>";
		
	}
	
}
if(isset($_POST['no'])){
	
	echo "<script>window.open('my_account.php', '_self')</script>";
}

}
?>