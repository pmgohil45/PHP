<?php

	include"config.php";
	$s1pdf = $_FILES['s1pdf'];
/*
	echo"<pre>";
	print_r($_FILES['s1pdf']);
	echo"</pre>";
*/
	$file_name = $_FILES['s1pdf']['name'];
	$file_type = $_FILES['s1pdf']['type'];
	$file_tmp_name = $_FILES['s1pdf']['tmp_name'];
	$file_path = "uploadpdf/".$file_name;
	move_uploaded_file($file_tmp_name,$file_path);
	//die;
	$s1name = $_REQUEST['s1name'];
	$ins = "insert into `sub1pdfdownload`(`s1name`,`s1pdf`) VALUES('$s1name','$file_path')";
	$res = mysqli_query($con,$ins);

	if($res == 1)
	{
		//echo"nice";
		header("location:sub1.php");
	}
	else
	{
		echo"Not upload file";
	}
?>