<?php
	include"config.php";
	$name = $_REQUEST['name'];
	$email = $_REQUEST['email'];
	$password = $_REQUEST['password'];
	
	$ins = "insert into login(`name`,`email`,`password`) values ('$name','$email','$password')";
	$res = mysqli_query($con,$ins);
	header("location:login.php");
?>