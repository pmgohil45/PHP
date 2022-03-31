<?php
	include"config.php";
	$lemail = $_REQUEST['lemail'];
	$lpassword = $_REQUEST['lpassword'];

	$select = "select * from `login` where `lemail`='$lemail' and `lpassword`='$lpassword'";
	$res = mysqli_query($con,$select);
	$count = mysqli_num_rows($res);
	if($count>0)
	{	
		session_start();
		$emailCheck = $_SESSION['lemail'] = $lemail;
		$passwordCheck = $_SESSION['lpassword'] = $lpassword;
		if(null !== $emailCheck && null !== $passwordCheck)
		{
			echo $emailCheck;
			echo $passwordCheck;
			header("location:main.php?lemail=<?php echo $lemail; ?>");
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