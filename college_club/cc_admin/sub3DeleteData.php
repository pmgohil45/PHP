<?php
	include "config.php";
	
	$s3id = $_REQUEST['s3id'];
	$delete = "delete from `sub3pdfdownload` where `s3id`='$s3id'";
	$res = mysqli_query($con,$delete);
	header("location:sub3Delete.php");
?>