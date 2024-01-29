<?php
	require "config.php";
	$name = $_REQUEST['name'];
	$email = $_REQUEST['email'];
	$number = $_REQUEST['number'];
	$dob = $_REQUEST['dob'];
	$gender = $_REQUEST['gender'];
	$city = $_REQUEST['city'];
	
	$insert = "insert into `prakash`(`name`,`email`,`number`,`dob`,`gender`,`city`) 
			values ('$name','$email','$number','$dob','$gender','$city')";
	$res = mysqli_query($con,$insert);
	
	if($res == 1)
		echo"Record Inserted";
	else
		echo"Record Not Inserted";
	
	header("location: view.php");
?>