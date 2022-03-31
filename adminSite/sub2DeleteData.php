<?php
	include "config.php";
	
	$s2id = $_REQUEST['s2id'];
	$delete = "delete from `sub2pdfdownload` where `s2id`='$s2id'";
	$res = mysqli_query($con,$delete);
	header("location:sub2Delete.php");
?>