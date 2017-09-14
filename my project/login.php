<?php
session_start();

include("setting.php");
$email=$_REQUEST["email1"];
$pass=$_REQUEST["password1"];
$query = "SELECT password FROM login WHERE email = '".$email."'";
$result=mysqli_query($con,$query);
$row=mysqli_fetch_array($result);
if($row['password']==$pass){
	$_SESSION['loggedin']="sagar";
	$_SESSION['username']=$email;

}
else{
	$_SESSION['username']="salal";
	$_SESSION['check']="on";
	
}

	header('location:index.php');







?>