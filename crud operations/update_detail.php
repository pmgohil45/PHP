<?php
	require "config.php";
	
	$id = $_REQUEST['id'];
	
	$name = $_REQUEST['name'];
	$email = $_REQUEST['email'];
	$number = $_REQUEST['number'];
	$dob = $_REQUEST['dob'];
	$gender = $_REQUEST['gender'];
	$city = $_REQUEST['city'];
	
	$update = "update `prakash` set `name`='$name',`email`='$email',`number`='$number',`dob`='$dob',
		`gender`='$gender',`city`='$city' ";
	$res = mysqli_query($con,$update);
	header("location: view.php");
?>