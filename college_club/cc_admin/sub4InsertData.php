<?php

	include"config.php";
	$s4pdf = $_FILES['s4pdf'];
/*
	echo"<pre>";
	print_r($_FILES['s4pdf']);
	echo"</pre>";
*/
	$file_name = $_FILES['s4pdf']['name'];
	$file_type = $_FILES['s4pdf']['type'];
	$file_tmp_name = $_FILES['s4pdf']['tmp_name'];
	$file_path = "uploadpdf/".$file_name;
	move_uploaded_file($file_tmp_name,$file_path);
	//die;
	$s4name = $_REQUEST['s4name'];
	$ins = "insert into `sub4pdfdownload`(`s4name`,`s4pdf`) VALUES('$s4name','$file_path')";
	$res = mysqli_query($con,$ins);

	if($res == 1)
	{
		//echo"nice";
		header("location:sub4.php");
	}
	else
	{
		echo"Not upload file";
	}
?>