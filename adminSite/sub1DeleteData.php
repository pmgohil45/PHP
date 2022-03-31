<?php
	include "config.php";
	
	$s1id = $_REQUEST['s1id'];
	$delete = "delete from `sub1pdfdownload` where `s1id`='$s1id'";
	$res = mysqli_query($con,$delete);
	header("location:sub1Delete.php");
?>