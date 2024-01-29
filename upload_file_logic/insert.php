<?php
	include"config.php";
	$name = $_REQUEST['name'];
	$img = $_FILES['uploadImg'];
/*
	echo"<pre>";
	print_r($img);
*/
	$file_name = $_FILES['uploadImg']['name'];
	$file_type = $_FILES['uploadImg']['type'];
	$file_tmp_name = $_FILES['uploadImg']['tmp_name'];
	$file_path = "upload/".$file_name;
	move_uploaded_file($file_tmp_name,$file_path);
	//die;
	
	$ins = "insert into `image`(`name`,`img`) VALUES('$name','$file_path')";
	$res = mysqli_query($con,$ins);

	if($res == 1)
	{
		header("location:view.php");
	}
	else
	{
		echo"Not upload file";
	}

?>