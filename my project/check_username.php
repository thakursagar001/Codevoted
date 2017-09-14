<?php


	$con=mysqli_connect("31.220.16.25","u794392031_sagar","","u794392031_tutor");
	if(!$con){
		
		die("cannot connect");
	}
	
	$query = "SELECT email FROM login WHERE email = '".$_POST['username']."'";
	$result_login = mysqli_query($con,$query);
	$anything_found=mysqli_num_rows($result_login);
	
	if($anything_found>0)
	{
		echo "1";
		 
	return false;
	}
	else 
	{ 
		echo "0"; 
		return false;
		    
	}
	
?>