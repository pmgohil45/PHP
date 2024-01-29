<?php
	include"config.php";

	$id = $_REQUEST['id'];
	
	$name = $_REQUEST['name'];
	$email = $_REQUEST['email'];
	$password = $_REQUEST['password'];
	$number = $_REQUEST['number'];
	$dob = $_REQUEST['dob'];
	$gender = $_REQUEST['gender'];
	$city = $_REQUEST['city'];
	
	$update = "update `form` set `name`='$name',`email`='$email',`password`='$password',`number`='$number',
		`dob`='$dob',`gender`='$gender',`city`='$city' where `id`='$id'";
	$res = $con -> query($update);
	header("location:view.php");
?>