<?php
	include"config.php";
	$name = $_REQUEST['name'];
	$email = $_REQUEST['email'];
	$password = $_REQUEST['password'];
	$number = $_REQUEST['number'];
	$dob = $_REQUEST['dob'];
	$gender = $_REQUEST['gender'];
	$city = $_REQUEST['city'];

	$insert = "insert into `form`(`name`,`email`,`password`,`number`,`dob`,`gender`,`city`) values
		('$name','$email','$password','$number','$dob','$gender','$city')";
	$res = $con -> query($insert);
	header("location:view.php");
?>