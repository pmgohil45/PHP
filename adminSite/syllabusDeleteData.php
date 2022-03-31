<?php
	include "config.php";
	
	$sid = $_REQUEST['sid'];
	$delete = "delete from `syllabus` where `sid`='$sid'";
	$res = mysqli_query($con,$delete);
	header("location:syllabusDelete.php");
?>