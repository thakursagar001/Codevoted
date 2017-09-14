<?php
session_start();
$_SESSION['loggedin']="";
header('location:index.php');

?>