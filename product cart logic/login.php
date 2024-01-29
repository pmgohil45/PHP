<?php
	include"config.php";
	$email = $_REQUEST['email'];
	$password = $_REQUEST['password'];

	$select = "select * from `form` where `email`='$email' and `password`='$password'";
	$res = $con -> query($select);
	$count = $res->num_rows;
	if($count>0)
	{	
		session_start();
		$emailCheck = $_SESSION['email'] = $email;
		$passwordCheck = $_SESSION['password'] = $password;
		if(null !== $emailCheck && null !== $passwordCheck)
		{
			echo $emailCheck;
			echo $passwordCheck;
			header("location:view.php?email=echo $email");
		}
		else
		{
			echo"<h2>Wrong details...!</h2>";
		}
	}
	else{

		echo"<script>alert('Please enter valid details...!');
						window.location='loginForm.php';</script>";
	}
?>