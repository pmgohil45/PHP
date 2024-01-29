<?php

	include"config.php";
	$s3pdf = $_FILES['s3pdf'];
/*
	echo"<pre>";
	print_r($_FILES['s3pdf']);
	echo"</pre>";
*/
	$file_name = $_FILES['s3pdf']['name'];
	$file_type = $_FILES['s3pdf']['type'];
	$file_tmp_name = $_FILES['s3pdf']['tmp_name'];
	$file_path = "uploadpdf/".$file_name;
	move_uploaded_file($file_tmp_name,$file_path);
	//die;
	$s3name = $_REQUEST['s3name'];
	$ins = "insert into `sub3pdfdownload`(`s3name`,`s3pdf`) VALUES('$s3name','$file_path')";
	$res = mysqli_query($con,$ins);

	if($res == 1)
	{
		//echo"nice";
		header("location:sub3.php");
	}
	else
	{
		echo"Not upload file";
	}
?>