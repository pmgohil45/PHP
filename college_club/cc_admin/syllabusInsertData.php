<?php

	include"config.php";
	$spdf = $_FILES['spdf'];
/*
	echo"<pre>";
	print_r($_FILES['spdf']);
	echo"</pre>";
*/
	$file_name = $_FILES['spdf']['name'];
	$file_type = $_FILES['spdf']['type'];
	$file_tmp_name = $_FILES['spdf']['tmp_name'];
	$file_path = "uploadpdf/".$file_name;
	move_uploaded_file($file_tmp_name,$file_path);
	//die;
	$sname = $_REQUEST['sname'];
	$ins = "insert into `syllabus`(`sname`,`spdf`) VALUES('$sname','$file_path')";
	$res = mysqli_query($con,$ins);

	if($res == 1)
	{
		//echo"nice";
		header("location:syllabus.php");
	}
	else
	{
		echo"Not upload file";
	}
?>