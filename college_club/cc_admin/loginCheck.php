<?php
	include"config.php";
	$aunm = $_REQUEST['aunm'];
	$apassword = $_REQUEST['apassword'];

	$select = "select * from `admin` where `aunm`='$aunm' and `apassword`='$apassword'";
	$res = mysqli_query($con,$select);
	$count = mysqli_num_rows($res);
	if($count>0)
	{	
		session_start();
		$unmCheck = $_SESSION['aunm'] = $aunm;
		$passwordCheck = $_SESSION['apassword'] = $apassword;
		if(null !== $unmCheck && null !== $passwordCheck)
		{
			echo $unmCheck;
			echo $passwordCheck;
			header("location:adminpanel.php?aunm=echo $aunm");
		}
		else
		{
			echo"<h2>Wrong details...!</h2>";
		}
	}
	else{

		echo"<script>alert('Please enter valid details...!');
						window.location='index.php';</script>";
	}
?>