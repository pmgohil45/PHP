<?php

	include"config.php";
	$s3pdf = $_FILES['s3pdf'];
/*
	echo"<pre>";
	print_r($_FILES['s2pdf']);
	echo"</pre>";
*/

	
if (isset($_POST['submit'])) { // if save button on the form is clicked
	$file_name = $_FILES['s3pdf']['name'];
	$size = $_FILES['s3pdf']['size'];
	$file_type = $_FILES['s3pdf']['type'];
	$file_tmp_name = $_FILES['s3pdf']['tmp_name'];
	$file_path = "downloads/uploadpdf/".$file_name;
	//move_uploaded_file($file_tmp_name,$file_path);
	//die;
	if (move_uploaded_file($file_tmp_name,$file_path)) {
		$s3name = $_REQUEST['s3name'];
		$ins = "insert into `sub3pdfdownload`(`s3name`, `name`, `size`,`s3pdf`) VALUES('$s3name','$file_name','$size','$file_path')";
		$res = mysqli_query($con,$ins);

		if($res == 1)
		{
			//echo"nice";
			header("location:sub2.php");
		}
		else
		{
		echo"<script>alert('PDF not upload, pleas check again...!');
			window.location='sub2Insert.php';</script>";
		}
	}
}
?>