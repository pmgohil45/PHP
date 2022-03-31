<?php
	include "config.php";
	
	$s4id = $_REQUEST['s4id'];
	$delete = "delete from `sub4pdfdownload` where `s4id`='$s4id'";
	$res = mysqli_query($con,$delete);
	header("location:sub4Delete.php");
?>