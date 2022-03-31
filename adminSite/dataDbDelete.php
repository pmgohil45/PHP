<?php
	include "config.php";
	
	$lid = $_REQUEST['lid'];
	$delete = "delete from `login` where `lid`='$lid'";
	$res = mysqli_query($con,$delete);
	if($res == TRUE)
	{
		header("location:dataDb.php");
	}else{
		echo"<script>alert('Data Not Deleted...!');
						window.location='dataDb.php';</script>";
	}
?>