<?php


include("setting.php");
$email=$_REQUEST['email'];
$pass=$_REQUEST['password'];


$sql="INSERT INTO login (email, password) VALUES ('".$email."','" .$pass."')";
$result=mysqli_query($con,$sql);
mysqli_close($con);
header('location:index.php');

?>